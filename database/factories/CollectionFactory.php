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
        $title = fake()->unique()->word();
        return [
            'user_id' => fake()->randomElement(
                \App\Models\User::pluck('id', 'id')->toArray()
            ), // picks id from UserDetails table randomly
            'title'=>$title ,
            'slug'=>Str::slug($title),
            'thumbnail'=> fake()->imageUrl(640, 480, null, false),
            'body'=> fake()->text(100),
            'published_at' => fake()->dateTimeBetween('-2 Week', '+1 Day'),
            'active' => fake()->boolean(30),
        ];
    }
}
