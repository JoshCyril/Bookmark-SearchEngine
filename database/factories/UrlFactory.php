<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Url>
 */
class UrlFactory extends Factory
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
            'title'=>$title,
            'url'=>fake()->url(),
            'thumbnail'=> fake()->imageUrl(640, 480, null, true),
            'body'=> fake()->text(100),
            'active' => fake()->boolean(30),
        ];
    }
}
