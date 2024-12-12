<?php
namespace App\Providers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Gate::define('view-dashboard', function ($user) {
            return $user;
        });
    }
}
