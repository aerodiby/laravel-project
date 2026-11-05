<?php

namespace Database\Factories;

use App\Models\Teacher;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeacherFactory extends Factory
{
    protected $model = Teacher::class;

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'niy' => fake()->unique()->randomNumber(9, true) . fake()->randomDigitNotNull(), // 10 digit integer
            'subject_id' => Subject::factory(),
            'start_date' => fake()->date('Y-m-d', 'now'),
        ];
    }
}
