<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        app()->bind("First_srevice_helper",function($app){
             dd("This is our first service container");
        } );
        app()->bind("Second_srevice_helper",function($app){
            dd("This is our second service container");
       } );
        

        app()->bind("Third_srevice_helper",function($app){
             dd("This is our third service container");
        } );
    

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
