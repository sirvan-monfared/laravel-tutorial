<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TrashedCustomerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
   return redirect()->route('customer.index');
});

Route::get('/customer/trashed', [TrashedCustomerController::class, 'index'])->name('customer.trashed.index');
Route::delete('/customer/trashed/{id}', [TrashedCustomerController::class, 'destroy'])->name('customer.trashed.destroy');
Route::patch('/customer/trashed/{id}', [TrashedCustomerController::class, 'restore'])->name('customer.trashed.restore');

Route::resource('customer', CustomerController::class);


//Route::prefix('customer')->controller(CustomerController::class)->name('customer.')->group(function() {
//    Route::get('/', 'index')->name('index');
//    Route::get('/create', 'create')->name('create');
//    Route::get('/{id}', 'show')->name('show');
//    Route::post('/', 'store')->name('store');
//    Route::get('/{id}/edit', 'edit')->name('edit');
//    Route::put('/{id}', 'update')->name('update');
//    Route::delete('/{id}', 'destroy')->name('destroy');
//});



