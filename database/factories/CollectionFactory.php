<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Collection>
 */
class CollectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $coll = ['job', 'university', 'coding', 'personal', 'extra'];
        $title = fake()->unique()->randomElement($coll);
        return [
            // 'user_id' => fake()->randomElement(
            //     \App\Models\User::pluck('id', 'id')->toArray()
            // ), // picks id from Users table randomly
            'user_id' => 2,
            'title'=>$title
        ];
    }
}
