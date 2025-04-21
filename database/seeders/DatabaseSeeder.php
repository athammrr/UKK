<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('password'),
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Dika',
            'email' => 'dika@gmail.com',
            'role' => 'resepsionis',
            'password' => Hash::make('password'),
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Faa',
            'email' => 'fa@gmail.com',
            'role' => 'user',
            'password' => Hash::make('password'),
        ]);
    }
}
