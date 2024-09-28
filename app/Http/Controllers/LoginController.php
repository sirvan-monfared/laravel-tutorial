<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        // validate
        $validated = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        // login
//        $user = User::where('email', $request->email)->where('password', Hash::make($request->password))->first();
        if (! Auth::attempt($validated)) {
//            return back()->with('danger', 'Email and password are not correct')->withInput();
            throw ValidationException::withMessages([
                'email' => 'email and password are not correct'
            ]);
        }


        // regenerate sessions
        session()->regenerate();

        // redirect
        return redirect()->route('customer.index');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('customer.index');
    }
}
