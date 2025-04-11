<?php

namespace Database\Factories;

use App\Models\Character;
use App\Models\CharacterStatistic;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CharacterStatistic>
 */
class CharacterStatisticFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'character_id' => Character::inRandomOrder()->first(),
            'ability' => fake()->randomElement(['STRENGTH','DEXTERITY','CONSTITUTION','WISDOM','INTELLIGENCE','CHARISMA']),
            'score' => fake()->numberBetween(9,20),
            'modifier' => fake()->numberBetween(-5,5),
            'proficient' => fake()->boolean(),
        ];
    }
}
