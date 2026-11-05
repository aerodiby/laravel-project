<?php

namespace Database\Factories;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeacherFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'niy' => fake()->numberBetween(1000000000, 2147483647), // 10 digit & aman untuk integer
            'subject_id' => Subject::factory(),
            'start_date' => fake()->date(),
        ];
    }
}
