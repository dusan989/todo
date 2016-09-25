<?php

namespace TodoApi\Providers;

use Illuminate\Support\ServiceProvider;
use TodoApi\Managers\AuthManager;
use TodoApi\Managers\TodoManager;

class ManagersServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // Register AuthManager as a singleton
        $this->app->singleton(AuthManager::class, function ($app) {
            return new AuthManager($app->make('validator'));
        });

        // Register TodoManager as a singleton
        $this->app->singleton(TodoManager::class, function ($app) {
            return new TodoManager($app->make('validator'));
        });
    }
}
