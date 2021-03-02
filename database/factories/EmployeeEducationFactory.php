<?php

namespace Database\Factories;

use App\Models\EmployeeEducation;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\EmployeeEducationCatrgory;

class EmployeeEducationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EmployeeEducation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
/*
+--------------------------------+-----------------+------+-----+---------+----------------+
| Field                          | Type            | Null | Key | Default | Extra          |
+--------------------------------+-----------------+------+-----+---------+----------------+
| id                             | bigint unsigned | NO   | PRI | NULL    | auto_increment |
| employee_education_category_id | bigint unsigned | NO   | MUL | NULL    |                |
| name                           | varchar(255)    | NO   | UNI | NULL    |                |
| descriptions                   | longtext        | YES  |     | NULL    |                |
| created_at                     | timestamp       | YES  |     | NULL    |                |
| updated_at                     | timestamp       | YES  |     | NULL    |                |
+--------------------------------+-----------------+------+-----+---------+----------------+
*/
        return [
            
            'employee_education_category_id' => EmployeeEducationCatrgory::factory(),
            'name' => $this -> faker -> name,
            'descriptions' => $this -> faker -> sentence(4)

        ];
    }
}
