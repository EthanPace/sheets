<?php

namespace Database\Seeders;

use App\Models\Weapon;
use Illuminate\Database\Seeder;

class WeaponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Simple Melee Weapons
        Weapon::factory()->create([
            'name' => 'Club',
            'description' => 'A simple wooden club',
            'category' => 'Simple',
            'type' => 'Melee',
            'damage_die' => 4,
            'damage_die_number' => 1,
            'damage_type' => 'Bludgeoning',
            'properties' => 'Light',
            'mastery' => 'Slow',
            'weight' => 2,
            'cost' => 10,
            'range' => null
        ]);

        Weapon::factory()->create([
            'name' => 'Dagger',
            'description' => 'A sharp, pointed blade',
            'category' => 'Simple',
            'type' => 'Melee',
            'damage_die' => 4,
            'damage_die_number' => 1,
            'damage_type' => 'Piercing',
            'properties' => 'Finesse, Light, Thrown',
            'mastery' => 'Nick',
            'weight' => 1,
            'cost' => 200,
            'range' => '20/60'
        ]);

        Weapon::factory()->create([
            'name' => 'Greatclub',
            'description' => 'A large wooden club',
            'category' => 'Simple',
            'type' => 'Melee',
            'damage_die' => 8,
            'damage_die_number' => 1,
            'damage_type' => 'Bludgeoning',
            'properties' => 'Two-Handed',
            'mastery' => 'Push',
            'weight' => 10,
            'cost' => 20,
            'range' => null
        ]);

        Weapon::factory()->create([
            'name' => 'Handaxe',
            'description' => 'A small axe for one-handed use',
            'category' => 'Simple',
            'type' => 'Melee',
            'damage_die' => 6,
            'damage_die_number' => 1,
            'versatile_die' => 8,
            'versatile_die_number' => 1,
            'damage_type' => 'Slashing',
            'properties' => 'Light, Thrown',
            'mastery' => 'Vex',
            'weight' => 2,
            'cost' => 500,
            'range' => '20/60'
        ]);

        Weapon::factory()->create([
            'name' => 'Javelin',
            'description' => 'A light spear for throwing',
            'category' => 'Simple',
            'type' => 'Melee',
            'damage_die' => 6,
            'damage_die_number' => 1,
            'damage_type' => 'Piercing',
            'properties' => 'Thrown',
            'mastery' => 'Slow',
            'weight' => 2,
            'cost' => 50,
            'range' => '30/120'
        ]);

        Weapon::factory()->create([
            'name' => 'Light Hammer',
            'description' => 'A small hammer',
            'category' => 'Simple',
            'type' => 'Melee',
            'damage_die' => 4,
            'damage_die_number' => 1,
            'damage_type' => 'Bludgeoning',
            'properties' => 'Light, Thrown',
            'mastery' => 'Nick',
            'weight' => 2,
            'cost' => 200,
            'range' => '20/60'
        ]);

        Weapon::factory()->create([
            'name' => 'Mace',
            'description' => 'A heavy club with a weighted head',
            'category' => 'Simple',
            'type' => 'Melee',
            'damage_die' => 6,
            'damage_die_number' => 1,
            'damage_type' => 'Bludgeoning',
            'properties' => '',
            'mastery' => 'Sap',
            'weight' => 4,
            'cost' => 500,
            'range' => null
        ]);

        Weapon::factory()->create([
            'name' => 'Quarterstaff',
            'description' => 'A sturdy wooden staff',
            'category' => 'Simple',
            'type' => 'Melee',
            'damage_die' => 6,
            'damage_die_number' => 1,
            'damage_type' => 'Bludgeoning',
            'properties' => 'Versatile',
            'mastery' => 'Topple',
            'weight' => 4,
            'cost' => 20,
            'range' => null
        ]);

        Weapon::factory()->create([
            'name' => 'Sickle',
            'description' => 'A curved blade on a short handle',
            'category' => 'Simple',
            'type' => 'Melee',
            'damage_die' => 4,
            'damage_die_number' => 1,
            'damage_type' => 'Slashing',
            'properties' => 'Light',
            'mastery' => 'Nick',
            'weight' => 2,
            'cost' => 100,
            'range' => null
        ]);

        Weapon::factory()->create([
            'name' => 'Spear',
            'description' => 'A long shaft with a pointed tip',
            'category' => 'Simple',
            'type' => 'Melee',
            'damage_die' => 6,
            'damage_die_number' => 1,
            'versatile_die' => 8,
            'versatile_die_number' => 1,
            'damage_type' => 'Piercing',
            'properties' => 'Thrown, Versatile',
            'mastery' => 'Sap',
            'weight' => 3,
            'cost' => 100,
            'range' => '20/60',
            'ammunition' => null
        ]);

        // Simple Ranged Weapons
        Weapon::factory()->create([
            'name' => 'Dart',
            'description' => 'A small throwing weapon',
            'category' => 'Simple',
            'type' => 'Ranged',
            'damage_die' => 4,
            'damage_die_number' => 1,
            'versatile_die' => null,
            'versatile_die_number' => null,
            'damage_type' => 'Piercing',
            'properties' => 'Finesse, Thrown',
            'mastery' => 'Vex',
            'weight' => 0,
            'cost' => 5,
            'range' => '20/60',
            'ammunition' => null
        ]);

        Weapon::factory()->create([
            'name' => 'Light Crossbow',
            'description' => 'A small crossbow',
            'category' => 'Simple',
            'type' => 'Ranged',
            'damage_die' => 8,
            'damage_die_number' => 1,
            'versatile_die' => null,
            'versatile_die_number' => null,
            'damage_type' => 'Piercing',
            'properties' => 'Ammunition, Loading, Two-Handed',
            'mastery' => 'Slow',
            'weight' => 5,
            'cost' => 2500,
            'range' => '80/320',
            'ammunition' => 'Bolt'
        ]);

        Weapon::factory()->create([
            'name' => 'Shortbow',
            'description' => 'A small bow',
            'category' => 'Simple',
            'type' => 'Ranged',
            'damage_die' => 6,
            'damage_die_number' => 1,
            'versatile_die' => null,
            'versatile_die_number' => null,
            'damage_type' => 'Piercing',
            'properties' => 'Ammunition, Two-Handed',
            'mastery' => 'Vex',
            'weight' => 2,
            'cost' => 2500,
            'range' => '80/320',
            'ammunition' => 'Arrow'
        ]);

        Weapon::factory()->create([
            'name' => 'Sling',
            'description' => 'A simple projectile weapon',
            'category' => 'Simple',
            'type' => 'Ranged',
            'damage_die' => 4,
            'damage_die_number' => 1,
            'versatile_die' => null,
            'versatile_die_number' => null,
            'damage_type' => 'Bludgeoning',
            'properties' => 'Ammunition',
            'mastery' => 'Slow',
            'weight' => 0,
            'cost' => 10,
            'range' => '30/120',
            'ammunition' => 'Bullet'
        ]);

        // Martial Melee Weapons
        Weapon::factory()->create([
            'name' => 'Battleaxe',
            'description' => 'A large axe for combat',
            'category' => 'Martial',
            'type' => 'Melee',
            'damage_die' => 8,
            'damage_die_number' => 1,
            'damage_type' => 'Slashing',
            'properties' => 'Versatile',
            'mastery' => 'Topple',
            'weight' => 4,
            'cost' => 1000,
            'range' => null
        ]);

        Weapon::factory()->create([
            'name' => 'Flail',
            'description' => 'A spiked ball on a chain',
            'category' => 'Martial',
            'type' => 'Melee',
            'damage_die' => 8,
            'damage_die_number' => 1,
            'damage_type' => 'Bludgeoning',
            'properties' => '—',
            'mastery' => 'Sap',
            'weight' => 2,
            'cost' => 1000,
            'range' => null
        ]);

        Weapon::factory()->create([
            'name' => 'Glaive',
            'description' => 'A blade on a long pole',
            'category' => 'Martial',
            'type' => 'Melee',
            'damage_die' => 10,
            'damage_die_number' => 1,
            'damage_type' => 'Slashing',
            'properties' => 'Heavy, Reach, Two-Handed',
            'mastery' => 'Graze',
            'weight' => 6,
            'cost' => 2000,
            'range' => null
        ]);

        Weapon::factory()->create([
            'name' => 'Greataxe',
            'description' => 'A massive two-handed axe',
            'category' => 'Martial',
            'type' => 'Melee',
            'damage_die' => 12,
            'damage_die_number' => 1,
            'damage_type' => 'Slashing',
            'properties' => 'Heavy, Two-Handed',
            'mastery' => 'Cleave',
            'weight' => 7,
            'cost' => 3000,
            'range' => null
        ]);

        Weapon::factory()->create([
            'name' => 'Greatsword',
            'description' => 'A large two-handed sword',
            'category' => 'Martial',
            'type' => 'Melee',
            'damage_die' => 6,
            'damage_die_number' => 2,
            'damage_type' => 'Slashing',
            'properties' => 'Heavy, Two-Handed',
            'mastery' => 'Graze',
            'weight' => 6,
            'cost' => 5000,
            'range' => null
        ]);

        Weapon::factory()->create([
            'name' => 'Halberd',
            'description' => 'An axe blade topped with a spear point',
            'category' => 'Martial',
            'type' => 'Melee',
            'damage_die' => 10,
            'damage_die_number' => 1,
            'damage_type' => 'Slashing',
            'properties' => 'Heavy, Reach, Two-Handed',
            'mastery' => 'Cleave',
            'weight' => 6,
            'cost' => 2000,
            'range' => null
        ]);

        Weapon::factory()->create([
            'name' => 'Lance',
            'description' => 'A long cavalry weapon',
            'category' => 'Martial',
            'type' => 'Melee',
            'damage_die' => 10,
            'damage_die_number' => 1,
            'damage_type' => 'Piercing',
            'properties' => 'Heavy, Reach, Two-Handed',
            'mastery' => 'Topple',
            'weight' => 6,
            'cost' => 1000,
            'range' => null
        ]);

        Weapon::factory()->create([
            'name' => 'Longsword',
            'description' => 'A straight double-edged blade',
            'category' => 'Martial',
            'type' => 'Melee',
            'damage_die' => 8,
            'damage_die_number' => 1,
            'damage_type' => 'Slashing',
            'properties' => 'Versatile',
            'mastery' => 'Sap',
            'weight' => 3,
            'cost' => 1500,
            'range' => null
        ]);

        Weapon::factory()->create([
            'name' => 'Maul',
            'description' => 'A heavy two-handed hammer',
            'category' => 'Martial',
            'type' => 'Melee',
            'damage_die' => 6,
            'damage_die_number' => 2,
            'damage_type' => 'Bludgeoning',
            'properties' => 'Heavy, Two-Handed',
            'mastery' => 'Topple',
            'weight' => 10,
            'cost' => 1000,
            'range' => null
        ]);

        Weapon::factory()->create([
            'name' => 'Morningstar',
            'description' => 'A spiked mace',
            'category' => 'Martial',
            'type' => 'Melee',
            'damage_die' => 8,
            'damage_die_number' => 1,
            'damage_type' => 'Piercing',
            'properties' => '—',
            'mastery' => 'Sap',
            'weight' => 4,
            'cost' => 1500,
            'range' => null
        ]);

        Weapon::factory()->create([
            'name' => 'Pike',
            'description' => 'A very long spear',
            'category' => 'Martial',
            'type' => 'Melee',
            'damage_die' => 10,
            'damage_die_number' => 1,
            'damage_type' => 'Piercing',
            'properties' => 'Heavy, Reach, Two-Handed',
            'mastery' => 'Push',
            'weight' => 18,
            'cost' => 500,
            'range' => null
        ]);

        Weapon::factory()->create([
            'name' => 'Rapier',
            'description' => 'A slender, sharp-pointed sword',
            'category' => 'Martial',
            'type' => 'Melee',
            'damage_die' => 8,
            'damage_die_number' => 1,
            'damage_type' => 'Piercing',
            'properties' => 'Finesse',
            'mastery' => 'Vex',
            'weight' => 2,
            'cost' => 2500,
            'range' => null
        ]);

        Weapon::factory()->create([
            'name' => 'Scimitar',
            'description' => 'A curved sword',
            'category' => 'Martial',
            'type' => 'Melee',
            'damage_die' => 6,
            'damage_die_number' => 1,
            'damage_type' => 'Slashing',
            'properties' => 'Finesse, Light',
            'mastery' => 'Nick',
            'weight' => 3,
            'cost' => 2500,
            'range' => null
        ]);

        Weapon::factory()->create([
            'name' => 'Shortsword',
            'description' => 'A short blade',
            'category' => 'Martial',
            'type' => 'Melee',
            'damage_die' => 6,
            'damage_die_number' => 1,
            'damage_type' => 'Piercing',
            'properties' => 'Finesse, Light',
            'mastery' => 'Vex',
            'weight' => 2,
            'cost' => 1000,
            'range' => null
        ]);

        Weapon::factory()->create([
            'name' => 'Trident',
            'description' => 'A three-pronged spear',
            'category' => 'Martial',
            'type' => 'Melee',
            'damage_die' => 8,
            'damage_die_number' => 1,
            'damage_type' => 'Piercing',
            'properties' => 'Thrown, Versatile',
            'mastery' => 'Topple',
            'weight' => 4,
            'cost' => 500,
            'range' => '20/60'
        ]);

        Weapon::factory()->create([
            'name' => 'Warhammer',
            'description' => 'A heavy hammer for combat',
            'category' => 'Martial',
            'type' => 'Melee',
            'damage_die' => 8,
            'damage_die_number' => 1,
            'damage_type' => 'Bludgeoning',
            'properties' => 'Versatile',
            'mastery' => 'Push',
            'weight' => 5,
            'cost' => 1500,
            'range' => null
        ]);

        Weapon::factory()->create([
            'name' => 'War Pick',
            'description' => 'A pick designed for war',
            'category' => 'Martial',
            'type' => 'Melee',
            'damage_die' => 8,
            'damage_die_number' => 1,
            'damage_type' => 'Piercing',
            'properties' => 'Versatile',
            'mastery' => 'Sap',
            'weight' => 2,
            'cost' => 500,
            'range' => null
        ]);

        Weapon::factory()->create([
            'name' => 'Whip',
            'description' => 'A flexible weapon',
            'category' => 'Martial',
            'type' => 'Melee',
            'damage_die' => 4,
            'damage_die_number' => 1,
            'damage_type' => 'Slashing',
            'properties' => 'Finesse, Reach',
            'mastery' => 'Slow',
            'weight' => 3,
            'cost' => 200,
            'range' => null
        ]);

        // Martial Ranged Weapons
        Weapon::factory()->create([
            'name' => 'Blowgun',
            'description' => 'A tube for shooting needles',
            'category' => 'Martial',
            'type' => 'Ranged',
            'damage_die' => 1,
            'damage_die_number' => 1,
            'versatile_die' => null,
            'versatile_die_number' => null,
            'damage_type' => 'Piercing',
            'properties' => 'Ammunition, Loading',
            'mastery' => 'Vex',
            'weight' => 1,
            'cost' => 1000,
            'range' => '25/100',
            'ammunition' => 'Needle'
        ]);

        Weapon::factory()->create([
            'name' => 'Hand Crossbow',
            'description' => 'A small one-handed crossbow',
            'category' => 'Martial',
            'type' => 'Ranged',
            'damage_die' => 6,
            'damage_die_number' => 1,
            'versatile_die' => null,
            'versatile_die_number' => null,
            'damage_type' => 'Piercing',
            'properties' => 'Ammunition, Light, Loading',
            'mastery' => 'Vex',
            'weight' => 3,
            'cost' => 7500,
            'range' => '30/120',
            'ammunition' => 'Bolt'
        ]);

        Weapon::factory()->create([
            'name' => 'Heavy Crossbow',
            'description' => 'A large, powerful crossbow',
            'category' => 'Martial',
            'type' => 'Ranged',
            'damage_die' => 10,
            'damage_die_number' => 1,
            'versatile_die' => null,
            'versatile_die_number' => null,
            'damage_type' => 'Piercing',
            'properties' => 'Ammunition, Heavy, Loading, Two-Handed',
            'mastery' => 'Push',
            'weight' => 18,
            'cost' => 5000,
            'range' => '100/400',
            'ammunition' => 'Bolt'
        ]);

        Weapon::factory()->create([
            'name' => 'Longbow',
            'description' => 'A tall powerful bow',
            'category' => 'Martial',
            'type' => 'Ranged',
            'damage_die' => 8,
            'damage_die_number' => 1,
            'versatile_die' => null,
            'versatile_die_number' => null,
            'damage_type' => 'Piercing',
            'properties' => 'Ammunition, Heavy, Two-Handed',
            'mastery' => 'Slow',
            'weight' => 2,
            'cost' => 5000,
            'range' => '150/600',
            'ammunition' => 'Arrow'
        ]);

        Weapon::factory()->create([
            'name' => 'Musket',
            'description' => 'A long-barreled firearm',
            'category' => 'Martial',
            'type' => 'Ranged',
            'damage_die' => 12,
            'damage_die_number' => 1,
            'versatile_die' => null,
            'versatile_die_number' => null,
            'damage_type' => 'Piercing',
            'properties' => 'Ammunition, Loading, Two-Handed',
            'mastery' => 'Slow',
            'weight' => 10,
            'cost' => 50000,
            'range' => '40/120',
            'ammunition' => 'Bullet'
        ]);

        Weapon::factory()->create([
            'name' => 'Pistol',
            'description' => 'A short-barreled firearm',
            'category' => 'Martial',
            'type' => 'Ranged',
            'damage_die' => 10,
            'damage_die_number' => 1,
            'versatile_die' => null,
            'versatile_die_number' => null,
            'damage_type' => 'Piercing',
            'properties' => 'Ammunition, Loading',
            'mastery' => 'Vex',
            'weight' => 3,
            'cost' => 25000,
            'range' => '30/90',
            'ammunition' => 'Bullet'
        ]);
    }
}