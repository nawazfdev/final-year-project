<?php

namespace Database\Factories;

use App\Models\classrooms;
use Illuminate\Database\Eloquent\Factories\Factory;

class classroomsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = classrooms::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'classroom_name' => $this->faker->word,
        'classroom_code' => $this->faker->word,
        'classroom_description' => $this->faker->text,
        'classroom_status' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
