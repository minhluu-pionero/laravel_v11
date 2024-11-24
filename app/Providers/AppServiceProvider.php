<?php

namespace App\Providers;

use App\Repositories\Contracts\UserRepositoryInterface;
use App\Repositories\UserRepository;
use App\Services\DeviceService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('device_bind', function () {
            return new DeviceService();
        });

        $this->app->singleton('device_singleton', function () {
            return new DeviceService();
        });

        // $this->app->instance('device_instance', new DeviceService());
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->share('fullName', 'Minh Luu');

        $this->app->singleton(UserRepositoryInterface::class, UserRepository::class);
    }
}
