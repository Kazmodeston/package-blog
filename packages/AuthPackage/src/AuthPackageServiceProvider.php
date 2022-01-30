<?php

namespace Skillshare\AuthPackage;

use Illuminate\Support\ServiceProvider;

class AuthPackageServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'authPackage');
    }

    public function register()
    {
        
    }

}