<?php

namespace App\Providers;
use App\LaraShout;
use Illuminate\Support\ServiceProvider;

class LarashoutServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('larashout',function(){
            return new LaraShout();
        });
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
