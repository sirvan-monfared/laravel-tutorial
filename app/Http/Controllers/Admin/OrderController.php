<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('admin.order.index', [
            'orders' => Order::latest('id')->paginate()
        ]);
    }

    public function show(Order $order)
    {
        return view('admin.order.show', [
            'order' => $order
        ]);
    }

    public function destroy(Order $order)
    {
        $order->delete();

        return back()->with(['success' => 'عملیات با موفقیت انجام شد']);
    }
}
