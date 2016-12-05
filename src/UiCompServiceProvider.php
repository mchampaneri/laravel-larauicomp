<?php

namespace Package;

use Illuminate\Support\ServiceProvider;

class UiCompServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/publishable/config.php' => config_path('uicomp.php'),
        ]);


        $this->loadViewsFrom(__DIR__.'/views', 'uicomp');
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
