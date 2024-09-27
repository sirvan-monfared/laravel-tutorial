<?php

use App\Models\Address;
use App\Models\Tag;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $users = User::with(['addresses', 'posts'])->get();

    return view('index', [
        'users' => $users
    ]);
});
