<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Teacher User',
            'email' => 'teacher@example.com',
            'role' => 'teacher',
            'password' => 'password',
        ]);

        User::factory()->create([
            'name' => 'student User',
            'email' => 'student@example.com',
            'role' => 'student',
            'password' => 'password',
        ]);
    }
}
