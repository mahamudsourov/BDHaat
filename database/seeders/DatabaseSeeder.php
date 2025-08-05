<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password'=> bcrypt('admin'),
            'role' => 'admin',          
        ]);
        User::factory()->create([
            'name' => 'Nahid',
            'email' => 'sourov554@gmail.com',
            'password'=> bcrypt('123456'),
            'role' => 'user',
        ]);
    }
}
