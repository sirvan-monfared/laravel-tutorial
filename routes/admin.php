<?php


use App\Http\Controllers\Admin\AdController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Middleware\Admin;

Route::prefix('adm-lara')->middleware(Admin::class)->as('admin.')->group(function() {
    Route::get('/', HomeController::class)->name('home');

    Route::resource('category', CategoryController::class);
    Route::resource('location', LocationController::class);
    Route::resource('ad', AdController::class);
    Route::resource('order', OrderController::class);

    Route::get('user/{user}/change-password', [UserController::class, 'editPassword'])->name('user.edit-password');
    Route::put('user/{user}/change-password', [UserController::class, 'updatePassword'])->name('user.update-password');
    Route::resource('user', UserController::class);
});
