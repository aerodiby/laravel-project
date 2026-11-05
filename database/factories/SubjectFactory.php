<?php

namespace Database\Factories;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubjectFactory extends Factory
{
    protected $model = Subject::class;

    public function definition(): array
    {
        return [
            'name' => fake()->unique()->randomElement([
                'Pemrograman Web', 'Pemrograman Gim', 'Basis Data',
                'Matematika', 'Bahasa Indonesia', 'Bahasa Inggris',
                'PKK', 'Desain Grafis', 'Pemrograman Perangkat Bergerak', 'Sejarah',
            ]),
        ];
    }
}
