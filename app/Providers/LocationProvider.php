<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Location;
use App\Providers\LocationProvider;

class LocationProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {   
         view() -> composer('*', function($values){
            $values -> with('locationProvider', Location::all());
        });
    }
}
