<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Providers\DesignationProvider;
use App\Models\Designation;

class DesignationProvider extends ServiceProvider
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
        view() -> composer('*', function($views){
            $views -> with('designationProvider', Designation::all());
        });
    }
}
