<?php

use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\ColorController;
use App\Http\Controllers\Dashboard\ProductController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Middleware\CheckAdmin;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'admin'])->name('dashboard');

Route::prefix('dashboard')->middleware(['auth', 'admin'])->group(function() {
    Route::resource('product', ProductController::class, ['as' => 'dashboard']);
    Route::resource('category', CategoryController::class, ['as' => 'dashboard']);
    Route::resource('color', ColorController::class, ['as' => 'dashboard']);

    Route::get('/user/{user}', [ UserController::class, 'edit'])->name('dashboard.user.edit');
});
