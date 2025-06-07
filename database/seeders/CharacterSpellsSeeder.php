<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Models\CharacterSpells;
use App\Models\Spell;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CharacterSpellsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (Character::whereNot('spellcaster',"NONE")->get() as $character) {
            foreach (Spell::all() as $spell) {
                if (in_array($character->archetype->name, explode(', ', $spell->spell_lists))) {
                    CharacterSpells::factory()->create([
                        'character_id' => $character->id,
                        'spell_id' => $spell->id,

                        'prepared' => false,
                        'always_prepared' => false,
                    ]);
                }
            }
        }
    }
}
