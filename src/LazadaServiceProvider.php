<?php

namespace Laraditz\Lazada;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class LazadaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'lazada');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'lazada');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->registerRoutes();

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('lazada.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/lazada'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/lazada'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/lazada'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'lazada');

        // Register the main class to use with the facade
        $this->app->singleton('lazada', function () {
            return new Lazada(
                region: config('lazada.region'),
                app_key: config('lazada.app_key'),
                app_secret: config('lazada.app_secret'),
                app_callback_url: config('lazada.app_callback_url'),
                sign_method: config('lazada.sign_method'),
                sandbox_mode: config('lazada.sandbox_mode'),
                seller_id: config('lazada.seller_id'),
            );
        });
    }

    protected function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            Route::name('lazada.')->group(function () {
                $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
            });
        });
    }

    protected function routeConfiguration()
    {
        return [
            'prefix' => config('lazada.routes.prefix'),
            'middleware' => config('lazada.middleware'),
        ];
    }
}
