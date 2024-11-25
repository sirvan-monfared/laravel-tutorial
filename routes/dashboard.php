<?php

use App\Http\Controllers\Dashboard\AdController;
use Illuminate\Support\Facades\Route;


Route::prefix('dashboard')->middleware('auth')->group(function() {

    Route::get('/', function() {
        return redirect()->route('dashboard.ad.index');
    })->name('dashboard');

    Route::get('/ad', [AdController::class, 'index'])->name('dashboard.ad.index');
});
