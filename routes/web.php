<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
   return redirect()->route('customer.index');
});

Route::get('/customer', [CustomerController::class, 'index'])->name('customer.index');
Route::get('/customer/create', [CustomerController::class, 'create'])->name('customer.create');
Route::get('/customer/{id}', [CustomerController::class, 'show'])->name('customer.show');
Route::post('/customer', [CustomerController::class, 'store'])->name('customer.store');


