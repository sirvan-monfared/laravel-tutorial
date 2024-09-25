<?php

use App\Http\Controllers\CustomerController;
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


