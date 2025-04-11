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
        Species::factory()->create(['name' => 'Aasimar']);
        Species::factory()->create(['name' => 'Dragonborn']);
        Species::factory()->create(['name' => 'Dwarf']);
        Species::factory()->create(['name' => 'Elf']);
        Species::factory()->create(['name' => 'Gnome']);
        Species::factory()->create(['name' => 'Goliath']);
        Species::factory()->create(['name' => 'Halfling']);
        Species::factory()->create(['name' => 'Human']);
        Species::factory()->create(['name' => 'Orc']);
        Species::factory()->create(['name' => 'Tiefling']);
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
