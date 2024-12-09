<?php

namespace App\Http\Controllers\Dashboard;

use App\Enums\OrderStatus;
use App\Http\Controllers\Controller;
use App\Models\Ad;
use App\Models\Order;
use App\Services\AdService;
use Exception;
use Illuminate\Http\Request;
use Shetabit\Multipay\Exceptions\InvalidPaymentException;
use Shetabit\Multipay\Invoice;
use Shetabit\Payment\Facade\Payment;

class PaymentController extends Controller
{
    public function start(int $id, Invoice $invoice)
    {
        $ad = AdService::findOrFail($id);

        $amount = intval(config('settings.payment.amount'));
        $invoice->amount($amount);
        $invoice->detail('ad_id', $ad->id);
        $invoice->detail('description', "ارتقای آگهی شماره {$ad->id} به پلان فوری");

        return Payment::callbackUrl(route('dashboard.payment.callback'))->purchase($invoice, function($driver, $transactionId) use ($ad, $amount, $invoice) {
            $order = Order::create([
                'ad_id' => $ad->id,
                'user_id' => auth()->id(),
                'amount'  => $amount,
                'transaction_id' => $transactionId,
                'info' => serialize($invoice),
                'description' => $invoice->getDetail('description'),
                'gateway'=> class_basename($driver),
                'status' => OrderStatus::PENDING
            ]);
        })->pay()->render();
    }

    public function callback(Request $request)
    {
        $order = Order::where('transaction_id', $request->Authority)->where('status', OrderStatus::PENDING)->first();

        if (! $order) {
            abort(404);
        }

        try {
            $receipt = Payment::amount($order->amount)->transactionId($order->transaction_id)->verify();
            $referenceId = $receipt->getReferenceId();

            $order->reference_id = $referenceId;
            $order->status = OrderStatus::PAID;
            $order->save();

        } catch(InvalidPaymentException|Exception $e) {
            $order->status = OrderStatus::CANCELED;
            $order->errors = $e->getMessage();
            $order->save();
        }

        return redirect()->route('dashboard.order.show', $order);
    }
}
