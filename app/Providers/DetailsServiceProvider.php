<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class DetailsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(
            'auth.details', 'App\Http\ViewComposers\DetailsComposer'
        );
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repositories\Contracts\AlgaContract',
            'App\Repositories\AlgaRepository'
        );
    }
}