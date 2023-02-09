<?php

namespace Database\Factories;

use App\Models\attendances;
use Illuminate\Database\Eloquent\Factories\Factory;

class attendancesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = attendances::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'student_id' => $this->faker->randomDigitNotNull,
        'class_id' => $this->faker->randomDigitNotNull,
        'subject_id' => $this->faker->randomDigitNotNull,
        'teacher_id' => $this->faker->randomDigitNotNull,
        'attendance_status' => $this->faker->randomDigitNotNull,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
