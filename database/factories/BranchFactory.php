<?php

namespace Database\Factories;

use App\Models\Branch;
use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BranchFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Branch::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            /**
            +-------------+-----------------+------+-----+---------+----------------+
            | Field       | Type            | Null | Key | Default | Extra          |
            +-------------+-----------------+------+-----+---------+----------------+
            | id          | bigint unsigned | NO   | PRI | NULL    | auto_increment |
            | location_id | bigint unsigned | NO   | MUL | NULL    |                |
            | code        | varchar(255)    | NO   | UNI | NULL    |                |
            | name        | varchar(255)    | NO   | UNI | NULL    |                |
            | mobile      | int unsigned    | NO   |     | NULL    |                |
            | address     | varchar(255)    | YES  |     | NULL    |                |
            | deleted_at  | timestamp       | YES  |     | NULL    |                |
            | created_at  | timestamp       | YES  |     | NULL    |                |
            | updated_at  | timestamp       | YES  |     | NULL    |                |
            +-------------+-----------------+------+-----+---------+----------------+
             */
            'location_id' => Location::factory(),
            'code' => Str::random(4),
            'name' => $this->faker -> name,
            'mobile' => $this->faker -> randomNumber(7),
            'address' => $this->faker -> sentence(4)
        ];
    }
}
