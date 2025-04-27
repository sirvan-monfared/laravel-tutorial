<?php

namespace App\Services;

use App\Enums\OrderStatus;
use App\Models\Ad;
use App\Models\Order;
use Exception;
use Shetabit\Multipay\Exceptions\InvalidPaymentException;
use Shetabit\Multipay\Invoice;
use Shetabit\Payment\Facade\Payment;

class PaymentService
{
    public function sendToGateway(Ad $ad)
    {
        $invoice = $this->createInvoice($ad);

        return $this->createPayment($invoice, $ad)->pay()->render();
    }

    public function handleCallback(Order $order): void
    {
        try {
            $referenceId = $this->verifyPayment($order);

            $this->updateSuccessfulOrder($order, $referenceId);

            $this->applySpecialOnAd($order->ad);

        } catch (InvalidPaymentException|Exception $e) {
            $this->updateFailedOrder($order, $e->getMessage());
        }
    }

    private function createInvoice(Ad $ad): Invoice
    {
        $invoice = new Invoice();

        $amount = intval(config('settings.payment.amount'));
        $invoice->amount($amount);
        $invoice->detail('ad_id', $ad->id);
        $invoice->detail('description', "ارتقای آگهی شماره {$ad->id} به پلان فوری");

        return $invoice;
    }


    private function createOrder($ad, $amount, $transactionId, $invoice, $driver): Order
    {
        return Order::create([
            'ad_id' => $ad->id,
            'user_id' => auth()->id(),
            'amount' => $amount,
            'transaction_id' => $transactionId,
            'info' => serialize($invoice),
            'description' => $invoice->getDetail('description'),
            'gateway' => class_basename($driver),
            'status' => OrderStatus::PENDING
        ]);
    }

    private function createPayment(Invoice $invoice, Ad $ad): \Shetabit\Multipay\Payment
    {
        return Payment::callbackUrl(route('dashboard.payment.callback'))
            ->purchase(
                $invoice,
                fn($driver, $transactionId) => $this->createOrder($ad, $invoice->getAmount(), $transactionId, $invoice, $driver)
            );
    }

    private function verifyPayment(Order $order): string
    {
        $receipt = Payment::amount($order->amount)->transactionId($order->transaction_id)->verify();
        return $receipt?->getReferenceId();
    }

    private function updateSuccessfulOrder(Order $order, string $referenceId): void
    {
        $order->reference_id = $referenceId;
        $order->status = OrderStatus::PAID;

        $order->save();
    }

    private function applySpecialOnAd(Ad $ad): void
    {
        $ad->special = true;
        $ad->save();
    }

    private function updateFailedOrder(Order $order, string $message): void
    {
        $order->status = OrderStatus::CANCELED;
        $order->errors = $message;
        $order->save();
    }
}
