<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        return view('customer.index', [
            'customers' => Customer::filter($request->keyword, $request->order_by)
        ]);
    }

    public function show($id)
    {
        $customer= Customer::find($id);

        return view('customer.show', [
            'customer' => $customer
        ]);
    }

    public function create()
    {
        return view('customer.create', [
            'customer' => new Customer
        ]);
    }

    public function store(Request $request)
    {
        Customer::create($request->all());

        return back();
    }

    public function edit($id)
    {
        $customer = Customer::findOrFail($id);

        return view('customer.edit', [
            'customer' => $customer
        ]);
    }

    public function update($id, Request $request)
    {
        $customer = Customer::findOrFail($id);

        $customer->update($request->all());

        return back();
    }

    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);

        $customer->delete();

        return back();
    }
}
