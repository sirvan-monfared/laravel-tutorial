<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductRequest extends FormRequest
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required'],
            'slug' => ['required', Rule::unique('products', 'slug')->ignore($this->route()->product, 'slug')],
            'category_id' => ['required', Rule::exists('categories', 'id')],
            'price' => ['required', 'numeric'],
            'short_description' => ['nullable', 'max:2000'],
            'qty' => ['required', 'numeric'],
            'sku' => ['nullable'],
            'description' => ['nullable', 'max:2000']
        ];
    }
}
