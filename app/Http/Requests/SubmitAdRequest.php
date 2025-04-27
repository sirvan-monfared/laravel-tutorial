<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SubmitAdRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'min:5', 'max:255'],
            'category_id' => ['required', 'int', Rule::exists('categories', 'id')],
            'location_id' => ['required', 'int', Rule::exists('locations', 'id')],
            'description' => ['required', 'min:20'],
            'price' => ['nullable']
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'وارد کردن عنوان آگهی ضروری است',
            'title.min' => 'عنوان آگهی باید حداقل شامل :min حرف باشد',
            'title.max' => 'عنوان آگهی باید حداکثر شامل :max حرف باشد',
            'description.required' => 'وارد کردن توضیحات آگهی ضروری است',
            'description.min' => 'توضیحات آگهی باید حداقل شامل :min حرف باشد',
            'category_id.*' =>  'گروه انتخاب شده برای آگهی معتبر نیست',
            'location_id.*' =>  'لوکیشن انتخاب شده برای آگهی معتبر نیست',
        ];
    }
}
