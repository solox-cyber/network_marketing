<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Extensions\AdminSessionGuard;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Auth::extend('custom', function ($app, $name, array $config) {
            // Here, 'custom' is the name of your custom guard. You can change it to your preferred name.
            return new AdminSessionGuard($name, Auth::createUserProvider($config['provider']), $app['session.store']);
        });
        //
    }
}
