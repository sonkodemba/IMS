<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\MaritalStatus;
use App\Providers\MaritalStatusProvider;

class MaritalStatusProvider extends ServiceProvider
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
            $values -> with('maritalStatusProvider', MaritalStatus::all());
        });
    }
}
