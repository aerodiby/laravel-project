<?php

namespace Database\Factories;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubjectFactory extends Factory
{
    protected $model = Subject::class;

    public function definition(): array
    {
        $subjects = [
            'Matematika',
            'Bahasa Indonesia',
            'Bahasa Inggris',
            'IPA',
            'IPS',
            'Pendidikan Agama',
            'PPKn',
            'Seni Budaya',
            'PJOK',
            'Informatika',
            'Basis Data',
            'Pemrograman Web'
        ];

        return [
            'name' => fake()->unique()->randomElement($subjects),
        ];
    }
}
