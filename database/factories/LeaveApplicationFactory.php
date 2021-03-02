<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\LeaveApplication;
use App\Models\LeaveCategory;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class LeaveApplicationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LeaveApplication::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            /**
            +-------------------+-----------------+------+-----+---------+----------------+
            | Field             | Type            | Null | Key | Default | Extra          |
            +-------------------+-----------------+------+-----+---------+----------------+
            | id                | bigint unsigned | NO   | PRI | NULL    | auto_increment |
            | staff_id          | bigint unsigned | NO   | MUL | NULL    |                |
            | leave_category_id | bigint unsigned | NO   |     | NULL    |                |
            | start_date        | date            | NO   |     | NULL    |                |
            | end_date          | date            | NO   |     | NULL    |                |
            | descriptions      | longtext        | NO   |     | NULL    |                |
            | deleted_at        | timestamp       | YES  |     | NULL    |                |
            | created_at        | timestamp       | YES  |     | NULL    |                |
            | updated_at        | timestamp       | YES  |     | NULL    |                |
            +-------------------+-----------------+------+-----+---------+----------------+
             */
            'staff_id' => Employee::factory(),
            'leave_category_id' => LeaveCategory::factory(),
            'start_date' => Carbon::now(),
            'end_date' => Carbon::tomorrow(),
            'descriptions' => $this->faker -> sentence(4),
        ];
    }
}
