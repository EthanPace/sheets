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
        Background::factory()->create([
            'name' => "Acolyte",
            'ability_score_increases' => "Wisdom, Intelligence",
            'skill_proficiencies' => "Insight, Religion",
            'tool_proficiencies' => "None",
            'starting_equipment' => "Holy Symbol, Prayer Book, 5 Sticks of Incense, Vestments, Common Clothes, 15 GP",
        ]);
        Background::factory()->create([
            'name' => "Artisan",
            'ability_score_increases' => "Intelligence, Dexterity",
            'skill_proficiencies' => "Investigation, Persuasion",
            'tool_proficiencies' => "Artisan's Tools",
            'starting_equipment' => "Artisan's Tools, Traveler's Clothes, Merchant's Scale, 20 GP",
        ]);
        Background::factory()->create([
            'name' => "Charlatan",
            'ability_score_increases' => "Charisma, Dexterity",
            'skill_proficiencies' => "Deception, Sleight of Hand",
            'tool_proficiencies' => "Forgery Kit",
            'starting_equipment' => "Disguise Kit, Forgery Kit, Fine Clothes, 15 GP",
        ]);
        Background::factory()->create([
            'name' => "Criminal",
            'ability_score_increases' => "Dexterity, Intelligence",
            'skill_proficiencies' => "Deception, Stealth",
            'tool_proficiencies' => "Thieves' Tools",
            'starting_equipment' => "Thieves' Tools, Crowbar, Dark Common Clothes, 15 GP",
        ]);
        Background::factory()->create([
            'name' => "Entertainer",
            'ability_score_increases' => "Charisma, Dexterity",
            'skill_proficiencies' => "Acrobatics, Performance",
            'tool_proficiencies' => "Musical Instrument",
            'starting_equipment' => "Musical Instrument, Costume, Fine Clothes, 15 GP",
        ]);
        Background::factory()->create([
            'name' => "Farmer",
            'ability_score_increases' => "Constitution, Wisdom",
            'skill_proficiencies' => "Animal Handling, Nature",
            'tool_proficiencies' => "Vehicles (Land)",
            'starting_equipment' => "Shovel, Iron Pot, Common Clothes, 10 GP",
        ]);
        Background::factory()->create([
            'name' => "Guard",
            'ability_score_increases' => "Strength, Constitution",
            'skill_proficiencies' => "Athletics, Perception",
            'tool_proficiencies' => "Vehicles (Land)",
            'starting_equipment' => "Spear, Shield, Uniform, 10 GP",
        ]);
        Background::factory()->create([
            'name' => "Guide",
            'ability_score_increases' => "Wisdom, Dexterity",
            'skill_proficiencies' => "Nature, Survival",
            'tool_proficiencies' => "Navigator's Tools",
            'starting_equipment' => "Navigator's Tools, Traveler's Clothes, Map, 15 GP",
        ]);
        Background::factory()->create([
            'name' => "Hermit",
            'ability_score_increases' => "Wisdom, Constitution",
            'skill_proficiencies' => "Medicine, Religion",
            'tool_proficiencies' => "Herbalism Kit",
            'starting_equipment' => "Herbalism Kit, Scroll Case, Winter Blanket, 10 GP",
        ]);
        Background::factory()->create([
            'name' => "Merchant",
            'ability_score_increases' => "Charisma, Intelligence",
            'skill_proficiencies' => "Insight, Persuasion",
            'tool_proficiencies' => "Navigator's Tools",
            'starting_equipment' => "Navigator's Tools, Fine Clothes, Ledger, 25 GP",
        ]);
        Background::factory()->create([
            'name' => "Noble",
            'ability_score_increases' => "Charisma, Intelligence",
            'skill_proficiencies' => "History, Persuasion",
            'tool_proficiencies' => "Gaming Set",
            'starting_equipment' => "Gaming Set, Fine Clothes, Signet Ring, 20 GP",
        ]);
        Background::factory()->create([
            'name' => "Sage",
            'ability_score_increases' => "Intelligence, Wisdom",
            'skill_proficiencies' => "Arcana, History",
            'tool_proficiencies' => "None",
            'starting_equipment' => "Ink, Quill, Small Knife, Common Clothes, 10 GP",
        ]);
        Background::factory()->create([
            'name' => "Sailor",
            'ability_score_increases' => "Strength, Dexterity",
            'skill_proficiencies' => "Athletics, Perception",
            'tool_proficiencies' => "Navigator's Tools",
            'starting_equipment' => "Navigator's Tools, Rope (50 ft), Belaying Pin, 10 GP",
        ]);
        Background::factory()->create([
            'name' => "Scribe",
            'ability_score_increases' => "Intelligence, Dexterity",
            'skill_proficiencies' => "History, Investigation",
            'tool_proficiencies' => "Calligrapher's Supplies",
            'starting_equipment' => "Calligrapher's Supplies, Parchment, Ink, 15 GP",
        ]);
        Background::factory()->create([
            'name' => "Soldier",
            'ability_score_increases' => "Strength, Constitution",
            'skill_proficiencies' => "Athletics, Intimidation",
            'tool_proficiencies' => "Gaming Set",
            'starting_equipment' => "Gaming Set, Insignia, Uniform, 10 GP",
        ]);
        Background::factory()->create([
            'name' => "Wayfarer",
            'ability_score_increases' => "Constitution, Wisdom",
            'skill_proficiencies' => "Survival, Perception",
            'tool_proficiencies' => "Vehicles (Land)",
            'starting_equipment' => "Traveler's Clothes, Bedroll, Map, 10 GP",
        ]);
    }
}
