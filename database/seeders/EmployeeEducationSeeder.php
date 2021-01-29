<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EmployeeEducation;

class EmployeeEducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmployeeEducation::factory(5) -> create();
    }
}
