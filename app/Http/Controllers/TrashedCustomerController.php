<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class TrashedCustomerController extends Controller
{
    public function index()
    {
        return view('customer.trashed.index', [
            'customers' => Customer::onlyTrashed()->get()
        ]);
    }

    public function destroy($id)
    {
        $customer = Customer::onlyTrashed()->findOrFail($id);

        $customer->forceDelete();
        return back();
    }

    public function restore($id)
    {
        $customer = Customer::onlyTrashed()->findOrFail($id);

        $customer->restore();

        return back();
    }
}
