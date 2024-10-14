<?php

use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\ColorController;
use App\Http\Controllers\Dashboard\ProductController;

Route::prefix('dashboard')->middleware('auth')->group(function() {
    Route::resource('product', ProductController::class, ['as' => 'dashboard']);
    Route::resource('category', CategoryController::class, ['as' => 'dashboard']);
    Route::resource('color', ColorController::class, ['as' => 'dashboard']);
});
