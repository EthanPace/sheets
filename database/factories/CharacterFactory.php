<?php

namespace Database\Factories;

use App\Models\Archetype;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Species;
use App\Models\Background;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Character>
 */
class CharacterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::where('username', "ethan")->first()->id,

            'species_id' => Species::inRandomOrder()->first(),
            'background_id' => Background::inRandomOrder()->first(),
            'archetype_id' => Archetype::inRandomOrder()->first(),

            'name' => fake()->name(),
            'level' => fake()->numberBetween(1,20),
            'experience_points' => fake()->numberBetween(0,10000),
            'armor_class' => fake()->numberBetween(11,20),
            'initiative' => fake()->numberBetween(0,5),
            'inspiration' => fake()->boolean(),
            'proficiency_bonus' => fake()->numberBetween(2,5),

            'current_hit_points' => fake()->numberBetween(1,100),
            'max_hit_points' => fake()->numberBetween(1,100),
            'temporary_hit_points' => 0,

            'archetype_proficiencies' => fake()->randomElement(["ATHLETICS", "ACROBATICS", "SLEIGHT OF HAND", "STEALTH", "ARCANA", "HISTORY", "INVESTIGATION", "NATURE", "RELIGION", "ANIMAL HANDLING", "INSIGHT", "MEDICINE", "PERCEPTION", "SURVIVAL", "DECEPTION", "INTIMIDATION", "PERFORMANCE", "PERSUASION"]) . ", " . fake()->randomElement(["ATHLETICS", "ACROBATICS", "SLEIGHT OF HAND", "STEALTH", "ARCANA", "HISTORY", "INVESTIGATION", "NATURE", "RELIGION", "ANIMAL HANDLING", "INSIGHT", "MEDICINE", "PERCEPTION", "SURVIVAL", "DECEPTION", "INTIMIDATION", "PERFORMANCE", "PERSUASION"]),
        ];
    }
}
