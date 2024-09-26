<?php

use App\Models\Address;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
//    $user = User::find(2);
//
///    dd($user->address->city);
///
        $address =  Address::find(3);
        dump($address->user_id);
        dd($address->user);
});
