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
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \Smknstd\FakerPicsumImages\FakerPicsumImagesProvider($faker));

        return [
            'slug' => fake()->unique()->slug(),
            'title' => fake()->sentence(),
            'content' => implode("\n\n", fake()->paragraphs(4)),
            'category_id' => fake()->numberBetween(1, 4),
            'is_published' => true,
            'image' => $faker->imageUrl(640, 480),            
            'author_name' => fake()->name(),            
        ];
    }
    
}
