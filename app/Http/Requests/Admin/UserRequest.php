<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'email' => ['required', 'email', Rule::unique('users', 'email')->ignore($this->user)],
            'password' => Rule::when(
                $this->routeIs('admin.user.store'),
                ['required', 'min:3', 'confirmed'],
                []
            )
        ];
    }
}
