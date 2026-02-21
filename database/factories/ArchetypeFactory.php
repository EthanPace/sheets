<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Archetype>
 */
class ArchetypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        return [
            'name' => fake()->jobTitle(),
            'hit_die' => fake()->randomElement(['4', '6', '8', '10', '12', '20']),
            'primary_ability' => fake()->randomElement(['STRENGTH', 'DEXTERITY', 'CONSTITUTION', 'WISDOM', 'INTELLIGENCE', 'CHARISMA']),
            'saving_throws' => "STRENGTH, DEXTERITY, CONSTITUTION, WISDOM, INTELLIGENCE, CHARISMA",
            'skill_proficiencies' => "ATHLETICS, ACROBATICS, SLEIGHT OF HAND, STEALTH, ARCANA, HISTORY, INVESTIGATION, NATURE, RELIGION, ANIMAL HANDLING, INSIGHT, MEDICINE, PERCEPTION, SURVIVAL, DECEPTION, INTIMIDATION, PERFORMANCE, PERSUASION",
            'armor_training' => "LIGHT, MEDIUM, HEAVY, SHIELD",
            'weapon_training' => "SIMPLE, MARTIAL",
            'tool_proficiencies' => "THEIVES' TOOLS, ALCHEMIST'S SUPPLIES",
            'starter_gear' => "Javelin, Javelin, Javelin, Javelin, Javelin, Javelin, OR Dagger, Dagger, Dagger, Dagger, Dagger, Dagger, OR 150 GP",

            'spellcaster' => fake()->randomElement(['FULL','HALF','NONE']),
            'spell_list' => "FULL",
        ];
    }
}
