<?php

use App\Http\Controllers\AdController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('front.home');

Route::get('/ad/{ad:slug}', [AdController::class, 'show'])->name('front.ad.show');

Route::get('/search', [SearchController::class, 'index'])->name('front.search');

Route::middleware('auth')->group(function() {
    Route::get('/new', [AdController::class, 'create'])->name('front.ad.create');
    Route::post('/new', [AdController::class, 'store'])->name('front.ad.store');
});

