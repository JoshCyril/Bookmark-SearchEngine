<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Collection;
use App\Models\Url;
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

        User::factory()->create([
            'name' => 'Josh',
            'email' => 'Josh@mail.com',
            'password' => 'P@ssw0rd',
            'remember_token' => '50q3JXDX8a'
        ]);

        User::factory(4)->create();
        // Collection::factory(5)->create();
        // Category::factory(10)->create();
        // Url::factory(20)->create();

        // \Database\Factories\CategoryCollectionFactory::factory(50)->create();
        // \Database\Factories\CategoryUrlFactory::factory(100)->create();


        Category::factory()
        ->count(5)
        ->hasAttached(Collection::factory()->count(1)
        )->create();

        Category::factory()
        ->count(5)
        ->hasAttached(Url::factory()->count(2))
        ->create();
    }
}
