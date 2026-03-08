<?php

namespace Database\Seeders;

use App\Models\Action;
use App\Models\Character;
use App\Models\Statistic;
use App\Models\Weapon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (Character::all() as $character) {
            foreach ($character->inventory as $item) {
                if ($item->type() == "Weapon") {
                    $weapon = $item->equippable;
                    if (Action::where('character_id',$character->id)->where('name',$weapon->name)->get()->isEmpty()) {
                        Action::factory()->create([
                            'character_id' => $character->id,
                            'statistic_id' => $this->str_or_dex($weapon,$character),
                            'name' => $weapon->name,
                            'damage' => $weapon->damage_die_number ."d". $weapon->damage_die,
                            'type' => $weapon->damage_type,
                        ]);
                    }
                }
            }
        }
    }

    public function str_or_dex(mixed $weapon, Character $character) : Statistic {
        $properties = explode(', ', $weapon->properties);
        if (in_array('Finesse',$properties) && $character->stat("Strength") <= $character->stat("Dexterity")) {
            return Statistic::firstWhere('name', "Dexterity");
        } else {
            return Statistic::firstWhere('name', "Strength");
        }
    }
}
