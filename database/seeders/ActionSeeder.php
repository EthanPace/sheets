<?php

namespace Database\Seeders;

use App\Models\Action;
use App\Models\Character;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $character = Character::where('id',1)->first();
        Action::factory()->create([
            'character_id' => $character->id,
            'name' => "Longsword",
            'ability' => "STRENGTH",
            'damage' => "1d8",
            'type' => "Slashing",
        ]);
        Action::factory()->create([
            'character_id' => $character->id,
            'name' => "Javelin",
            'ability' => "DEXTERITY",
            'damage' => "1d6",
            'type' => "Piercing",
        ]);
        $character = Character::where('id',2)->first();
        Action::factory()->create([
            'character_id' => $character->id,
            'name' => "Scimitar",
            'ability' => "STRENGTH",
            'damage' => "1d6",
            'type' => "Slashing",
        ]);
        Action::factory()->create([
            'character_id' => $character->id,
            'name' => "Shortsword",
            'ability' => "STRENGTH",
            'damage' => "1d6",
            'type' => "Slashing",
        ]);
        Action::factory()->create([
            'character_id' => $character->id,
            'name' => "Longbow",
            'ability' => "DEXTERITY",
            'damage' => "1d8",
            'type' => "Piercing",
        ]);

    }
}
