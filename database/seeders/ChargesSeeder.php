<?php

namespace Database\Seeders;

use App\Models\Archetype;
use App\Models\Charges;
use Illuminate\Database\Seeder;

class ChargesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Barbarian - Rages
        Charges::factory()->create([
            'archetype_id' => Archetype::where('name',"Barbarian")->first()->id,

            'name' => "Rages",

            'level_one' =>          2,
            'level_two' =>          2,
            'level_three' =>        3,
            'level_four' =>         3,
            'level_five' =>         3,
            'level_six' =>          4,
            'level_seven' =>        4,
            'level_eight' =>        4,
            'level_nine' =>         4,
            'level_ten' =>          4,
            'level_eleven' =>       4,
            'level_twelve' =>       5,
            'level_thirteen' =>     5,
            'level_fourteen' =>     5,
            'level_fifteen' =>      5,
            'level_sixteen' =>      5,
            'level_seventeen' =>    6,
            'level_eighteen' =>     6,
            'level_nineteen' =>     6,
            'level_twenty' =>       6,
        ]);
        // Barbarian - Rage Damage
        Charges::factory()->create([
            'archetype_id' => Archetype::where('name',"Barbarian")->first()->id,

            'name' => "Rage Damage",

            'level_one' =>          2,
            'level_two' =>          2,
            'level_three' =>        2,
            'level_four' =>         2,
            'level_five' =>         2,
            'level_six' =>          2,
            'level_seven' =>        2,
            'level_eight' =>        2,
            'level_nine' =>         3,
            'level_ten' =>          3,
            'level_eleven' =>       3,
            'level_twelve' =>       3,
            'level_thirteen' =>     3,
            'level_fourteen' =>     3,
            'level_fifteen' =>      3,
            'level_sixteen' =>      4,
            'level_seventeen' =>    4,
            'level_eighteen' =>     4,
            'level_nineteen' =>     4,
            'level_twenty' =>       4,
        ]);
        // Barbarian - Weapon Mastery
        Charges::factory()->create([
            'archetype_id' => Archetype::where('name',"Barbarian")->first()->id,

            'name' => "Weapon Mastery",

            'level_one' =>          2,
            'level_two' =>          2,
            'level_three' =>        2,
            'level_four' =>         3,
            'level_five' =>         3,
            'level_six' =>          3,
            'level_seven' =>        3,
            'level_eight' =>        3,
            'level_nine' =>         3,
            'level_ten' =>          4,
            'level_eleven' =>       4,
            'level_twelve' =>       4,
            'level_thirteen' =>     4,
            'level_fourteen' =>     4,
            'level_fifteen' =>      4,
            'level_sixteen' =>      4,
            'level_seventeen' =>    4,
            'level_eighteen' =>     4,
            'level_nineteen' =>     4,
            'level_twenty' =>       4,
        ]);
        // Bard - Bardic Die
        Charges::factory()->create([
            'archetype_id' => Archetype::where('name',"Bard")->first()->id,

            'name' => "Bardic Die",

            'level_one' =>          6,
            'level_two' =>          6,
            'level_three' =>        6,
            'level_four' =>         6,
            'level_five' =>         8,
            'level_six' =>          8,
            'level_seven' =>        8,
            'level_eight' =>        8,
            'level_nine' =>         8,
            'level_ten' =>          10,
            'level_eleven' =>       10,
            'level_twelve' =>       10,
            'level_thirteen' =>     10,
            'level_fourteen' =>     10,
            'level_fifteen' =>      12,
            'level_sixteen' =>      12,
            'level_seventeen' =>    12,
            'level_eighteen' =>     12,
            'level_nineteen' =>     12,
            'level_twenty' =>       12,
        ]);
        // Bard - Cantrips
        Charges::factory()->create([
            'archetype_id' => Archetype::where('name',"Bard")->first()->id,

            'name' => "Cantrips",

            'level_one' =>          2,
            'level_two' =>          2,
            'level_three' =>        2,
            'level_four' =>         3,
            'level_five' =>         3,
            'level_six' =>          3,
            'level_seven' =>        3,
            'level_eight' =>        3,
            'level_nine' =>         3,
            'level_ten' =>          4,
            'level_eleven' =>       4,
            'level_twelve' =>       4,
            'level_thirteen' =>     4,
            'level_fourteen' =>     4,
            'level_fifteen' =>      4,
            'level_sixteen' =>      4,
            'level_seventeen' =>    4,
            'level_eighteen' =>     4,
            'level_nineteen' =>     4,
            'level_twenty' =>       4,
        ]);
        // Bard - Prepared Spells
        Charges::factory()->create([
            'archetype_id' => Archetype::where('name',"Bard")->first()->id,

            'name' => "Prepared Spells",

            'level_one' =>          4,
            'level_two' =>          5,
            'level_three' =>        6,
            'level_four' =>         7,
            'level_five' =>         9,
            'level_six' =>          10,
            'level_seven' =>        11,
            'level_eight' =>        12,
            'level_nine' =>         14,
            'level_ten' =>          15,
            'level_eleven' =>       16,
            'level_twelve' =>       16,
            'level_thirteen' =>     17,
            'level_fourteen' =>     17,
            'level_fifteen' =>      18,
            'level_sixteen' =>      18,
            'level_seventeen' =>    19,
            'level_eighteen' =>     20,
            'level_nineteen' =>     21,
            'level_twenty' =>       22,
        ]);
        // Cleric - Channel Divinity
        Charges::factory()->create([
            'archetype_id' => Archetype::where('name',"Cleric")->first()->id,

            'name' => "Channel Divinity",

            'level_one' =>          0,
            'level_two' =>          2,
            'level_three' =>        2,
            'level_four' =>         2,
            'level_five' =>         2,
            'level_six' =>          3,
            'level_seven' =>        3,
            'level_eight' =>        3,
            'level_nine' =>         3,
            'level_ten' =>          3,
            'level_eleven' =>       3,
            'level_twelve' =>       3,
            'level_thirteen' =>     3,
            'level_fourteen' =>     3,
            'level_fifteen' =>      3,
            'level_sixteen' =>      3,
            'level_seventeen' =>    3,
            'level_eighteen' =>     4,
            'level_nineteen' =>     4,
            'level_twenty' =>       4,
        ]);
        // Cleric - Cantrips
        Charges::factory()->create([
            'archetype_id' => Archetype::where('name',"Cleric")->first()->id,

            'name' => "Cantrips",

            'level_one' =>          3,
            'level_two' =>          3,
            'level_three' =>        3,
            'level_four' =>         4,
            'level_five' =>         4,
            'level_six' =>          4,
            'level_seven' =>        4,
            'level_eight' =>        4,
            'level_nine' =>         4,
            'level_ten' =>          5,
            'level_eleven' =>       5,
            'level_twelve' =>       5,
            'level_thirteen' =>     5,
            'level_fourteen' =>     5,
            'level_fifteen' =>      5,
            'level_sixteen' =>      5,
            'level_seventeen' =>    5,
            'level_eighteen' =>     5,
            'level_nineteen' =>     5,
            'level_twenty' =>       5,
        ]);
        // Cleric - Prepared Spells
        Charges::factory()->create([
            'archetype_id' => Archetype::where('name',"Cleric")->first()->id,

            'name' => "Prepared Spells",

            'level_one' =>          4,
            'level_two' =>          5,
            'level_three' =>        6,
            'level_four' =>         7,
            'level_five' =>         9,
            'level_six' =>          10,
            'level_seven' =>        11,
            'level_eight' =>        12,
            'level_nine' =>         14,
            'level_ten' =>          15,
            'level_eleven' =>       16,
            'level_twelve' =>       16,
            'level_thirteen' =>     17,
            'level_fourteen' =>     17,
            'level_fifteen' =>      18,
            'level_sixteen' =>      18,
            'level_seventeen' =>    19,
            'level_eighteen' =>     20,
            'level_nineteen' =>     21,
            'level_twenty' =>       22,
        ]);
        // Druid - Wild Shape
        Charges::factory()->create([
            'archetype_id' => Archetype::where('name',"Druid")->first()->id,

            'name' => "Wild Shape",

            'level_one' =>          0,
            'level_two' =>          2,
            'level_three' =>        2,
            'level_four' =>         2,
            'level_five' =>         2,
            'level_six' =>          3,
            'level_seven' =>        3,
            'level_eight' =>        3,
            'level_nine' =>         3,
            'level_ten' =>          3,
            'level_eleven' =>       3,
            'level_twelve' =>       3,
            'level_thirteen' =>     3,
            'level_fourteen' =>     3,
            'level_fifteen' =>      3,
            'level_sixteen' =>      3,
            'level_seventeen' =>    4,
            'level_eighteen' =>     4,
            'level_nineteen' =>     4,
            'level_twenty' =>       4,
        ]);
        // Druid - Cantrips
        Charges::factory()->create([
            'archetype_id' => Archetype::where('name',"Druid")->first()->id,

            'name' => "Cantrips",

            'level_one' =>          2,
            'level_two' =>          2,
            'level_three' =>        2,
            'level_four' =>         3,
            'level_five' =>         3,
            'level_six' =>          3,
            'level_seven' =>        3,
            'level_eight' =>        3,
            'level_nine' =>         3,
            'level_ten' =>          4,
            'level_eleven' =>       4,
            'level_twelve' =>       4,
            'level_thirteen' =>     4,
            'level_fourteen' =>     4,
            'level_fifteen' =>      4,
            'level_sixteen' =>      4,
            'level_seventeen' =>    4,
            'level_eighteen' =>     4,
            'level_nineteen' =>     4,
            'level_twenty' =>       4,
        ]);
        // Druid - Prepared Spells
        Charges::factory()->create([
            'archetype_id' => Archetype::where('name',"Druid")->first()->id,

            'name' => "Prepared Spells",

            'level_one' =>          4,
            'level_two' =>          5,
            'level_three' =>        6,
            'level_four' =>         7,
            'level_five' =>         9,
            'level_six' =>          10,
            'level_seven' =>        11,
            'level_eight' =>        12,
            'level_nine' =>         14,
            'level_ten' =>          15,
            'level_eleven' =>       16,
            'level_twelve' =>       16,
            'level_thirteen' =>     17,
            'level_fourteen' =>     17,
            'level_fifteen' =>      18,
            'level_sixteen' =>      18,
            'level_seventeen' =>    19,
            'level_eighteen' =>     20,
            'level_nineteen' =>     21,
            'level_twenty' =>       22,
        ]);
        // Fighter - Second Wind
        Charges::factory()->create([
            'archetype_id' => Archetype::where('name',"Fighter")->first()->id,

            'name' => "Second Wind",

            'level_one' =>          2,
            'level_two' =>          2,
            'level_three' =>        2,
            'level_four' =>         3,
            'level_five' =>         3,
            'level_six' =>          3,
            'level_seven' =>        3,
            'level_eight' =>        3,
            'level_nine' =>         3,
            'level_ten' =>          4,
            'level_eleven' =>       4,
            'level_twelve' =>       4,
            'level_thirteen' =>     4,
            'level_fourteen' =>     4,
            'level_fifteen' =>      4,
            'level_sixteen' =>      4,
            'level_seventeen' =>    4,
            'level_eighteen' =>     4,
            'level_nineteen' =>     4,
            'level_twenty' =>       4,
        ]);
        // Fighter - Weapon Mastery
        Charges::factory()->create([
            'archetype_id' => Archetype::where('name',"Fighter")->first()->id,

            'name' => "Weapon Mastery",

            'level_one' =>          3,
            'level_two' =>          3,
            'level_three' =>        3,
            'level_four' =>         4,
            'level_five' =>         4,
            'level_six' =>          4,
            'level_seven' =>        4,
            'level_eight' =>        4,
            'level_nine' =>         4,
            'level_ten' =>          5,
            'level_eleven' =>       5,
            'level_twelve' =>       5,
            'level_thirteen' =>     5,
            'level_fourteen' =>     5,
            'level_fifteen' =>      5,
            'level_sixteen' =>      6,
            'level_seventeen' =>    6,
            'level_eighteen' =>     6,
            'level_nineteen' =>     6,
            'level_twenty' =>       6,
        ]);
        // Monk - Martial Arts Die
        Charges::factory()->create([
            'archetype_id' => Archetype::where('name',"Monk")->first()->id,

            'name' => "Martial Arts Die",

            'level_one' =>          6,
            'level_two' =>          6,
            'level_three' =>        6,
            'level_four' =>         6,
            'level_five' =>         8,
            'level_six' =>          8,
            'level_seven' =>        8,
            'level_eight' =>        8,
            'level_nine' =>         8,
            'level_ten' =>          8,
            'level_eleven' =>       10,
            'level_twelve' =>       10,
            'level_thirteen' =>     10,
            'level_fourteen' =>     10,
            'level_fifteen' =>      10,
            'level_sixteen' =>      10,
            'level_seventeen' =>    12,
            'level_eighteen' =>     12,
            'level_nineteen' =>     12,
            'level_twenty' =>       12,
        ]);
        // Monk - Focus Points
        Charges::factory()->create([
            'archetype_id' => Archetype::where('name',"Monk")->first()->id,

            'name' => "Focus Points",

            'level_one' =>          0,
            'level_two' =>          2,
            'level_three' =>        3,
            'level_four' =>         4,
            'level_five' =>         5,
            'level_six' =>          6,
            'level_seven' =>        7,
            'level_eight' =>        8,
            'level_nine' =>         9,
            'level_ten' =>          10,
            'level_eleven' =>       11,
            'level_twelve' =>       12,
            'level_thirteen' =>     13,
            'level_fourteen' =>     14,
            'level_fifteen' =>      15,
            'level_sixteen' =>      16,
            'level_seventeen' =>    17,
            'level_eighteen' =>     18,
            'level_nineteen' =>     19,
            'level_twenty' =>       20,
        ]);
        // Monk - Unarmored Movement
        Charges::factory()->create([
            'archetype_id' => Archetype::where('name',"Monk")->first()->id,

            'name' => "Unarmored Movement",

            'level_one' =>          0,
            'level_two' =>          10,
            'level_three' =>        10,
            'level_four' =>         10,
            'level_five' =>         10,
            'level_six' =>          15,
            'level_seven' =>        15,
            'level_eight' =>        15,
            'level_nine' =>         15,
            'level_ten' =>          20,
            'level_eleven' =>       20,
            'level_twelve' =>       20,
            'level_thirteen' =>     20,
            'level_fourteen' =>     25,
            'level_fifteen' =>      25,
            'level_sixteen' =>      25,
            'level_seventeen' =>    25,
            'level_eighteen' =>     30,
            'level_nineteen' =>     30,
            'level_twenty' =>       30,
        ]);
        // Paladin - Channel Divinity
        Charges::factory()->create([
            'archetype_id' => Archetype::where('name',"Paladin")->first()->id,

            'name' => "Channel Divinity",

            'level_one' =>          0,
            'level_two' =>          0,
            'level_three' =>        2,
            'level_four' =>         2,
            'level_five' =>         2,
            'level_six' =>          2,
            'level_seven' =>        2,
            'level_eight' =>        2,
            'level_nine' =>         2,
            'level_ten' =>          2,
            'level_eleven' =>       3,
            'level_twelve' =>       3,
            'level_thirteen' =>     3,
            'level_fourteen' =>     3,
            'level_fifteen' =>      3,
            'level_sixteen' =>      3,
            'level_seventeen' =>    3,
            'level_eighteen' =>     3,
            'level_nineteen' =>     3,
            'level_twenty' =>       3,
        ]);
        // Paladin - Prepared Spells
        Charges::factory()->create([
            'archetype_id' => Archetype::where('name',"Paladin")->first()->id,

            'name' => "Prepared Spells",

            'level_one' =>          2,
            'level_two' =>          3,
            'level_three' =>        4,
            'level_four' =>         5,
            'level_five' =>         6,
            'level_six' =>          6,
            'level_seven' =>        7,
            'level_eight' =>        7,
            'level_nine' =>         9,
            'level_ten' =>          9,
            'level_eleven' =>       10,
            'level_twelve' =>       10,
            'level_thirteen' =>     11,
            'level_fourteen' =>     11,
            'level_fifteen' =>      12,
            'level_sixteen' =>      12,
            'level_seventeen' =>    14,
            'level_eighteen' =>     14,
            'level_nineteen' =>     15,
            'level_twenty' =>       15,
        ]);
        //  Ranger - Favoured Enemy
        Charges::factory()->create([
            'archetype_id' => Archetype::where('name',"Ranger")->first()->id,

            'name' => "Favoured Enemy",

            'level_one' =>          2,
            'level_two' =>          2,
            'level_three' =>        2,
            'level_four' =>         2,
            'level_five' =>         3,
            'level_six' =>          3,
            'level_seven' =>        3,
            'level_eight' =>        3,
            'level_nine' =>         4,
            'level_ten' =>          4,
            'level_eleven' =>       4,
            'level_twelve' =>       4,
            'level_thirteen' =>     5,
            'level_fourteen' =>     5,
            'level_fifteen' =>      5,
            'level_sixteen' =>      5,
            'level_seventeen' =>    6,
            'level_eighteen' =>     6,
            'level_nineteen' =>     6,
            'level_twenty' =>       6,
        ]);
        //  Ranger - Prepared Spells
        Charges::factory()->create([
            'archetype_id' => Archetype::where('name',"Ranger")->first()->id,

            'name' => "Prepared Spells",

            'level_one' =>          2,
            'level_two' =>          3,
            'level_three' =>        4,
            'level_four' =>         5,
            'level_five' =>         6,
            'level_six' =>          6,
            'level_seven' =>        7,
            'level_eight' =>        7,
            'level_nine' =>         9,
            'level_ten' =>          9,
            'level_eleven' =>       10,
            'level_twelve' =>       10,
            'level_thirteen' =>     11,
            'level_fourteen' =>     11,
            'level_fifteen' =>      12,
            'level_sixteen' =>      12,
            'level_seventeen' =>    14,
            'level_eighteen' =>     14,
            'level_nineteen' =>     15,
            'level_twenty' =>       15,
        ]);
        //  Rogue - Sneak Attack Die
        Charges::factory()->create([
            'archetype_id' => Archetype::where('name',"Rogue")->first()->id,

            'name' => "Sneak Attack Die",

            'level_one' =>          1,
            'level_two' =>          1,
            'level_three' =>        2,
            'level_four' =>         2,
            'level_five' =>         3,
            'level_six' =>          3,
            'level_seven' =>        4,
            'level_eight' =>        4,
            'level_nine' =>         5,
            'level_ten' =>          5,
            'level_eleven' =>       6,
            'level_twelve' =>       6,
            'level_thirteen' =>     7,
            'level_fourteen' =>     7,
            'level_fifteen' =>      8,
            'level_sixteen' =>      8,
            'level_seventeen' =>    9,
            'level_eighteen' =>     9,
            'level_nineteen' =>     10,
            'level_twenty' =>       10,
        ]);
        //  Warlock - Eldritch Invocations
        Charges::factory()->create([
            'archetype_id' => Archetype::where('name',"Warlock")->first()->id,

            'name' => "Eldritch Invocations",

            'level_one' =>          1,
            'level_two' =>          3,
            'level_three' =>        3,
            'level_four' =>         3,
            'level_five' =>         5,
            'level_six' =>          5,
            'level_seven' =>        6,
            'level_eight' =>        6,
            'level_nine' =>         7,
            'level_ten' =>          7,
            'level_eleven' =>       7,
            'level_twelve' =>       8,
            'level_thirteen' =>     8,
            'level_fourteen' =>     8,
            'level_fifteen' =>      9,
            'level_sixteen' =>      9,
            'level_seventeen' =>    9,
            'level_eighteen' =>     10,
            'level_nineteen' =>     10,
            'level_twenty' =>       10,
        ]);
        //  Warlock - Cantrips
        Charges::factory()->create([
            'archetype_id' => Archetype::where('name',"Warlock")->first()->id,

            'name' => "Cantrips",

            'level_one' =>          2,
            'level_two' =>          2,
            'level_three' =>        2,
            'level_four' =>         3,
            'level_five' =>         3,
            'level_six' =>          3,
            'level_seven' =>        3,
            'level_eight' =>        3,
            'level_nine' =>         3,
            'level_ten' =>          4,
            'level_eleven' =>       4,
            'level_twelve' =>       4,
            'level_thirteen' =>     4,
            'level_fourteen' =>     4,
            'level_fifteen' =>      4,
            'level_sixteen' =>      4,
            'level_seventeen' =>    4,
            'level_eighteen' =>     4,
            'level_nineteen' =>     4,
            'level_twenty' =>       4,
        ]);
        //  Warlock - Prepared Spells
        Charges::factory()->create([
            'archetype_id' => Archetype::where('name',"Warlock")->first()->id,

            'name' => "Prepared Spells",

            'level_one' =>          2,
            'level_two' =>          3,
            'level_three' =>        4,
            'level_four' =>         5,
            'level_five' =>         6,
            'level_six' =>          7,
            'level_seven' =>        8,
            'level_eight' =>        9,
            'level_nine' =>         10,
            'level_ten' =>          10,
            'level_eleven' =>       11,
            'level_twelve' =>       11,
            'level_thirteen' =>     12,
            'level_fourteen' =>     12,
            'level_fifteen' =>      13,
            'level_sixteen' =>      13,
            'level_seventeen' =>    14,
            'level_eighteen' =>     14,
            'level_nineteen' =>     15,
            'level_twenty' =>       15,
        ]);
        //  Sorcerer - Sorcery Points
        Charges::factory()->create([
            'archetype_id' => Archetype::where('name',"Sorcerer")->first()->id,

            'name' => "Sorcery Points",

            'level_one' =>          3,
            'level_two' =>          3,
            'level_three' =>        3,
            'level_four' =>         4,
            'level_five' =>         4,
            'level_six' =>          4,
            'level_seven' =>        4,
            'level_eight' =>        4,
            'level_nine' =>         4,
            'level_ten' =>          5,
            'level_eleven' =>       5,
            'level_twelve' =>       5,
            'level_thirteen' =>     5,
            'level_fourteen' =>     5,
            'level_fifteen' =>      5,
            'level_sixteen' =>      5,
            'level_seventeen' =>    5,
            'level_eighteen' =>     5,
            'level_nineteen' =>     5,
            'level_twenty' =>       5,
        ]);
        //  Sorcerer - Cantrips
        Charges::factory()->create([
            'archetype_id' => Archetype::where('name',"Sorcerer")->first()->id,

            'name' => "Cantrips",

            'level_one' =>          3,
            'level_two' =>          3,
            'level_three' =>        3,
            'level_four' =>         4,
            'level_five' =>         4,
            'level_six' =>          4,
            'level_seven' =>        4,
            'level_eight' =>        4,
            'level_nine' =>         4,
            'level_ten' =>          5,
            'level_eleven' =>       5,
            'level_twelve' =>       5,
            'level_thirteen' =>     5,
            'level_fourteen' =>     5,
            'level_fifteen' =>      5,
            'level_sixteen' =>      5,
            'level_seventeen' =>    5,
            'level_eighteen' =>     5,
            'level_nineteen' =>     5,
            'level_twenty' =>       5,
        ]);
        //  Sorcerer - Prepared Spells
        Charges::factory()->create([
            'archetype_id' => Archetype::where('name',"Sorcerer")->first()->id,

            'name' => "Prepared Spells",

            'level_one' =>          4,
            'level_two' =>          5,
            'level_three' =>        6,
            'level_four' =>         7,
            'level_five' =>         9,
            'level_six' =>          10,
            'level_seven' =>        11,
            'level_eight' =>        12,
            'level_nine' =>         14,
            'level_ten' =>          15,
            'level_eleven' =>       16,
            'level_twelve' =>       16,
            'level_thirteen' =>     17,
            'level_fourteen' =>     18,
            'level_fifteen' =>      19,
            'level_sixteen' =>      21,
            'level_seventeen' =>    22,
            'level_eighteen' =>     23,
            'level_nineteen' =>     24,
            'level_twenty' =>       25,
        ]);
        //  Wizard - Cantrips
        Charges::factory()->create([
            'archetype_id' => Archetype::where('name',"Wizard")->first()->id,

            'name' => "Cantrips",

            'level_one' =>          3,
            'level_two' =>          3,
            'level_three' =>        3,
            'level_four' =>         4,
            'level_five' =>         4,
            'level_six' =>          4,
            'level_seven' =>        4,
            'level_eight' =>        4,
            'level_nine' =>         4,
            'level_ten' =>          5,
            'level_eleven' =>       5,
            'level_twelve' =>       5,
            'level_thirteen' =>     5,
            'level_fourteen' =>     5,
            'level_fifteen' =>      5,
            'level_sixteen' =>      5,
            'level_seventeen' =>    5,
            'level_eighteen' =>     5,
            'level_nineteen' =>     5,
            'level_twenty' =>       5,
        ]);
        //  Wizard - Prepared Spells
        Charges::factory()->create([
            'archetype_id' => Archetype::where('name',"Wizard")->first()->id,

            'name' => "Prepared Spells",

            'level_one' =>          4,
            'level_two' =>          5,
            'level_three' =>        6,
            'level_four' =>         7,
            'level_five' =>         9,
            'level_six' =>          10,
            'level_seven' =>        11,
            'level_eight' =>        12,
            'level_nine' =>         14,
            'level_ten' =>          15,
            'level_eleven' =>       16,
            'level_twelve' =>       16,
            'level_thirteen' =>     17,
            'level_fourteen' =>     18,
            'level_fifteen' =>      19,
            'level_sixteen' =>      21,
            'level_seventeen' =>    22,
            'level_eighteen' =>     23,
            'level_nineteen' =>     24,
            'level_twenty' =>       25,
        ]);
    }
}