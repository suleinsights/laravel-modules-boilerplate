<?php

namespace Legendary\Modules\Webmaster;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class WebmasterServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap any application webservices.
     *
     * @return void
     */
    public function boot() {
        // Load User module migrations from
        // 'Haqqman/Modules/Webmaster/Migrations' folder path
        $this->loadMigrationsFrom(__DIR__.'/Migrations');

        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/Http/Routes.php');

        // Load views from 'Haqqman/Modules/WebmasterResources/Views'
        $this->loadViewsFrom(__DIR__ . '/Resources/Views', 'webmaster');
    }

    /**
     * Register any application webservices.
     *
     * @return void
     */
    public function register() {}
}
