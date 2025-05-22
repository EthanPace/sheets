<?php

namespace Database\Seeders;

use App\Models\Archetype;
use Illuminate\Database\Seeder;

class ArchetypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Archetype::factory()->create([
            'name' => "Barbarian",
            'hit_die' => "12",
            'primary_ability' => "STRENGTH",
            'saving_throws' => "STRENGTH, CONSTITUTION",
            'skill_proficiencies' => "ANIMAL HANDLING, ATHLETICS, INTIMIDATION, NATURE, PERCEPTION, SURVIVAL",
            'armor_training' => "LIGHT, MEDIUM, SHIELD",
            'weapon_training' => "SIMPLE, MARTIAL",
            'starter_gear' => "Greataxe, Handaxe, Handaxe, Handaxe, Handaxe, Explorer's Pack, 15 GP, OR 75 GP",
            'has_charges' => true,
            'spellcaster' => "NONE",
        ]);
        Archetype::factory()->create([
            'name' => "Bard",
            'hit_die' => "8",
            'primary_ability' => "CHARISMA",
            'saving_throws' => "DEXTERITY, CHARISMA",
            'skill_proficiencies' => "ATHLETICS, ACROBATICS, SLEIGHT OF HAND, STEALTH, ARCANA, HISTORY, INVESTIGATION, NATURE, RELIGION, ANIMAL HANDLING, INSIGHT, MEDICINE, PERCEPTION, SURVIVAL, DECEPTION, INTIMIDATION, PERFORMANCE, PERSUASION",
            'armor_training' => "LIGHT, ONLY",
            'weapon_training' => "SIMPLE, ONLY",
            'tool_proficiencies' => "MUSICAL INSTRUMENT",
            'starter_gear' => "Leather Armor, Dagger, Dagger, Musical Instrument, Entertainer's Pack, 19 GP, OR 90 GP",
            'has_charges' => true,
            'spellcaster' => "FULL",
        ]);
        Archetype::factory()->create([
            'name' => "Cleric",
            'hit_die' => "8",
            'primary_ability' => "WISDOM",
            'saving_throws' => "WISDOM, CHARISMA",
            'skill_proficiencies' => "HISTORY, INSIGHT, MEDICINE, PERSUASION, RELIGION",
            'armor_training' => "LIGHT, MEDIUM, SHIELD",
            'weapon_training' => "SIMPLE, ONLY",
            'tool_proficiencies' => null,
            'starter_gear' => "Chain Shirt, Shield, Mace, Holy Symbol, Priest's Pack, 7 GP, OR 110 GP",
            'has_charges' => true,
            'spellcaster' => "FULL",
        ]);
        Archetype::factory()->create([
            'name' => "Druid",
            'hit_die' => "8",
            'primary_ability' => "WISDOM",
            'saving_throws' => "WISDOM, INTELLIGENCE",
            'skill_proficiencies' => "ARCANA, ANIMAL HANDLING, INSIGHT, MEDICINE, NATURE, PERCEPTION, RELIGION, SURVIVAL",
            'armor_training' => "LIGHT, SHIELD",
            'weapon_training' => "SIMPLE, ONLY",
            'tool_proficiencies' => "HERBALISM KIT",
            'starter_gear' => "Leather Armor, Shield, Sickle, Quarterstaff, Explorer's Pack, Herbalism Kit, 9 GP, OR 50 GP",
            'has_charges' => true,
            'spellcaster' => "FULL",
        ]);
        Archetype::factory()->create([
            'name' => "Fighter",
            'hit_die' => "10",
            'primary_ability' => "STRENGTH, DEXTERITY",
            'saving_throws' => "STRENGTH, CONSTITUTION",
            'skill_proficiencies' => "ACROBATICS, ANIMAL HANDLING, ATHLETICS, HISTORY, INSIGHT, INTIMIDATION, PERSUASION, PERCEPTION, SURVIVAL",
            'armor_training' => "LIGHT, MEDIUM, HEAVY, SHIELD",
            'weapon_training' => "SIMPLE, MARTIAL",
            'tool_proficiencies' => null,
            'starter_gear' => "Chain Mail, Greatsword, Flail, Javelin, Javelin, Javelin, Javelin, Javelin, Javelin, Javelin, Javelin, Dungeoneer's Pack, 4 GP, OR Studded Leather Armor, Acimitar, Shortsword, Longbow, Arrows, Quiver, Dungeoneer's Pack, 11 GP, OR 155 GP",
            'has_charges' => true,
            'spellcaster' => "NONE",
        ]);
        Archetype::factory()->create([
            'name' => "Monk",
            'hit_die' => "8",
            'primary_ability' => "DEXTERITY, WISDOM",
            'saving_throws' => "STRENGTH, DEXTERITY",
            'skill_proficiencies' => "ACROBATICS, ATHLETICS, HISTORY, INSIGHT, RELIGION, STEALTH",
            'armor_training' => "NONE, NONE",
            'weapon_training' => "SIMPLE, MARTIAL [LIGHT]",
            'tool_proficiencies' => "ARTISANS TOOLS, OR MUSICAL INSTRUMENT",
            'starter_gear' => "Spear, Dagger, Dagger, Dagger, Dagger, Dagger, Artisan's Tools, Explorer's Pack, 11 GP, OR Spear, Dagger, Dagger, Dagger, Dagger, Dagger, Musical Instrument, Explorer's Pack, 11 GP, OR 50 GP",
            'has_charges' => true,
            'spellcaster' => "NONE"
        ]);
        Archetype::factory()->create([
            'name' => "Paladin",
            'hit_die' => "10",
            'primary_ability' => "STRENGTH, CHARISMA",
            'saving_throws' => "WISDOM, CHARISMA",
            'skill_proficiencies' => "ALTHLETICS, INSIGHT, INTIMIDATION, MEDICINE, PERSUASION, RELIGION",
            'armor_training' => "LIGHT, MEDIUM, HEAVY, SHIELD",
            'weapon_training' => "SIMPLE, MARTIAL",
            'tool_proficiencies' => null,
            'starter_gear' => "Chain Mail, Shield, Longsword, Javelin, Javelin, Javelin, Javelin, Javelin, Javelin, Holy Symbol, Preist's Pack, 9 GP, OR 150 GP",
            'has_charges' => true,
            'spellcaster' => "HALF",
        ]);
        Archetype::factory()->create([
            'name' => "Ranger",
            'hit_die' => "10",
            'primary_ability' => "DEXTERITY, WISDOM",
            'saving_throws' => "STRENGTH, DEXTERITY",
            'skill_proficiencies' => "ANIMAL HANDLING, ATHLETICS, INVESTIGATION, NATURE, PERCEPTION, STEALTH, SURVIVAL",
            'armor_training' => "LIGHT, MEDIUM, SHIELD",
            'weapon_training' => "SIMPLE, MARTIAL",
            'tool_proficiencies' => null,
            'starter_gear' => "Studded Leather Armor, Scimitar, Shortsword, Longbow, Arrows, Quiver, Druidic Focus, Explorer's Pack, 7 GP, OR 150 GP",
            'has_charges' => true,
            'spellcaster' => "HALF",
        ]);
        Archetype::factory()->create([
            'name' => "Rogue",
            'hit_die' => "8",
            'primary_ability' => "DEXTERITY",
            'saving_throws' => "DEXTERITY, INTELLIGENCE",
            'skill_proficiencies' => "ACROBATICS, ATHLETICS, DECEPTION, INSIGHT, INTIMIDATION, INVESTIGATION, PERCEPTION, PERSUASION, SLEIGHT OF HAND, STEALTH",
            'armor_training' => "LIGHT, ONLY",
            'weapon_training' => "SIMPLE, MARTIAL [LIGHT], MARTIAL [FINESSE]",
            'tool_proficiencies' => "THIEVES' TOOLS",
            'starter_gear' => "Leather Armor, Dagger, Dagger, Shortsword, Shortbow, Arrows, Quiver, Theives' Tools, Burglar's Pack, 8 GP, OR 100 GP",
            'has_charges' => true,
            'spellcaster' => "NONE",
        ]);
        Archetype::factory()->create([
            'name' => "Sorcerer",
            'hit_die' => "6",
            'primary_ability' => "CHARISMA",
            'saving_throws' => "CONSTITUTION, CHARISMA",
            'skill_proficiencies' => "ARCANA, DECEPTION, INSIGHT, INTIMIDATION, PERSUASION, RELIGION", 
            'armor_training' => "NONE, NONE",
            'weapon_training' => "SIMPLE, ONLY",
            'tool_proficiencies' => null,
            'starter_gear' => "Spear, Dagger, Dagger, Arcane Focus, Dungeoneer's Pack, 28 GP, OR 50 GP",
            'has_charges' => true,
            'spellcaster' => "FULL",
        ]);
        Archetype::factory()->create([
            'name' => "Warlock",
            'hit_die' => "8",
            'primary_ability' => "WISDOM",
            'saving_throws' => "WISDOM, CHARISMA",
            'skill_proficiencies' => "ARCANA, DECEPTION, HISTORY, INTIMIDATION, INVESTIGATION, NATURE, RELIGION",
            'armor_training' => "LIGHT, ONLY",
            'weapon_training' => "SIMPLE, ONLY",
            'tool_proficiencies' => null,
            'starter_gear' => "Leather Armor, Dagger, Dagger, Sickle, Arcane Focus, Book, Scholar's Pack, 15 GP, OR 100 GP",
            'has_charges' => true,
            'spellcaster' => "HALF",
        ]);
        Archetype::factory()->create([
            'name' => "Wizard",
            'hit_die' => "10",
            'primary_ability' => "INTELLIGENCE",
            'saving_throws' => "INTELLIGENCE, WISDOM",
            'skill_proficiencies' => "ARCANA, HISTORY, INSIGHT, INVESTIGATION, MEDICINE, NATURE, RELIGION", 
            'armor_training' => "NONE, NONE",
            'weapon_training' => "SIMPLE, ONLY",
            'tool_proficiencies' => null,
            'starter_gear' => "Dagger, Dagger, Arcane Focus, Quarterstaff, Robe, Spellbook, Scholar's Pack, 5 GP, OR 55 GP",
            'has_charges' => true,
            'spellcaster' => "FULL",
        ]);
    }
}
