<?php

namespace Longtt\B2s;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;


class B2sServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        require __DIR__ . '/helpers.php';
        require __DIR__ . '/Menu.php';

        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadViewsFrom(__DIR__.'/views', 'b2s');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        //  $this->loadSeed
        $this->loadTranslationsFrom(__DIR__.'/translations','b2s');
        $this->publishes([
            __DIR__.'/translations' => resource_path('lang'),
        ]);

        $this->publishes([
            __DIR__.'/public' => public_path('vendor/user'),
        ], 'public');

        Schema::defaultStringLength(191);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
