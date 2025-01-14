<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoryRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required'],
            'slug' => ['required'],
            'parent_id' => ['nullable', Rule::exists('categories', 'id')],
            'icon' => []
        ];
    }

    public function messages(): array
    {
        return [
            'title' => 'وارد کردن عنوان الزامی است',
            'slug' => 'وارد کردن نامک الزامی است',
            'parent_id' => 'لطفا یک دسته مادر معتبر انتخاب کنید'
        ];
    }
}
