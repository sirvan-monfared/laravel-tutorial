<?php


use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Middleware\Admin;

Route::prefix('adm-lara')->middleware(Admin::class)->as('admin.')->group(function() {
    Route::get('/', HomeController::class)->name('home');

    Route::resource('category', CategoryController::class);
});
