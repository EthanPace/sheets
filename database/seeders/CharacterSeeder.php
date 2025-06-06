<?php

namespace Database\Seeders;

use App\Models\Archetype;
use App\Models\Background;
use App\Models\Character;
use App\Models\Species;
use App\Models\User;
use Illuminate\Database\Seeder;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Character::factory()->create([
            'user_id' => User::where('username', "ben")->first()->id,

            'species_id' => Species::where('name', "Triton")->first()->id,
            'background_id' => Background::where('name', "Noble")->first()->id,
            'archetype_id' => Archetype::where('name', "Paladin")->first()->id,
            'name' => "Kluiekkeer",
            'level' => 2,
            'experience_points' => 0,
            'armor_class' => 16,
            'initiative' => 2,
            'inspiration' => false,
            'proficiency_bonus' => 2,

            'current_hit_points' => 20,
            'max_hit_points' => 20,
            'temporary_hit_points' => 0,

            'archetype_proficiencies' => "INTIMIDATION, RELIGION",
        ]);

        Character::factory()->create([
            'user_id' => User::where('username', "aadyn")->first()->id,

            'species_id' => Species::where('name', "Harengon")->first()->id,
            'background_id' => Background::where('name', "Criminal")->first()->id,
            'archetype_id' => Archetype::where('name', "Fighter")->first()->id,
            'name' => "Vonik",
            'level' => 2,
            'experience_points' => 0,
            'armor_class' => 15,
            'initiative' => 5,
            'inspiration' => false,
            'proficiency_bonus' => 2,

            'current_hit_points' => 20,
            'max_hit_points' => 20,
            'temporary_hit_points' => 0,

            'archetype_proficiencies' => "ANIMAL HANDLING, INTIMIDATION",
        ]);

        for ( $i = 0; $i <= 15; $i++ ) {
            Character::factory()->create([
                'species_id' => fake()->numberBetween(1,10),
                'background_id' => fake()->numberBetween(1,16),
            ]);
        }
    }
}
