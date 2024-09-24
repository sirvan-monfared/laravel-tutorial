<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
        $validated_data = $request->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'last_name' => ['required', 'min:5', 'max:255'],
            'email' => ['required', 'email', Rule::unique('customers', 'email')],
            'phone' => ['required', 'digits:11', Rule::unique('customers', 'phone')],
            'card_number' => ['nullable', 'digits:16'],
            'biography' => []
        ]);


        Customer::create($validated_data);

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
        $validated_data = $request->validate([
            'name' => ['required', 'min:5', 'max:255'],
            'last_name' => ['required', 'min:5', 'max:255'],
            'email' => ['required', 'email', Rule::unique('customers', 'email')->ignore($id)],
            'phone' => ['required', 'digits:11', Rule::unique('customers', 'phone')->ignore($id)],
            'card_number' => ['nullable', 'digits:16'],
            'biography' => []
        ], [
            'name.required' => 'وارد کردن نام ضروری است',
            'name.min' => 'نام وارد شده باید حداقل :min کاراکتر باشد',
            'name.max' => 'نام وارد شده باید حداکثر :max کاراکتر باشد',
            'last_name.required' => 'وارد کردن نام خانوادگی ضروری است',
            'last_name.min' => 'نام خانوادگی وارد شده باید حداقل :min کاراکتر باشد',
            'last_name.max' => 'نام خانوادگی وارد شده باید حداکثر :max کاراکتر باشد',
            'email.unique' => 'ایمیل توسط کاربر دیگری استفاده شده است',
            'email.*' => 'ایمیل وارد شده معتبر نیست',
        ]);


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
