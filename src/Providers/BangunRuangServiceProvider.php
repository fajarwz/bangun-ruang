<?php

namespace Fajarwz\BangunRuang\Providers;

use Illuminate\Support\ServiceProvider;

class BangunRuangServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('persegi-panjang', \Fajarwzdev\BangunRuang\Helpers\PersegiPanjang::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
