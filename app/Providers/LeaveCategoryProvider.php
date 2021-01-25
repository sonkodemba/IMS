<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\LeaveCategory;
use App\Providers\LeqveCategoryProvider;


class LeaveCategoryProvider extends ServiceProvider
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
            $values -> with('leaveCategoryProvider', LeaveCategory::all());
        });
    }
}
