<?php

namespace App\Providers;

<<<<<<< HEAD
// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
=======
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
>>>>>>> 2108107010011
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

<<<<<<< HEAD
    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
=======
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isAdmin', function ($user) {
            return $user->role === 'admin';
        });

        Gate::define('isEditor', function ($user) {
            return $user->role === 'editor';
        });

        Gate::define('isContributor', function ($user) {
            return $user->role === 'contributor';
        });
>>>>>>> 2108107010011
    }
}
