<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Species>
 */
class SpeciesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'creature_type' => fake()->randomElement(['Humanoid','Non-Humanoid']),
            'size' => fake()->randomElement(['large','medium','small']),
            'speed' => 30,
            'darkvision' => fake()->boolean(),
            'description' => fake()->text(),
            'lifespan' => "like, 50 years or whatever",
        ];
    }
}
