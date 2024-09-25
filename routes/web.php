<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

//    $result = DB::table('users')
//        ->join('orders', 'users.id', '=', 'orders.user_id')
//        ->select('users.id', 'users.name' , 'orders.product_name', 'orders.amount')
//        ->get();

//    $result = DB::table('users')
//        ->rightJoin('orders', 'users.id', '=', 'orders.user_id')
//        ->select('users.*', 'orders.product_name', 'orders.amount', 'orders.user_id')
//        ->get();

    $result = DB::table('users')
        ->leftJoin('orders', 'users.id', '=', 'orders.user_id')
        ->select('users.name', 'orders.product_name')
        ->union(
            DB::table('users')
            ->rightJoin('orders', 'users.id', '=', 'orders.user_id')
            ->select('users.name', 'orders.product_name')
        )->get();

    dd($result);

});
