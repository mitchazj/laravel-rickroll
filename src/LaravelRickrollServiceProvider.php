<?php

namespace mitchazj\LaravelRickroll;

use Illuminate\Support\ServiceProvider;

class LaravelRickrollServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'mitchazj');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'mitchazj');
        $this->loadRoutesFrom(__DIR__ . '/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/LaravelRickroll.php', 'LaravelRickroll');

        // Register the service the package provides.
        $this->app->singleton('LaravelRickroll', function ($app) {
            return new LaravelRickroll();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['LaravelRickroll'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__ . '/../config/LaravelRickroll.php' => config_path('LaravelRickroll.php'),
        ], 'LaravelRickroll.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/mitchazj'),
        ], 'laravel-rickroll.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/mitchazj'),
        ], 'laravel-rickroll.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/mitchazj'),
        ], 'laravel-rickroll.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
