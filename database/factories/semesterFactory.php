<?php

namespace Database\Factories;

use App\Models\semester;
use Illuminate\Database\Eloquent\Factories\Factory;

class semesterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = semester::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Semester_Name' => $this->faker->word,
        'Semester_Code' => $this->faker->randomDigitNotNull,
        'Semester_Duration' => $this->faker->word,
        'Semester_Description' => $this->faker->text,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
