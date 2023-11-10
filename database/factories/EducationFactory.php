<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Education>
 */
class EducationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>fake()->title(),
            'description'=>fake()->text(),
            'icon'=>fake()->imageUrl(640, 480, 'educations', true),
            'is_enable'=>1,
            'begin_color'=>fake()->hexColor(),
            'end_color'=>fake()->hexColor()
        ];
    }
}
