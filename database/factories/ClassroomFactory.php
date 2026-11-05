<?php

namespace Database\Factories;

use App\Models\Classroom;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Classroom>
 */
class ClassroomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $kelas = fake()->unique()->randomElement(['11 PPLG 1', '11 PPLG 2', '11 PPLG 3','11 Animasi 1', '11 Animasi 2', '11 Animasi 3','11 DKV 1', '11 DKV 2', '11 DKV 3']);


        return [
            'name' => $kelas,
            'major' => str_contains($kelas, 'PPLG')
                ? 'PPLG'
                : (str_contains($kelas, 'Anim') ? 'ANIM' : 'DKV'),
        ];
    }
}
