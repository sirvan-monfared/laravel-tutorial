<?php

use App\Http\Controllers\Dashboard\ProductController;

Route::prefix('dashboard')->group(function() {
    Route::resource('product', ProductController::class, ['as' => 'dashboard']);
});
