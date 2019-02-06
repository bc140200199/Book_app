<?php

namespace App\Providers;

use Illuminate\Support\Facades\schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(\Illuminate\Routing\Router $router)
    {
      schema::defaultStringLength(191);
      $router->middleware('isDashboardAccessible','isDashboardAccessible');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
