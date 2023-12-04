<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        \App\Models\Book::factory(9)->create();

        \App\Models\Book::factory()->create([
            
        ]);

        \App\Models\Student::factory(9)->create();

        \App\Models\Student::factory()->create([
            
        ]);
    }
}
