<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
   return redirect()->route('customer.index');
});

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



