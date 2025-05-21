<?php

namespace Database\Factories;

use App\Models\Archetype;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Spell>
 */
class SpellFactory extends Factory
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
            'description' => fake()->text() . "
             
            " . fake()->text() . " " . fake()->text() . " " . fake()->text() . "
             
" . fake()->text(),
            'higher_levels' => fake()->text(),

            'verbal' => fake()->boolean(),
            'somatic' => fake()->boolean(),
            'material' => "",

            'range' => fake()->randomElement(["Self","Touch","10 Feet","30 Feet","50 Feet","100 Feet","120 Feet"]),
            'casting_time' => fake()->randomElement(["Action", "Bonus Action", "1 Minute or Ritual", "Action or Ritual", "1 Hour", "10 Hours"]),
            'duration' => fake()->randomElement(["Instantaneous", "10 Minutes", "1 Minute", "10 Hours", "1 Hour", "Until Dispelled"]),

            'level' => fake()->numberBetween(1,9),
            'school' => fake()->randomElement(["Abjuration","Evocation","Enchantment","Transmutation","Necromancy","Conjuration","Illusion","Divination"]),
            'spell_lists' => Archetype::inRandomOrder()->first()->name,
        ];
    }
}