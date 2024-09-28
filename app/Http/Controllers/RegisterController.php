<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.create');
    }

    public function store(Request $request)
    {

        // validate
        $validated = $request->validate([
           'name' => ['required', 'min: 3'],
           'email' => ['required', 'email', Rule::unique('users', 'email')],
           'password' => ['required', 'confirmed', Password::min(5)->max(11)->letters()->numbers()->symbols()]
        ]);

        // create user
        $user = User::create($validated);

        // login user
        Auth::login($user);

        // redirect
        return redirect()->route('customer.index');
    }
}
