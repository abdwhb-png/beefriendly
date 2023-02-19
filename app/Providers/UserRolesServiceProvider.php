<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class UserRolesServiceProvider extends ServiceProvider
{
    /**
     * Users: 0=>User, 1=>Admin, 2=>Manager.
     *
     * @var string
     */
    public const ROLES = [
        'user' => 0,
        'admin' => 1,
        'manager' => 2,
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
