<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Background;

class BackgroundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Background::factory()->create(['name' => "Acolyte",]);
        Background::factory()->create(['name' => "Artisan",]);
        Background::factory()->create(['name' => "Charlatan",]);
        Background::factory()->create([
            'name' => "Criminal",
            'ability_score_increases' => "DEXTERITY, CONSTITUTION, INTELLIGENCE",
            'skill_proficiencies' => "SLEIGHT OF HAND, STEALTH",
            'tool_proficiencies' => "THIEVES' TOOLS",
            'starting_equipment' => "Dagger, Dagger, Thieves' Tools, Crowbar, Pouch, Pouch, Traveler's Clothes, 16 GP, OR 50 GP",
        ]);
        Background::factory()->create(['name' => "Entertainer",]);
        Background::factory()->create(['name' => "Farmer",]);
        Background::factory()->create(['name' => "Guard",]);
        Background::factory()->create(['name' => "Guide",]);
        Background::factory()->create(['name' => "Hermit",]);
        Background::factory()->create(['name' => "Merchant",]);
        Background::factory()->create([
            'name' => "Noble",
            'ability_score_increases' => "STRENGTH, INTELLIGENCE, CHARISMA",
            'skill_proficiencies' => "HISTORY, PERSUASION",
            'tool_proficiencies' => "GAMING SET",
            'starting_equipment' => "Gaming Set, Fine Clothes, Perfume, 29 GP, OR 50 GP",
        ]);
        Background::factory()->create(['name' => "Sage",]);
        Background::factory()->create(['name' => "Sailor",]);
        Background::factory()->create(['name' => "Scribe",]);
        Background::factory()->create(['name' => "Soldier",]);
        Background::factory()->create(['name' => "Wayfarer",]);
    }
}
