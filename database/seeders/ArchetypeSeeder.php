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
            'primary_ability' => "Strength",
            'saving_throws' => "Strength, Constitution",
            'skill_proficiencies' => "Animal Handling, Athletics, Intimidation, Nature, Perception, Survival",
            'armor_training' => "LIGHT, MEDIUM, SHIELD",
            'weapon_training' => "SIMPLE, MARTIAL",
            'starter_gear' => "Greataxe, Handaxe, Handaxe, Handaxe, Handaxe, Explorer's Pack, 15 GP, OR 75 GP",
            'spellcaster' => "NONE",
            'num_skills' => 2,
        ]);
        Archetype::factory()->create([
            'name' => "Bard",
            'hit_die' => "8",
            'primary_ability' => "Charisma",
            'saving_throws' => "Dexterity, Charisma",
            'skill_proficiencies' => "Athletics, Acrobatics, Sleight Of Hand, Stealth, Arcana, History, Investigation, Nature, Religion, Animal Handling, Insight, Medicine, Perception, Survival, Deception, Intimidation, Performance, Persuasion",
            'armor_training' => "LIGHT, ONLY",
            'weapon_training' => "SIMPLE, ONLY",
            'tool_proficiencies' => "MUSICAL INSTRUMENT",
            'starter_gear' => "Leather Armor, Dagger, Dagger, Musical Instrument, Entertainer's Pack, 19 GP, OR 90 GP",
            'spellcaster' => "FULL",
            'num_skills' => 3,
        ]);
        Archetype::factory()->create([
            'name' => "Cleric",
            'hit_die' => "8",
            'primary_ability' => "Wisdom",
            'saving_throws' => "Wisdom, Charisma",
            'skill_proficiencies' => "History, Insight, Medicine, Persuasion, Religion",
            'armor_training' => "LIGHT, MEDIUM, SHIELD",
            'weapon_training' => "SIMPLE, ONLY",
            'tool_proficiencies' => null,
            'starter_gear' => "Chain Shirt, Shield, Mace, Holy Symbol, Priest's Pack, 7 GP, OR 110 GP",
            'spellcaster' => "FULL",
            'num_skills' => 2,
        ]);
        Archetype::factory()->create([
            'name' => "Druid",
            'hit_die' => "8",
            'primary_ability' => "Wisdom",
            'saving_throws' => "Wisdom, Intelligence",
            'skill_proficiencies' => "Arcana, Animal Handling, Insight, Medicine, Nature, Perception, Religion, Survival",
            'armor_training' => "LIGHT, SHIELD",
            'weapon_training' => "SIMPLE, ONLY",
            'tool_proficiencies' => "HERBALISM KIT",
            'starter_gear' => "Leather Armor, Shield, Sickle, Quarterstaff, Explorer's Pack, Herbalism Kit, 9 GP, OR 50 GP",
            'spellcaster' => "FULL",
            'num_skills' => 2,
        ]);
        Archetype::factory()->create([
            'name' => "Fighter",
            'hit_die' => "10",
            'primary_ability' => "Strength, Dexterity",
            'saving_throws' => "Strength, Constitution",
            'skill_proficiencies' => "Acrobatics, Animal Handling, Athletics, History, Insight, Intimidation, Persuasion, Perception, Survival",
            'armor_training' => "LIGHT, MEDIUM, HEAVY, SHIELD",
            'weapon_training' => "SIMPLE, MARTIAL",
            'tool_proficiencies' => null,
            'starter_gear' => "Chain Mail, Greatsword, Flail, Javelin, Javelin, Javelin, Javelin, Javelin, Javelin, Javelin, Dungeoneer's Pack, 4 GP, OR Studded Leather Armor, Acimitar, Shortsword, Longbow, Arrows, Quiver, Dungeoneer's Pack, 11 GP, OR 155 GP",
            'spellcaster' => "NONE",
            'num_skills' => 2,
        ]);
        Archetype::factory()->create([
            'name' => "Monk",
            'hit_die' => "8",
            'primary_ability' => "Dexterity, Wisdom",
            'saving_throws' => "Strength, Dexterity",
            'skill_proficiencies' => "Acrobatics, Athletics, History, Insight, Religion, Stealth",
            'armor_training' => "NONE, NONE",
            'weapon_training' => "SIMPLE, MARTIAL [LIGHT]",
            'tool_proficiencies' => "ARTISANS TOOLS, OR MUSICAL INSTRUMENT",
            'starter_gear' => "Spear, Dagger, Dagger, Dagger, Dagger, Dagger, Artisan's Tools, Explorer's Pack, 11 GP, OR Spear, Dagger, Dagger, Dagger, Dagger, Dagger, Musical Instrument, Explorer's Pack, 11 GP, OR 50 GP",
            'spellcaster' => "NONE",
            'num_skills' => 2,
        ]);
        Archetype::factory()->create([
            'name' => "Paladin",
            'hit_die' => "10",
            'primary_ability' => "Strength, Charisma",
            'saving_throws' => "Wisdom, Charisma",
            'skill_proficiencies' => "Athletics, Insight, Intimidation, Medicine, Persuasion, Religion",
            'armor_training' => "LIGHT, MEDIUM, HEAVY, SHIELD",
            'weapon_training' => "SIMPLE, MARTIAL",
            'tool_proficiencies' => null,
            'starter_gear' => "Chain Mail, Shield, Longsword, Javelin, Javelin, Javelin, Javelin, Javelin, Javelin, Holy Symbol, Preist's Pack, 9 GP, OR 150 GP",
            'spellcaster' => "HALF",
            'num_skills' => 2,
        ]);
        Archetype::factory()->create([
            'name' => "Ranger",
            'hit_die' => "10",
            'primary_ability' => "Dexterity, Wisdom",
            'saving_throws' => "Strength, Dexterity",
            'skill_proficiencies' => "Animal Handling, Athletics, Investigation, Nature, Perception, Stealth, Survival",
            'armor_training' => "LIGHT, MEDIUM, SHIELD",
            'weapon_training' => "SIMPLE, MARTIAL",
            'tool_proficiencies' => null,
            'starter_gear' => "Studded Leather Armor, Scimitar, Shortsword, Longbow, Arrows, Quiver, Druidic Focus, Explorer's Pack, 7 GP, OR 150 GP",
            'spellcaster' => "HALF",
            'num_skills' => 3,
        ]);
        Archetype::factory()->create([
            'name' => "Rogue",
            'hit_die' => "8",
            'primary_ability' => "Dexterity",
            'saving_throws' => "Dexterity, Intelligence",
            'skill_proficiencies' => "Acrobatics, Athletics, Deception, Insight, Intimidation, Investigation, Perception, Persuasion, Sleight Of Hand, Stealth",
            'armor_training' => "LIGHT, ONLY",
            'weapon_training' => "SIMPLE, MARTIAL [LIGHT], MARTIAL [FINESSE]",
            'tool_proficiencies' => "THIEVES' TOOLS",
            'starter_gear' => "Leather Armor, Dagger, Dagger, Shortsword, Shortbow, Arrows, Quiver, Theives' Tools, Burglar's Pack, 8 GP, OR 100 GP",
            'spellcaster' => "NONE",
            'num_skills' => 4,
        ]);
        Archetype::factory()->create([
            'name' => "Sorcerer",
            'hit_die' => "6",
            'primary_ability' => "Charisma",
            'saving_throws' => "Constitution, Charisma",
            'skill_proficiencies' => "Arcana, Deception, Insight, Intimidation, Persuasion, Religion",
            'armor_training' => "NONE, NONE",
            'weapon_training' => "SIMPLE, ONLY",
            'tool_proficiencies' => null,
            'starter_gear' => "Spear, Dagger, Dagger, Arcane Focus, Dungeoneer's Pack, 28 GP, OR 50 GP",
            'spellcaster' => "FULL",
            'num_skills' => 2,
        ]);
        Archetype::factory()->create([
            'name' => "Warlock",
            'hit_die' => "8",
            'primary_ability' => "Charisma",
            'saving_throws' => "Wisdom, Charisma",
            'skill_proficiencies' => "Arcana, Deception, History, Intimidation, Investigation, Nature, Religion",
            'armor_training' => "LIGHT, ONLY",
            'weapon_training' => "SIMPLE, ONLY",
            'tool_proficiencies' => null,
            'starter_gear' => "Leather Armor, Dagger, Dagger, Sickle, Arcane Focus, Book, Scholar's Pack, 15 GP, OR 100 GP",
            'spellcaster' => "PACT",
            'num_skills' => 2,
        ]);
        Archetype::factory()->create([
            'name' => "Wizard",
            'hit_die' => "6",
            'primary_ability' => "Intelligence",
            'saving_throws' => "Intelligence, Wisdom",
            'skill_proficiencies' => "Arcana, History, Insight, Investigation, Medicine, Nature, Religion",
            'armor_training' => "NONE, NONE",
            'weapon_training' => "SIMPLE, ONLY",
            'tool_proficiencies' => null,
            'starter_gear' => "Dagger, Dagger, Arcane Focus, Quarterstaff, Robe, Spellbook, Scholar's Pack, 5 GP, OR 55 GP",
            'spellcaster' => "FULL",
            'spell_list' => "SPELLBOOK",
            'num_skills' => 2,
        ]);
    }
}
