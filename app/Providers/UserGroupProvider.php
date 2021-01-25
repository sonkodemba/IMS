<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\UserGroup;
use App\Providers\UserGroupProvider;

class UserGroupProvider extends ServiceProvider
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
            $values -> with('userGroupProvider', UserGroup::all());
        });
    }
}
