<?php

namespace Database\Seeders;

use App\Models\Species;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpeciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Species::factory()->create([
            'name' => 'Dragonborn',
            'creature_type' => 'Humanoid',
            'size' => 'medium',
            'speed' => 30,
            'darkvision' => 60,
        ]);
        Species::factory()->create([
            'name' => 'Dwarf',
            'creature_type' => 'Humanoid',
            'size' => 'medium',
            'speed' => 30,
            'darkvision' => 120,
        ]);
        Species::factory()->create([
            'name' => 'Elf',
            'creature_type' => 'Humanoid',
            'size' => 'medium',
            'speed' => 30,
            'darkvision' => 60,
        ]);
        Species::factory()->create([
            'name' => 'Gnome',
            'creature_type' => 'Humanoid',
            'size' => 'small',
            'speed' => 30,
            'darkvision' => 60,
        ]);
        Species::factory()->create([
            'name' => 'Goliath',
            'creature_type' => 'Humanoid',
            'size' => 'medium',
            'speed' => 35,
            'darkvision' => 0,
        ]);
        Species::factory()->create([
            'name' => 'Halfling',
            'creature_type' => 'Humanoid',
            'size' => 'small',
            'speed' => 30,
            'darkvision' => 0,
        ]);
        Species::factory()->create([
            'name' => 'Human',
            'creature_type' => 'Humanoid',
            'size' => 'medium',
            'speed' => 30,
            'darkvision' => 0,
        ]);
        Species::factory()->create([
            'name' => 'Orc',
            'creature_type' => 'Humanoid',
            'size' => 'medium',
            'speed' => 30,
            'darkvision' => 120,
        ]);
        Species::factory()->create([
            'name' => 'Tiefling',
            'creature_type' => 'Humanoid',
            'size' => 'medium',
            'speed' => 30,
            'darkvision' => 60,
        ]);
        Species::factory()->create([
            'name' => 'Triton',
            'creature_type' => 'Humanoid',
            'size' => 'medium',
            'speed' => 30,
            'darkvision' => 60,
        ]);
        Species::factory()->create([
            'name' => 'Harengon',
            'creature_type' => 'Humanoid',
            'size' => 'medium',
            'speed' => 30,
            'darkvision' => 0,
        ]);
    }
}