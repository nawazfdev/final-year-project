<?php

namespace Database\Factories;

use App\Models\faculities;
use Illuminate\Database\Eloquent\Factories\Factory;

class faculitiesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = faculities::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'faculty_name' => $this->faker->word,
        'faculty_code' => $this->faker->word,
        'faculty_description' => $this->faker->text,
        'faculty_status' => $this->faker->text,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
