<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CategoryUrlFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => fake()->randomElement(
                \App\Models\Category::pluck('id', 'id')->toArray()
            ), // picks id from Category table randomly
            'url_id' => fake()->randomElement(
                \App\Models\Url::pluck('id', 'id')->toArray()
            ), // picks id from Url table randomly
        ];
    }
}
