<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Providers\DepartmentProvider;
use App\Models\Department;

class DepartmentProvider extends ServiceProvider
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
        view() -> composer("*", function($views){
            $views -> with('departmentProvider', Department::all());
        });
    }
}
