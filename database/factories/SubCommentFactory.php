<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubComment>
 */
class SubCommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'=>fake()->randomDigitNotNull(),
            'post_content_id'=>fake()->numberBetween(1,6),
            'sub_comment_text'=>fake()->sentence(),
            'comment_id'=>fake()->randomDigitNotNull(),
        ];
    }
}