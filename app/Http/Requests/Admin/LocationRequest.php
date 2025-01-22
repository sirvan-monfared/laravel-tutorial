<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class LocationRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'title' => ['required'],
            'slug' => ['required'],
            'parent_id' => ['nullable', Rule::exists('locations', 'id')]
        ];
    }

    public function messages(): array
    {
        return [
            'title' => 'وارد کردن عنوان الزامی است',
            'slug' => 'وارد کردن نامک الزامی است',
            'parent_id' => 'لطفا یک استان معتبر انتخاب کنید'
        ];
    }
}
