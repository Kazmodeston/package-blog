<?php


namespace Skillshare\PackageBlog;

use Illuminate\Support\ServiceProvider;


class PackageBlogServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'blog');
    }

    public function register()
    {

    }

}