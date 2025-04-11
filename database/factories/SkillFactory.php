<?php

namespace Database\Factories;

use App\Models\Character;
use App\Models\Statistic;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Skill>
 */
class SkillFactory extends Factory
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
            'name' => fake()->randomElement(['ATHLETICS','ACROBATICS','SLEIGHT OF HAND','STEALTH','ARCANA','HISTORY','INVESTIGATION','NATURE','RELIGION','ANIMAL HANDLING','INSIGHT','MEDICINE','PERCEPTION','SURVIVAL','DECEPTION','INTIMIDATION','PERFORMANCE','PERSUASION']),
            'ability' => fake()->randomElement(['STRENGTH', 'DEXTERITY', 'CONSTITUTION', 'WISDOM', 'INTELLIGENCE', 'CHARISMA']),
            'proficient' => fake()->boolean(),
            'mastery' => fake()->boolean(),
            'modifier' => fake()->numberBetween(-5,5)
        ];
    }
}
