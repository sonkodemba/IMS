<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Providers\EmployeeCategoryProvider;
use App\Models\EmployeeCategory;

class EmployeeCategoryProvider extends ServiceProvider
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
            $views -> with('employeeCategoryProvider', EmployeeCategory::all());
        });
    }
}
