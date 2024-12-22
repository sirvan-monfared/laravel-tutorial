<?php


use App\Http\Controllers\Admin\HomeController;

Route::prefix('adm-lara')->middleware('auth')->as('admin.')->group(function() {
    Route::get('/', HomeController::class)->name('home');
});
