<?php

namespace Database\Seeders;

use App\Models\Armor;
use App\Models\Character;
use App\Models\Inventory;
use App\Models\Item;
use App\Models\Tools;
use App\Models\Weapon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $klu = Character::where('id', '1')->first();
        Inventory::factory()->create([
            'character_id' => $klu->id,
            'equippable_id' => Armor::where('name', 'Chain Mail')->first()->id,
            'equippable_type' => Armor::class,
        ]);
        Inventory::factory()->create([
            'character_id' => $klu->id,
            'equippable_id' => Armor::where('name', 'Shield')->first()->id,
            'equippable_type' => Armor::class,
        ]);
        Inventory::factory()->create([
            'character_id' => $klu->id,
            'equippable_id' => Weapon::where('name', 'Longsword')->first()->id,
            'equippable_type' => Weapon::class,
        ]);
        $javelin = Weapon::where('name', 'Javelin')->first();
        for ($i = 0; $i < 6; $i++) {
            Inventory::factory()->create([
                'character_id' => $klu->id,
                'equippable_id' => $javelin->id,
                'equippable_type' => Weapon::class,
            ]);
        }
        Inventory::factory()->create([
            'character_id' => $klu->id,
            'equippable_id' => Tools::where('name', 'Gaming Set')->first()->id,
            'equippable_type' => Tools::class,
        ]);
        $items1 = ['Amulet', "Priest's Pack", 'Clothes, Fine', 'Perfume'];
        foreach ($items1 as $itemName) {
            Inventory::factory()->create([
                'character_id' => $klu->id,
                'equippable_id' => Item::where('name', $itemName)->first()->id,
                'equippable_type' => Item::class,
            ]);
        }

        $vonik = Character::where('id', '2')->first();
        $dagger = Weapon::where('name', 'Dagger')->first();
        for ($i = 0; $i < 2; $i++) {
            Inventory::factory()->create([
                'character_id' => $vonik->id,
                'equippable_id' => $dagger->id,
                'equippable_type' => Weapon::class,
            ]);
        }
        $weapons2 = ['Scimitar', 'Shortsword', 'Longbow'];
        foreach ($weapons2 as $weaponName) {
            Inventory::factory()->create([
                'character_id' => $vonik->id,
                'equippable_id' => Weapon::where('name', $weaponName)->first()->id,
                'equippable_type' => Weapon::class,
            ]);
        }
        Inventory::factory()->create([
            'character_id' => $vonik->id,
            'equippable_id' => Armor::where('name', 'Studded Leather Armor')->first()->id,
            'equippable_type' => Armor::class,
        ]);
        $tools2 = ["Thieves' Tools"];
        foreach ($tools2 as $toolName) {
            Inventory::factory()->create([
                'character_id' => $vonik->id,
                'equippable_id' => Tools::where('name', $toolName)->first()->id,
                'equippable_type' => Tools::class,
            ]);
        }
        $items2 = ["Clothes, Traveler's", 'Quiver', "Dungeoneer's Pack", "Crowbar"];
        foreach ($items2 as $itemName) {
            Inventory::factory()->create([
                'character_id' => $vonik->id,
                'equippable_id' => Item::where('name', $itemName)->first()->id,
                'equippable_type' => Item::class,
            ]);
        }
        $pouch = Item::where('name', 'Pouch')->first();
        for ($i = 0; $i < 2; $i++) {
            Inventory::factory()->create([
                'character_id' => $vonik->id,
                'equippable_id' => $pouch->id,
                'equippable_type' => Item::class,
            ]);
        }
        $arrow = Item::where('name', 'Arrows')->first();
        Inventory::factory()->create([
            'character_id' => $vonik->id,
            'equippable_id' => $arrow->id,
            'equippable_type' => Item::class,
        ]);

        $others = Character::whereNotIn('id', [1, 2])->get();
        
        foreach ($others as $character) {
            $weaponCount = rand(2, 3);
            $randomWeapons = Weapon::inRandomOrder()->take($weaponCount)->get();
            foreach ($randomWeapons as $weapon) {
                Inventory::factory()->create([
                    'character_id' => $character->id,
                    'equippable_id' => $weapon->id,
                    'equippable_type' => Weapon::class,
                ]);
            }

            $randomArmor = Armor::inRandomOrder()->first();
            Inventory::factory()->create([
                'character_id' => $character->id,
                'equippable_id' => $randomArmor->id,
                'equippable_type' => Armor::class,
            ]);

            $itemCount = rand(2, 4);
            $randomItems = Item::inRandomOrder()->take($itemCount)->get();
            foreach ($randomItems as $item) {
                Inventory::factory()->create([
                    'character_id' => $character->id,
                    'equippable_id' => $item->id,
                    'equippable_type' => Item::class,
                ]);
            }

            $randomTool = Tools::inRandomOrder()->first();
            if ($randomTool) {
                Inventory::factory()->create([
                    'character_id' => $character->id,
                    'equippable_id' => $randomTool->id,
                    'equippable_type' => Tools::class,
                ]);
            }
        }
    }
}