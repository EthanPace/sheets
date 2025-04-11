<?php

namespace Database\Seeders;

use App\Models\Archetype;
use App\Models\Spellslots;
use Illuminate\Database\Seeder;

class SpellslotsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Spellslots::factory()->create([
            'archetype_id' => Archetype::where('name', "Paladin")->first()->id,
            // Half-caster, spells only go to five.
            'slots_at_level_one' =>       "2,0,0,0,0",
            'slots_at_level_two' =>       "2,0,0,0,0",
            'slots_at_level_three' =>     "3,0,0,0,0",
            'slots_at_level_four' =>      "3,0,0,0,0",
            'slots_at_level_five' =>      "4,2,0,0,0",
            'slots_at_level_six' =>       "4,2,0,0,0",
            'slots_at_level_seven' =>     "4,3,0,0,0",
            'slots_at_level_eight' =>     "4,3,0,0,0",
            'slots_at_level_nine' =>      "4,3,2,0,0",
            'slots_at_level_ten' =>       "4,3,2,0,0",
            'slots_at_level_eleven' =>    "4,3,3,0,0",
            'slots_at_level_twelve' =>    "4,3,3,0,0",
            'slots_at_level_thirteen' =>  "4,3,3,1,0",
            'slots_at_level_fourteen' =>  "4,3,3,1,0",
            'slots_at_level_fifteen' =>   "4,3,3,2,0",
            'slots_at_level_sixteen' =>   "4,3,3,2,0",
            'slots_at_level_seventeen' => "4,3,3,3,1",
            'slots_at_level_eighteen' =>  "4,3,3,3,1",
            'slots_at_level_nineteen' =>  "4,3,3,3,2",
            'slots_at_level_twenty' =>    "4,3,3,3,2",
        ]);

        // Wizard (Full caster, spells go to level 9)
        Spellslots::factory()->create([
            'archetype_id' => Archetype::where('name', "Wizard")->first()->id,
            'slots_at_level_one' =>       "2,0,0,0,0,0,0,0,0",
            'slots_at_level_two' =>       "3,0,0,0,0,0,0,0,0",
            'slots_at_level_three' =>     "4,2,0,0,0,0,0,0,0",
            'slots_at_level_four' =>      "4,3,0,0,0,0,0,0,0",
            'slots_at_level_five' =>      "4,3,2,0,0,0,0,0,0",
            'slots_at_level_six' =>       "4,3,3,0,0,0,0,0,0",
            'slots_at_level_seven' =>     "4,3,3,1,0,0,0,0,0",
            'slots_at_level_eight' =>     "4,3,3,2,0,0,0,0,0",
            'slots_at_level_nine' =>      "4,3,3,3,1,0,0,0,0",
            'slots_at_level_ten' =>       "4,3,3,3,2,0,0,0,0",
            'slots_at_level_eleven' =>    "4,3,3,3,2,1,0,0,0",
            'slots_at_level_twelve' =>    "4,3,3,3,2,1,0,0,0",
            'slots_at_level_thirteen' =>  "4,3,3,3,2,1,1,0,0",
            'slots_at_level_fourteen' =>  "4,3,3,3,2,1,1,0,0",
            'slots_at_level_fifteen' =>   "4,3,3,3,2,1,1,1,0",
            'slots_at_level_sixteen' =>   "4,3,3,3,2,1,1,1,0",
            'slots_at_level_seventeen' => "4,3,3,3,2,1,1,1,1",
            'slots_at_level_eighteen' =>  "4,3,3,3,3,1,1,1,1",
            'slots_at_level_nineteen' =>  "4,3,3,3,3,2,1,1,1",
            'slots_at_level_twenty' =>    "4,3,3,3,3,2,2,1,1",
        ]);

        // Warlock (Pact Magic, different system with all slots of the same level)
        Spellslots::factory()->create([
            'archetype_id' => Archetype::where('name', "Warlock")->first()->id,
            'slots_at_level_one' =>       "1,0,0,0,0",
            'slots_at_level_two' =>       "2,0,0,0,0",
            'slots_at_level_three' =>     "0,2,0,0,0",
            'slots_at_level_four' =>      "0,2,0,0,0",
            'slots_at_level_five' =>      "0,0,2,0,0",
            'slots_at_level_six' =>       "0,0,2,0,0",
            'slots_at_level_seven' =>     "0,0,0,2,0",
            'slots_at_level_eight' =>     "0,0,0,2,0",
            'slots_at_level_nine' =>      "0,0,0,0,2",
            'slots_at_level_ten' =>       "0,0,0,0,2",
            'slots_at_level_eleven' =>    "0,0,0,0,3",
            'slots_at_level_twelve' =>    "0,0,0,0,3",
            'slots_at_level_thirteen' =>  "0,0,0,0,3",
            'slots_at_level_fourteen' =>  "0,0,0,0,3",
            'slots_at_level_fifteen' =>   "0,0,0,0,3",
            'slots_at_level_sixteen' =>   "0,0,0,0,3",
            'slots_at_level_seventeen' => "0,0,0,0,4",
            'slots_at_level_eighteen' =>  "0,0,0,0,4",
            'slots_at_level_nineteen' =>  "0,0,0,0,4",
            'slots_at_level_twenty' =>    "0,0,0,0,4",
        ]);

        // Ranger (Half-caster, spells go to level 5)
        Spellslots::factory()->create([
            'archetype_id' => Archetype::where('name', "Ranger")->first()->id,
            'slots_at_level_one' =>       "2,0,0,0,0",
            'slots_at_level_two' =>       "2,0,0,0,0",
            'slots_at_level_three' =>     "3,0,0,0,0",
            'slots_at_level_four' =>      "3,0,0,0,0",
            'slots_at_level_five' =>      "4,2,0,0,0",
            'slots_at_level_six' =>       "4,2,0,0,0",
            'slots_at_level_seven' =>     "4,3,0,0,0",
            'slots_at_level_eight' =>     "4,3,0,0,0",
            'slots_at_level_nine' =>      "4,3,2,0,0",
            'slots_at_level_ten' =>       "4,3,2,0,0",
            'slots_at_level_eleven' =>    "4,3,3,0,0",
            'slots_at_level_twelve' =>    "4,3,3,0,0",
            'slots_at_level_thirteen' =>  "4,3,3,1,0",
            'slots_at_level_fourteen' =>  "4,3,3,1,0",
            'slots_at_level_fifteen' =>   "4,3,3,2,0",
            'slots_at_level_sixteen' =>   "4,3,3,2,0",
            'slots_at_level_seventeen' => "4,3,3,3,1",
            'slots_at_level_eighteen' =>  "4,3,3,3,1",
            'slots_at_level_nineteen' =>  "4,3,3,3,2",
            'slots_at_level_twenty' =>    "4,3,3,3,2",
        ]);

        // Cleric (Full caster, spells go to level 9)
        Spellslots::factory()->create([
            'archetype_id' => Archetype::where('name', "Cleric")->first()->id,
            'slots_at_level_one' =>       "2,0,0,0,0,0,0,0,0",
            'slots_at_level_two' =>       "3,0,0,0,0,0,0,0,0",
            'slots_at_level_three' =>     "4,2,0,0,0,0,0,0,0",
            'slots_at_level_four' =>      "4,3,0,0,0,0,0,0,0",
            'slots_at_level_five' =>      "4,3,2,0,0,0,0,0,0",
            'slots_at_level_six' =>       "4,3,3,0,0,0,0,0,0",
            'slots_at_level_seven' =>     "4,3,3,1,0,0,0,0,0",
            'slots_at_level_eight' =>     "4,3,3,2,0,0,0,0,0",
            'slots_at_level_nine' =>      "4,3,3,3,1,0,0,0,0",
            'slots_at_level_ten' =>       "4,3,3,3,2,0,0,0,0",
            'slots_at_level_eleven' =>    "4,3,3,3,2,1,0,0,0",
            'slots_at_level_twelve' =>    "4,3,3,3,2,1,0,0,0",
            'slots_at_level_thirteen' =>  "4,3,3,3,2,1,1,0,0",
            'slots_at_level_fourteen' =>  "4,3,3,3,2,1,1,0,0",
            'slots_at_level_fifteen' =>   "4,3,3,3,2,1,1,1,0",
            'slots_at_level_sixteen' =>   "4,3,3,3,2,1,1,1,0",
            'slots_at_level_seventeen' => "4,3,3,3,2,1,1,1,1",
            'slots_at_level_eighteen' =>  "4,3,3,3,3,1,1,1,1",
            'slots_at_level_nineteen' =>  "4,3,3,3,3,2,1,1,1",
            'slots_at_level_twenty' =>    "4,3,3,3,3,2,2,1,1",
        ]);

        // Bard (Full caster, spells go to level 9)
        Spellslots::factory()->create([
            'archetype_id' => Archetype::where('name', "Bard")->first()->id,
            'slots_at_level_one' =>       "2,0,0,0,0,0,0,0,0",
            'slots_at_level_two' =>       "3,0,0,0,0,0,0,0,0",
            'slots_at_level_three' =>     "4,2,0,0,0,0,0,0,0",
            'slots_at_level_four' =>      "4,3,0,0,0,0,0,0,0",
            'slots_at_level_five' =>      "4,3,2,0,0,0,0,0,0",
            'slots_at_level_six' =>       "4,3,3,0,0,0,0,0,0",
            'slots_at_level_seven' =>     "4,3,3,1,0,0,0,0,0",
            'slots_at_level_eight' =>     "4,3,3,2,0,0,0,0,0",
            'slots_at_level_nine' =>      "4,3,3,3,1,0,0,0,0",
            'slots_at_level_ten' =>       "4,3,3,3,2,0,0,0,0",
            'slots_at_level_eleven' =>    "4,3,3,3,2,1,0,0,0",
            'slots_at_level_twelve' =>    "4,3,3,3,2,1,0,0,0",
            'slots_at_level_thirteen' =>  "4,3,3,3,2,1,1,0,0",
            'slots_at_level_fourteen' =>  "4,3,3,3,2,1,1,0,0",
            'slots_at_level_fifteen' =>   "4,3,3,3,2,1,1,1,0",
            'slots_at_level_sixteen' =>   "4,3,3,3,2,1,1,1,0",
            'slots_at_level_seventeen' => "4,3,3,3,2,1,1,1,1",
            'slots_at_level_eighteen' =>  "4,3,3,3,3,1,1,1,1",
            'slots_at_level_nineteen' =>  "4,3,3,3,3,2,1,1,1",
            'slots_at_level_twenty' =>    "4,3,3,3,3,2,2,1,1",
        ]);

        // Druid (Full caster, spells go to level 9)
        Spellslots::factory()->create([
            'archetype_id' => Archetype::where('name', "Druid")->first()->id,
            'slots_at_level_one' =>       "2,0,0,0,0,0,0,0,0",
            'slots_at_level_two' =>       "3,0,0,0,0,0,0,0,0",
            'slots_at_level_three' =>     "4,2,0,0,0,0,0,0,0",
            'slots_at_level_four' =>      "4,3,0,0,0,0,0,0,0",
            'slots_at_level_five' =>      "4,3,2,0,0,0,0,0,0",
            'slots_at_level_six' =>       "4,3,3,0,0,0,0,0,0",
            'slots_at_level_seven' =>     "4,3,3,1,0,0,0,0,0",
            'slots_at_level_eight' =>     "4,3,3,2,0,0,0,0,0",
            'slots_at_level_nine' =>      "4,3,3,3,1,0,0,0,0",
            'slots_at_level_ten' =>       "4,3,3,3,2,0,0,0,0",
            'slots_at_level_eleven' =>    "4,3,3,3,2,1,0,0,0",
            'slots_at_level_twelve' =>    "4,3,3,3,2,1,0,0,0",
            'slots_at_level_thirteen' =>  "4,3,3,3,2,1,1,0,0",
            'slots_at_level_fourteen' =>  "4,3,3,3,2,1,1,0,0",
            'slots_at_level_fifteen' =>   "4,3,3,3,2,1,1,1,0",
            'slots_at_level_sixteen' =>   "4,3,3,3,2,1,1,1,0",
            'slots_at_level_seventeen' => "4,3,3,3,2,1,1,1,1",
            'slots_at_level_eighteen' =>  "4,3,3,3,3,1,1,1,1",
            'slots_at_level_nineteen' =>  "4,3,3,3,3,2,1,1,1",
            'slots_at_level_twenty' =>    "4,3,3,3,3,2,2,1,1",
        ]);

        // Sorcerer (Full caster, spells go to level 9)
        Spellslots::factory()->create([
            'archetype_id' => Archetype::where('name', "Sorcerer")->first()->id,
            'slots_at_level_one' =>       "2,0,0,0,0,0,0,0,0",
            'slots_at_level_two' =>       "3,0,0,0,0,0,0,0,0",
            'slots_at_level_three' =>     "4,2,0,0,0,0,0,0,0",
            'slots_at_level_four' =>      "4,3,0,0,0,0,0,0,0",
            'slots_at_level_five' =>      "4,3,2,0,0,0,0,0,0",
            'slots_at_level_six' =>       "4,3,3,0,0,0,0,0,0",
            'slots_at_level_seven' =>     "4,3,3,1,0,0,0,0,0",
            'slots_at_level_eight' =>     "4,3,3,2,0,0,0,0,0",
            'slots_at_level_nine' =>      "4,3,3,3,1,0,0,0,0",
            'slots_at_level_ten' =>       "4,3,3,3,2,0,0,0,0",
            'slots_at_level_eleven' =>    "4,3,3,3,2,1,0,0,0",
            'slots_at_level_twelve' =>    "4,3,3,3,2,1,0,0,0",
            'slots_at_level_thirteen' =>  "4,3,3,3,2,1,1,0,0",
            'slots_at_level_fourteen' =>  "4,3,3,3,2,1,1,0,0",
            'slots_at_level_fifteen' =>   "4,3,3,3,2,1,1,1,0",
            'slots_at_level_sixteen' =>   "4,3,3,3,2,1,1,1,0",
            'slots_at_level_seventeen' => "4,3,3,3,2,1,1,1,1",
            'slots_at_level_eighteen' =>  "4,3,3,3,3,1,1,1,1",
            'slots_at_level_nineteen' =>  "4,3,3,3,3,2,1,1,1",
            'slots_at_level_twenty' =>    "4,3,3,3,3,2,2,1,1",
        ]);
    }
}
