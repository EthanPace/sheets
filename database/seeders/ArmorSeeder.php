<?php

namespace Database\Seeders;

use App\Models\Armor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArmorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Light Armor
        Armor::factory()->create([
            'name' => 'Padded Armor',
            'description' => 'Quilted layers of cloth and batting provide basic protection.',
            'category' => 'Light',
            'armor_class' => '11 + Dex modifier',
            'base_ac' => 11,
            'dex_modifier' => true,
            'max_dex_bonus' => null,
            'strength_requirement' => null,
            'stealth_disadvantage' => true,
            'weight' => 8,
            'cost' => 500,
        ]);

        Armor::factory()->create([
            'name' => 'Leather Armor',
            'description' => 'Boiled leather provides flexible protection.',
            'category' => 'Light',
            'armor_class' => '11 + Dex modifier',
            'base_ac' => 11,
            'dex_modifier' => true,
            'max_dex_bonus' => null,
            'strength_requirement' => null,
            'stealth_disadvantage' => false,
            'weight' => 10,
            'cost' => 1000,
        ]);

        Armor::factory()->create([
            'name' => 'Studded Leather Armor',
            'description' => 'Leather armor reinforced with close-set rivets or spikes.',
            'category' => 'Light',
            'armor_class' => '12 + Dex modifier',
            'base_ac' => 12,
            'dex_modifier' => true,
            'max_dex_bonus' => null,
            'strength_requirement' => null,
            'stealth_disadvantage' => false,
            'weight' => 13,
            'cost' => 4500,
        ]);

        // Medium Armor
        Armor::factory()->create([
            'name' => 'Hide Armor',
            'description' => 'Crude armor consisting of thick furs and pelts.',
            'category' => 'Medium',
            'armor_class' => '12 + Dex modifier (max 2)',
            'base_ac' => 12,
            'dex_modifier' => true,
            'max_dex_bonus' => 2,
            'strength_requirement' => null,
            'stealth_disadvantage' => false,
            'weight' => 12,
            'cost' => 1000,
        ]);

        Armor::factory()->create([
            'name' => 'Chain Shirt',
            'description' => 'A shirt of interlocking metal rings worn between layers of clothing.',
            'category' => 'Medium',
            'armor_class' => '13 + Dex modifier (max 2)',
            'base_ac' => 13,
            'dex_modifier' => true,
            'max_dex_bonus' => 2,
            'strength_requirement' => null,
            'stealth_disadvantage' => false,
            'weight' => 20,
            'cost' => 5000,
        ]);

        Armor::factory()->create([
            'name' => 'Scale Mail',
            'description' => 'A coat and leggings of leather covered with overlapping pieces of metal.',
            'category' => 'Medium',
            'armor_class' => '14 + Dex modifier (max 2)',
            'base_ac' => 14,
            'dex_modifier' => true,
            'max_dex_bonus' => 2,
            'strength_requirement' => null,
            'stealth_disadvantage' => true,
            'weight' => 45,
            'cost' => 5000,
        ]);

        Armor::factory()->create([
            'name' => 'Breastplate',
            'description' => 'A fitted metal chest piece worn with supple leather.',
            'category' => 'Medium',
            'armor_class' => '14 + Dex modifier (max 2)',
            'base_ac' => 14,
            'dex_modifier' => true,
            'max_dex_bonus' => 2,
            'strength_requirement' => null,
            'stealth_disadvantage' => false,
            'weight' => 20,
            'cost' => 40000,
        ]);

        Armor::factory()->create([
            'name' => 'Half Plate Armor',
            'description' => 'Half plate consists of shaped metal plates that cover most of the wearer\'s body.',
            'category' => 'Medium',
            'armor_class' => '15 + Dex modifier (max 2)',
            'base_ac' => 15,
            'dex_modifier' => true,
            'max_dex_bonus' => 2,
            'strength_requirement' => null,
            'stealth_disadvantage' => true,
            'weight' => 40,
            'cost' => 75000,
        ]);

        // Heavy Armor
        Armor::factory()->create([
            'name' => 'Ring Mail',
            'description' => 'Leather armor with heavy rings sewn into it.',
            'category' => 'Heavy',
            'armor_class' => '14',
            'base_ac' => 14,
            'dex_modifier' => false,
            'max_dex_bonus' => null,
            'strength_requirement' => null,
            'stealth_disadvantage' => true,
            'weight' => 40,
            'cost' => 3000,
        ]);

        Armor::factory()->create([
            'name' => 'Chain Mail',
            'description' => 'Interlocking metal rings that cover the entire torso and limbs.',
            'category' => 'Heavy',
            'armor_class' => '16',
            'base_ac' => 16,
            'dex_modifier' => false,
            'max_dex_bonus' => null,
            'strength_requirement' => 13,
            'stealth_disadvantage' => true,
            'weight' => 55,
            'cost' => 7500,
        ]);

        Armor::factory()->create([
            'name' => 'Splint Armor',
            'description' => 'Narrow vertical strips of metal riveted to a backing of leather.',
            'category' => 'Heavy',
            'armor_class' => '17',
            'base_ac' => 17,
            'dex_modifier' => false,
            'max_dex_bonus' => null,
            'strength_requirement' => 15,
            'stealth_disadvantage' => true,
            'weight' => 60,
            'cost' => 20000,
        ]);

        Armor::factory()->create([
            'name' => 'Plate Armor',
            'description' => 'Interlocking metal plates that cover the entire body.',
            'category' => 'Heavy',
            'armor_class' => '18',
            'base_ac' => 18,
            'dex_modifier' => false,
            'max_dex_bonus' => null,
            'strength_requirement' => 15,
            'stealth_disadvantage' => true,
            'weight' => 65,
            'cost' => 150000,
        ]);

        // Shield
        Armor::factory()->create([
            'name' => 'Shield',
            'description' => 'A protective barrier held in one hand.',
            'category' => 'Shield',
            'armor_class' => '+2',
            'base_ac' => 2,
            'dex_modifier' => false,
            'max_dex_bonus' => null,
            'strength_requirement' => null,
            'stealth_disadvantage' => false,
            'weight' => 6,
            'cost' => 1000,
        ]);
    }
}