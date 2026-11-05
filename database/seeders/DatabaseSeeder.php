<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\Student;
use App\Models\User;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Student::factory(15)->create();
        // Classroom::factory(9)->create();

        Classroom::factory(4)
            ->hasStudents(10)
            ->create();

        // Subject::factory()->count(10)->create();
        Teacher::factory(10)->create();
    }
}
