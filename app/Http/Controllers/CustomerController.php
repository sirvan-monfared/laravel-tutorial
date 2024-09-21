<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customer.index', [
            'customer' => $customers
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
        return view('customer.create');
    }

    public function store()
    {
        dd('yess');
    }
}
