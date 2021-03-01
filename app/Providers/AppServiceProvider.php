<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//masukkan schema
use Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //default stringnya 191 
        Schema::defaultStringLength(191);
    }
}
