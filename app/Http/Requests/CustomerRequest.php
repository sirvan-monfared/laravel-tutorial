<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CustomerRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'min:3', 'max:255'],
            'last_name' => ['required', 'min:5', 'max:255'],
            'email' => ['required', 'email',  Rule::unique('customers', 'email')->ignore($this->route()->customer)],
            'phone' => ['required', 'digits:11', Rule::unique('customers', 'phone')->ignore($this->route()->customer)],
            'card_number' => ['nullable', 'digits:16'],
            'biography' => []
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'وارد کردن نام ضروری است',
            'name.min' => 'نام وارد شده باید حداقل :min کاراکتر باشد',
            'name.max' => 'نام وارد شده باید حداکثر :max کاراکتر باشد',
            'last_name.required' => 'وارد کردن نام خانوادگی ضروری است',
            'last_name.min' => 'نام خانوادگی وارد شده باید حداقل :min کاراکتر باشد',
            'last_name.max' => 'نام خانوادگی وارد شده باید حداکثر :max کاراکتر باشد',
            'email.unique' => 'ایمیل توسط کاربر دیگری استفاده شده است',
            'email.*' => 'ایمیل وارد شده معتبر نیست',
        ];
    }
}
