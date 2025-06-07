<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Models\CharacterSpellslots;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CharacterSpellslotsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (Character::all() as $character) {
            if ($character->archetype->spellcaster != "NONE") {
                $slots = $character->archetype->spellslots->slots_at_level($character->level);

                if (count($slots) != 9) { $slots = array_merge($slots,[0,0,0,0,0]); }

                CharacterSpellslots::factory()->create([
                    'character_id' => $character->id,

                    'level_one' => $slots[0],
                    'level_two' => $slots[1],
                    'level_three' => $slots[2],
                    'level_four' => $slots[3],
                    'level_five' => $slots[4],
                    'level_six' => $slots[5],
                    'level_seven' => $slots[6],
                    'level_eight' => $slots[7],
                    'level_nine' => $slots[8],
                ]);
            }
        }
    }
}
