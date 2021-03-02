<?php

namespace Database\Seeders;

use App\Models\PayGrade;
use Illuminate\Database\Seeder;

class PayGradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PayGrade::factory(5) -> create();
    }
}
