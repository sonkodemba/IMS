<?php

namespace Database\Factories;

use App\Models\Branch;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Employee;
use App\Models\EmployeeCategory;
use App\Models\Gender;
use App\Models\Location;
use App\Models\MaritalStatus;
use App\Models\PayGrade;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            /**
            +----------------------+-----------------+------+-----+---------+----------------+
            | Field                | Type            | Null | Key | Default | Extra          |
            +----------------------+-----------------+------+-----+---------+----------------+
            | id                   | bigint unsigned | NO   | PRI | NULL    | auto_increment |
            | name                 | varchar(255)    | NO   |     | NULL    |                |
            | staff_id             | int unsigned    | NO   | UNI | NULL    |                |
            | gender_id            | bigint unsigned | NO   | MUL | NULL    |                |
            | marital_status_id    | bigint unsigned | NO   |     | NULL    |                |
            | department_id        | bigint unsigned | NO   | MUL | NULL    |                |
            | designation_id       | bigint unsigned | NO   | MUL | NULL    |                |
            | branch_id            | bigint unsigned | NO   | MUL | NULL    |                |
            | location_id          | bigint unsigned | NO   | MUL | NULL    |                |
            | social_security_num  | int unsigned    | NO   |     | NULL    |                |
            | pay_grade_id         | bigint unsigned | NO   | MUL | NULL    |                |
            | employee_category_id | bigint unsigned | NO   | MUL | NULL    |                |
            | mobile_num           | int unsigned    | NO   | UNI | NULL    |                |
            | profile_img          | mediumtext      | YES  |     | NULL    |                |
            | deleted_at           | timestamp       | YES  |     | NULL    |                |
            | created_at           | timestamp       | YES  |     | NULL    |                |
            | updated_at           | timestamp       | YES  |     | NULL    |                |
            +----------------------+-----------------+------+-----+---------+----------------+
             */
            'name' => $this->faker -> name,
            'staff_id' => $this->faker -> randomNumber(4),
            'gender_id' => Gender::factory(),
            'marital_status_id' => MaritalStatus::factory(),
            'department_id' => Department::factory(),
            'designation_id' => Designation::factory(),
            'branch_id' => Branch::factory(),
            // 'location_id' => Location::factory(),
            'social_security_num' => $this->faker -> randomNumber(4),
            'pay_grade_id' => PayGrade::factory(),
            'employee_category_id' => EmployeeCategory::factory(),
            'mobile_num' => $this->faker -> randomNumber(7),
            'profile_img' => $this->faker-> imageUrl(),

        ];
    }
}
