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
            'name' => 'Josh',
            'email' => 'Josh@mail.com',
            'password' => 'P@ssw0rd',
            'remember_token' => '50q3JXDX8a'
        ]);
    }
}
