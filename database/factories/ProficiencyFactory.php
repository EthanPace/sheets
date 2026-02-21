<?php

namespace Database\Factories;

use App\Models\Character;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Skill;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proficiency>
 */
class ProficiencyFactory extends Factory
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
            'skill_id' => Skill::inRandomOrder()->first(),
            'proficient' => false,
            'mastery' => false,
        ];
    }
}
