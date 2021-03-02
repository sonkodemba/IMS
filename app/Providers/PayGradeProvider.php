<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\PayGrade;
use App\Providers\PayGradeProvider;

class PayGradeProvider extends ServiceProvider
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
            $values -> with('payGradeProvider', PayGrade::all());
        });
    }
}
