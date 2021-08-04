<?php

namespace Legendary\Modules\Customer;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class CustomerServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        // Load User module migrations from
        // 'Haqqman/Modules/User/Migrations' folder path
        $this->loadMigrationsFrom(__DIR__.'/Migrations');

        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/Http/Routes.php');

        // Load views from 'Haqqman/Modules/User/Views'
        $this->loadViewsFrom(__DIR__ . '/Resources/Views', 'customer');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {}
}
