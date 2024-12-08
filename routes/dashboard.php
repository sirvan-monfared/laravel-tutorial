<?php

use App\Http\Controllers\Dashboard\AdController;
use App\Http\Controllers\Dashboard\InvoiceController;
use App\Http\Controllers\Dashboard\PaymentController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function() {
    return redirect()->route('dashboard.ad.index');
})->name('dashboard');

Route::prefix('dashboard')->name('dashboard.')->middleware('auth')->group(function() {

    Route::resource('ad', AdController::class)->only(['index', 'edit', 'update', 'destroy']);

    Route::get('/invoice/{ad}', [InvoiceController::class, 'show'])->name('invoice.show');
    Route::post('/invoice/{ad}', [PaymentController::class, 'start'])->name('payment.start');
    Route::get('/payment/callback', [PaymentController::class, 'callback'])->name('payment.callback');
});
