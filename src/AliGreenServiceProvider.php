<?php

namespace Wangyipinglove\AliGreen;

use Illuminate\Support\ServiceProvider;
use Laravel\Lumen\Application as LumenApplication;

class AliGreenServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('aligreen', function ($app) {
            return new AliGreen();
        });
    }
}
