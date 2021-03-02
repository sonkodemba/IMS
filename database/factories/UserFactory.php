<?php

namespace Database\Factories;

use App\Models\Branch;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Employee;
use App\Models\EmployeeCategory;
use App\Models\EmployeeEducation;
use App\Models\Gender;
use App\Models\MaritalStatus;
use App\Models\PayGrade;
use App\Models\User;
use App\Models\UserGroup;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's defalt state.
     *
     * @return array
     */
    public function definition()
    {
        return [
    /*
    +-----------------------+-----------------+------+-----+---------+----------------+
    | Field                 | Type            | Null | Key | Default | Extra          |
    +-----------------------+-----------------+------+-----+---------+----------------+
    | id                    | bigint unsigned | NO   | PRI | NULL    | auto_increment |
    | name                  | varchar(255)    | NO   |     | NULL    |                |
    | staff_id              | int unsigned    | NO   | UNI | NULL    |                |
    | social_security_num   | int unsigned    | NO   |     | NULL    |                |
    | mobile_num            | int unsigned    | NO   | UNI | NULL    |                |
    | gender_id             | bigint unsigned | NO   | MUL | NULL    |                |
    | marital_status_id     | bigint unsigned | NO   | MUL | NULL    |                |
    | department_id         | bigint unsigned | NO   | MUL | NULL    |                |
    | designation_id        | bigint unsigned | NO   | MUL | NULL    |                |
    | branch_id             | bigint unsigned | NO   | MUL | NULL    |                |
    | pay_grade_id          | bigint unsigned | NO   | MUL | NULL    |                |
    | employee_category_id  | bigint unsigned | NO   | MUL | NULL    |                |
    | employee_education_id | bigint unsigned | NO   | MUL | NULL    |                |
    | user_group_id         | bigint unsigned | NO   | MUL | NULL    |                |
    | profile_img           | mediumtext      | YES  |     | NULL    |                |
    | email                 | varchar(255)    | NO   | UNI | NULL    |                |
    | email_verified_at     | timestamp       | YES  |     | NULL    |                |
    | password              | varchar(255)    | NO   |     | NULL    |                |
    | remember_token        | varchar(100)    | YES  |     | NULL    |                |
    | deleted_at            | timestamp       | YES  |     | NULL    |                |
    | created_at            | timestamp       | YES  |     | NULL    |                |
    | updated_at            | timestamp       | YES  |     | NULL    |                |
    +-----------------------+-----------------+------+-----+---------+----------------+*/


    'name' => $this->faker->name,
    'staff_id' => $this->faker-> randomNumber(7),
    'social_security_num' => $this->faker -> randomNumber(4),
    'mobile_num' => $this -> faker -> randomNumber(7),
    'gender_id' => Gender::factory(),
    'marital_status_id' => MaritalStatus::factory(),
    'department_id' => Department::factory(),
    'designation_id' => Designation::factory(),
    'branch_id' => Branch::factory(),
    'pay_grade_id'=> PayGrade::factory(),
    'employee_category_id' => EmployeeCategory::factory(),
    'employee_education_id' => EmployeeEducation::factory(),
    'user_group_id' => UserGroup::factory(),
    'profile_img' => $this->faker -> url,
    'email' => $this->faker->unique()->safeEmail,
    'email_verified_at' => now(),
    'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
    'remember_token' => Str::random(10),
        ];
    }
}
