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
            'name' => 'Admin User',
            'email' => 'admin@mail.com',
            'password' => 'P@ssw0rd',
            'remember_token' => '50q3JXDX8a',
            'profile_photo_path'=> 'profile-photos/2.png',
            'role'=>'ADMIN'
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@mail.com',
            'password' => 'P@ssw0rd',
            'remember_token' => '50q3JXDX8a',
            'profile_photo_path'=> 'profile-photos/1.png'
        ]);

        // Collection::factory(5)->create();
        // Url::factory(100)->create();


        $coll = ['job', 'university', 'coding', 'personal', 'extra'];
        foreach ($coll as $line) {
            Collection::create([
                'user_id' => 2,
                'title'=>$line
            ]);
        }


        $file = file('urls.txt');
        foreach ($file as $line) {
            Url::create([
                'user_id' => 2,
                'collection_id' => fake()->randomElement(
                    \App\Models\Collection::pluck('id', 'id')->toArray()
                ), // picks id from Collection table randomly
                'url'=>$line
            ]);
        }

    }
}
