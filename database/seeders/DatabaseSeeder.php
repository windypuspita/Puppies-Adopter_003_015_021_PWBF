<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Puppy;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Puppy::factory(10)->create();

        User::factory()->create([
            'name' => 'User',
            'email' => 'user@sistem.com',
            'password' => bcrypt('password')
        ]);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@sistem.com',
            'password' => bcrypt('password'),
            'is_admin' => true
        ]);
    }
}
