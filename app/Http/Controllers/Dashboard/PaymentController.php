<?php

namespace App\Http\Controllers\Dashboard;

use App\Enums\OrderStatus;
use App\Http\Controllers\Controller;
use App\Models\Ad;
use App\Models\Order;
use App\Services\AdService;
use App\Services\PaymentService;
use Exception;
use Illuminate\Http\Request;
use Shetabit\Multipay\Exceptions\InvalidPaymentException;
use Shetabit\Multipay\Invoice;
use Shetabit\Payment\Facade\Payment;

class PaymentController extends Controller
{
    public function start(int $id, PaymentService $payment)
    {
        $ad = AdService::findOrFail($id);

        return $payment->sendToGateway($ad);
    }

    public function callback(Request $request, PaymentService $payment)
    {
        $order = Order::where('transaction_id', $request->Authority)->where('status', OrderStatus::PENDING)->first();

        if (! $order) {
            abort(404);
        }

        $payment->handleCallback($order);

        return redirect()->route('dashboard.order.show', $order);
    }
}
