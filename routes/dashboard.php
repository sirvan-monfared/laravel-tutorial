<?php

use App\Http\Controllers\Dashboard\AdController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function() {
    return redirect()->route('dashboard.ad.index');
})->name('dashboard');

Route::prefix('dashboard')->name('dashboard.')->middleware('auth')->group(function() {

    Route::resource('ad', AdController::class)->only(['index', 'edit', 'update', 'destroy']);
});
