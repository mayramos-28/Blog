<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'commentable_id' => fake()->numberBetween(1, 10),
            'commentable_type' => fake()->randomElement(['App\Models\Comment', 'App\Models\Post']),
            'comment' => fake()->text(200),
        ];
    }
}
