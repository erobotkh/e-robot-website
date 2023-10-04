<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PostContent>
 */
class PostContentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'title'=>fake()->sentence(),
            'discription'=>fake()->paragraphs(),
            'image_name'=>fake()->imageUrl(640, 480, 'animals', true),
            'category_id'=>fake()->randomDigitNotNull(),
            'user_id'=>fake()->randomDigitNotNull()
        ];
    }
}
