<?php

namespace Database\Seeders;

use App\Models\EmployeeCategory;
use Illuminate\Database\Seeder;

class EmployeeCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmployeeCategory::factory(4) -> create();
    }
}
