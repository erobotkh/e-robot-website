<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\achievment>
 */
class AchievmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'num_member'=>fake()->numberBetween(1,100),
            'num_student'=>fake()->numberBetween(1,100),
            'num_intership'=>fake()->numberBetween(1,100),
            'num_social_impact'=>fake()->numberBetween(1,1000),
            'num_province'=>fake()->numberBetween(1,100),
            'num_project'=>fake()->numberBetween(1,100),
        ];
    }
}
