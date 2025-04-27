<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ChangePasswordRequest;
use App\Http\Requests\Admin\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.user.index', [
            'users' => User::latest('id')->paginate()
        ]);
    }

    public function create()
    {
        return view('admin.user.create', [
            'user' => new User
        ]);
    }

    public function store(UserRequest $request)
    {
        $user = User::create($request->all());
        return redirect()->to($user->editLink())->with(['success' => 'عملیات با موفقیت انجام شد']);
    }

    public function edit(User $user)
    {
        return view('admin.user.edit', [
            'user' => $user
        ]);
    }

    public function update(User $user, UserRequest $request)
    {
        $user->updateInfo($request->name, $request->email);
        return back()->with(['success' => 'عملیات با موفقیت انجام شد']);
    }

    public function destroy(User $user)
    {
        $user->delete();

        return back()->with(['success' => 'عملیات با موفقیت انجام شد']);
    }

    public function editPassword(User $user)
    {
        return view('admin.user.edit-password', [
            'user' => $user,
            'isCurrentUser' => $user->is(auth()->user())
        ]);
    }

    public function updatePassword(User $user, ChangePasswordRequest $request)
    {
        if ($user->is(auth()->user()) && ! Hash::check($request->old_password, $user->password)) {
            throw  ValidationException::withMessages([
                'old_password' => 'رمزعبور فعلی صحیح نیست'
            ]);
        }

        $user->updatePassword($request->password);

        return back()->with(['success' => 'عملیات با موفقیت انجام شد']);
    }
}
