<?php

namespace Database\Factories;

use App\Models\Character;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Action>
 */
class ActionFactory extends Factory
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
            'name' => fake()->randomElement(['Longsword','Javelin','Scimitar','Shortsword','Longbow']),
            'ability' => fake()->randomElement(['STRENGTH','DEXTERITY']),
            'damage' => fake()->randomElement(['1d8','1d6','1d10']),
            'type' => fake()->randomElement(['Piercing','Slashing','Bludgeoning']),
        ];
    }
}
