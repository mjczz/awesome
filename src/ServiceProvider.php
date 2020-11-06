<?php

namespace mjczz\Awesome;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    const CONFIG_PATH = __DIR__ . '/../config/awesome.php';

    public function boot()
    {
        $this->publishes([
            self::CONFIG_PATH => config_path('awesome.php'),
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            self::CONFIG_PATH,
            'awesome'
        );

        $this->app->bind('awesome', function () {
            return new Awesome();
        });
    }
}
