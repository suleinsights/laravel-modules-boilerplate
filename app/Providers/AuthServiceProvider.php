<?php

namespace Legendary\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'Legendary\Model' => 'Legendary\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization webservices.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
