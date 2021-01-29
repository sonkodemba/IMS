<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            LocationSeeder::class,
            BranchSeeder::class,
            DepartmentSeeder::class,
            DesignationSeeder::class,
            GenderSeeder::class,
            MaritalStatusSeeder::class,
            PayGradeSeeder::class,
            EmployeeEducationCatrgorySeeder::class,
            EmployeeEducationSeeder::class,
            EmployeeCategorySeeder::class,
            EmployeeSeeder::class,
            UserGroupSeeder::class,
            LeaveCategorySeeder::class,
            LeaveApplicationSeeder::class,
            UserSeeder::class
        ]);

    }
}
