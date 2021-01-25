<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Providers\GenderProvider;
use App\Models\Gender;

class GenderProvider extends ServiceProvider
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
        view() -> composer('*', function($view){
            $view -> with('GenderProvider', Gender::all());
        });
    }
}
