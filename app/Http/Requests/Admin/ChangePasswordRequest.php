<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ChangePasswordRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'old_password' => Rule::when(
                $this->user->is(auth()->user()),
                ['required']
            ),
            'password' => ['required', 'min:3', 'confirmed']

        ];
    }
}
