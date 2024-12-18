<?php

namespace App\Providers;

use App\Enums\UserRoleEnum;
use App\Models\Post;
use App\Policies\PostPolicy;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        Post::class => PostPolicy::class,
    ];

    public function boot()
    {
        $this->registerPolicies();

        Gate::before(function ($user) {
            if ($user->role === UserRoleEnum::Admin->value) {
                return true;
            }
        });

        // Gate::define('view-post', function ($user) {
        //     return $user->role !== UserRoleEnum::Admin->value ?
        //         Response::allow() : Response::deny('Permission deny');
        // });

        Gate::define('view-post', [PostPolicy::class, 'view']);

        Gate::after(function ($user) {
            Log::info('User ' . $user->id . ' has accessed the system');
        });
    }
}
