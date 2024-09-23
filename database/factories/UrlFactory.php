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
        $file = file('urls.txt');
        $val = fake()->unique()->randomElement($file);

        return [
            // 'user_id' => fake()->randomElement(
            //     \App\Models\User::pluck('id', 'id')->toArray()
            // ), // picks id from UserDetails table randomly
            'collection_id' => fake()->randomElement(
                \App\Models\Collection::pluck('id', 'id')->toArray()
            ), // picks id from Collection table randomly
            'url'=>$val,
            'user_id' => 2
        ];
    }
}
