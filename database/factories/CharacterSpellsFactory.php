<?php

namespace Database\Factories;

use App\Models\Character;
use App\Models\Spell;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CharacterSpells>
 */
class CharacterSpellsFactory extends Factory
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
            'spell_id' => Spell::inRandomOrder()->first(),

            'prepared' => fake()->boolean(),
            'always_prepared' => false,
        ];
    }
}
