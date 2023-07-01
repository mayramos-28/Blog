<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post.>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
      

        return [
            'slug' => fake()->unique()->slug(),
            'title' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'category_id' => fake()->numberBetween(1, 10),
            'is_published' => fake()->boolean(),
            'user_id' => fake()->numberBetween(1, 10),
        ];
    }
}
