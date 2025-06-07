<?php

namespace Database\Seeders;

use App\Models\Note;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
$user = User::where('username', "aadyn")->first();
Note::factory()->create([
    'user_id' => $user->id,
    'theme' => "cyan",
    'title' => "GEAR",
    'text' => "2 Daggers, Thieves' Tools, Crowbar, 2 Pouches, Traveler's Clothes

Studded Leather Armor, Scimitar, Shortsword, Longbow, 20 Arrows, Quiver, Dungeoneer's Pack

glowy jade
26 GP 
5 SP",
]);

$user = User::where('username', "ben")->first();
Note::factory()->create([
    'user_id' => $user->id,
    'theme' => "indigo",
    'title' => "PALADIN SPELLS",
    'text' => "Bless — Enhances allies' attacks and saving throws by adding 1d4 to their rolls.

Command — Forces a creature to follow a one-word command for one round.

Compelled Duel — Compels an enemy to duel you and disadvantages their attacks against others.

Cure Wounds — Heals a creature you touch for 1d8 + your spellcasting ability modifier.

Detect Evil and Good — Senses the presence of certain creature types within 30 feet.

Detect Magic — Reveals magical auras within 30 feet.

Detect Poison and Disease — Detects poisons, poisonous creatures, and diseases within 30 feet.

Divine Favor — Your weapon attacks deal an extra 1d4 radiant damage.

Divine Smite — Channel divine energy to deal extra radiant damage on a weapon hit.

Heroism — Grants temporary hit points each round and immunity to being frightened.

Protection from Evil and Good — Protects a creature from certain creature types.

Purify Food and Drink — Removes poison and disease from food and beverages.

Searing Smite — Your weapon deals extra fire damage and can set targets ablaze.

Shield of Faith — Creates a protective field that grants +2 AC to a creature.

Thunderous Smite — Your weapon strike creates a thunderous boom that can knock enemies prone.

Wrathful Smite — Your weapon strike inflicts psychic damage and can frighten enemies.

Note: As a 2nd level Paladin, you can prepare 3 spells from this list and have 2 spell slots to cast them.",
]);

$user = User::where('username', "ben")->first();
Note::factory()->create([
    'user_id' => $user->id,
    'theme' => "gray",
    'title' => "GEAR",
    'text' => "Chain Mail, Shield, Longsword, 6 Javelins, Holy Symbol, Priest's Pack

Gaming Set, Fine Clothes, Perfume

38 GP",
]);

$user = User::where('username', "aadyn")->first();
Note::factory()->create([
    'user_id' => $user->id,
    'theme' => "indigo",
    'title' => "inventory",
    'text' => "==========================
- Studded Leather armour
- Scimitar
- shortsword
- Longbox
- 20 Arrows
- quiver
- Dungeoneer's pack
- Dagger
- Dagger
- Thieve's Tools
- Crowbar
- Pouch
- Pouch
- Traveler's Clothes
- golden onek

- leather armour x2
- glowy jade x2
- bronze shortsword 
- wooden key
- holy symbol - 10gp

- giant crab meat x days
- 3 giant catfish

=============================",
]);

$user = User::where('username', "ben")->first();
Note::factory()->create([
    'user_id' => $user->id,
    'theme' => "indigo",
    'title' => "Stuff",
    'text' => "Health: 12

Leather Armour
Coin Purse - Electrum coin - 7

Glowing Jade Item
Bronze short sword
Pouch of Electrum coins - 3",
]);

$user = User::where('username', "aadyn")->first();
Note::factory()->create([
    'user_id' => $user->id,
    'theme' => "yellow",
    'title' => "permanent skills",
    'text' => "bonus to noodling (catching catfish by hand)

fighting style - Two Weapon Fighting",
]);

$user = User::where('username', "ben")->first();
Note::factory()->create([
    'user_id' => $user->id,
    'theme' => "gray",
    'title' => "Crab Stuff",
    'text' => "(I deleted your note, sorry)

A single all-blue cardboard puzzle-piece
An oil encrusted black feather that smells of burning
A hempen Anklet - Enchanted
A giant fishhook ->
        These palm-sized fishhooks are made by the Dragonborn for catching giant river-monsters in the Kemet, the Kheran Delta, and the surrounding lakes. Carved from the bone of some giant desert-beast, they occasionally find their way out to sea in the mouth of some horror or another, but mainly the Triton know of them because the Dragonborn won't stop trying to trade them, despite them being relatively useless to the already sea-dwelling people.

26 Days' Rations - Crab Meat",
]);
    }
}
