<?php

namespace Skillshare\AuthPackage;

use Illuminate\Support\ServiceProvider;

class AuthPackageServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
    }

    public function register()
    {
        
    }

}