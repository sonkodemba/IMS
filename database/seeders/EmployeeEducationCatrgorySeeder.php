<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EmployeeEducationCatrgory;

class EmployeeEducationCatrgorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	/*
        +--------------+-----------------+------+-----+---------+----------------+
		| Field        | Type            | Null | Key | Default | Extra          |
		+--------------+-----------------+------+-----+---------+----------------+
		| id           | bigint unsigned | NO   | PRI | NULL    | auto_increment |
		| name         | varchar(255)    | NO   | UNI | NULL    |                |
		| descriptions | longtext        | YES  |     | NULL    |                |
		| created_at   | timestamp       | YES  |     | NULL    |                |
		| updated_at   | timestamp       | YES  |     | NULL    |                |
		+--------------+-----------------+------+-----+---------+----------------+
*/
		EmployeeEducationCatrgory::factory(5) -> create();
    }
}
