<?php

namespace Database\Factories;

use App\Models\Employee;
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
            | name              | varchar(255)    | NO   |     | NULL    |                |
            | user_group_id     | bigint unsigned | NO   | MUL | NULL    |                |
            | email             | varchar(255)    | NO   | UNI | NULL    |                |
            | email_verified_at | timestamp       | YES  |     | NULL    |                |
            | password          | varchar(255)    | NO   |     | NULL    |                |
            | remember_token    | varchar(100)    | YES  |     | NULL    |                |
            | deleted_at        | timestamp       | YES  |     | NULL    |                |
            | created_at        | timestamp       | YES  |     | NULL    |                |
            | updated_at        | timestamp       | YES  |     | NULL    |                |
            +-------------------+-----------------+------+-----+---------+----------------+

             */
            'staff_id' => Employee::factory(),
            'name' => $this->faker->name,
            'user_group_id' => UserGroup::factory(),
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }
}
