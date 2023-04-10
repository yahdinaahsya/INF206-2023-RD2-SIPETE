<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
         Schema::defaultStringLength(191);

        // Registrasi class Admin
        $this->app->bind('path.public', function () {
            return base_path().'/../public_html';
        });
        $this->app->make('view')->addNamespace('admin', base_path().'/resources/views/admin');
    }
}
