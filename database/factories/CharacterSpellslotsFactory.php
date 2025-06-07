<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CharacterSpellslots>
 */
class CharacterSpellslotsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'level_one' => fake()->numberBetween(0,9),
            'level_two' => fake()->numberBetween(0,9),
            'level_three' => fake()->numberBetween(0,9),
            'level_four' => fake()->numberBetween(0,9),
            'level_five' => fake()->numberBetween(0,9),
            'level_six' => fake()->numberBetween(0,9),
            'level_seven' => fake()->numberBetween(0,9),
            'level_eight' => fake()->numberBetween(0,9),
            'level_nine' => fake()->numberBetween(0,9),
        ];
    }
}
