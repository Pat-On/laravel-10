<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Policies\PostPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
        Post::class => PostPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        // 1. create_post

        // 2. edit_post

        // 3. delete_post

        // .. declaring gate
        Gate::define('create_post', function(){
            // here is going validation logic

            return Auth::user()->is_admin;
        });

        Gate::define('edit_post', function(){
            // here is going validation logic

            return Auth::user()->is_admin;
        });

        Gate::define('delete_post', function(){
            // here is going validation logic

            return Auth::user()->is_admin;
        });
    }
}
