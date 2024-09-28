<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TrashedCustomerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', function() {
   return redirect()->route('customer.index');
});

Route::get('/customer/trashed', [TrashedCustomerController::class, 'index'])->name('customer.trashed.index');
Route::delete('/customer/trashed/{id}', [TrashedCustomerController::class, 'destroy'])->name('customer.trashed.destroy');
Route::patch('/customer/trashed/{id}', [TrashedCustomerController::class, 'restore'])->name('customer.trashed.restore');

Route::resource('customer', CustomerController::class);


Route::get('/register', [RegisterController::class, 'create'])->name('auth.register');
Route::post('/register', [RegisterController::class, 'store'])->name('auth.store');
Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('auth.login.store');

Route::delete('/logout', [LoginController::class, 'logout'])->name('auth.logout');


