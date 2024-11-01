<?php

namespace App\Providers;

use App\Models\Product;
use App\Models\User;
use App\Services\CsvExporter;
use App\Services\Excel;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::before(function(User $user) {
            return $user->isAdmin() ? true : null;
        });
    }
}
