<?php

namespace App\Livewire\Forms;

use Illuminate\Validation\Rule;
use Livewire\Form;

class AdForm extends Form
{
    public ?string $title = '';
    public ?string $category_id = '';
    public ?string $location_id = '';
    public ?string $description = '';
    public ?string $price = '';

    public array $message = [];

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

    public function messages(): array
    {
        return [
            'title.required' => 'وارد کردن عنوان آگهی ضروری است',
            'title.min' => 'عنوان آگهی باید حداقل شامل :min حرف باشد',
            'title.max' => 'عنوان آگهی باید حداکثر شامل :max حرف باشد',
            'description.required' => 'وارد کردن توضیحات آگهی ضروری است',
            'description.min' => 'توضیحات آگهی باید حداقل شامل :min حرف باشد',
            'category_id.*' => 'گروه انتخاب شده برای آگهی معتبر نیست',
            'location_id.*' => 'لوکیشن انتخاب شده برای آگهی معتبر نیست',
        ];
    }

    public function setSuccessMessage(): void
    {
        $this->message = [
            'message' => 'عملیات با موفقیت انجام شد',
            'type' => 'success'
        ];
    }

    public function setFailMessage(): void
    {
        $this->message = [
            'message' => 'مشکلی در انجام عملیات پیش آمده است',
            'type' => 'danger'
        ];
    }

}
