<?php

namespace Database\Seeders;

use App\Models\Statistic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatisticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Statistic::factory()->create(['name' => "Strength"]);
        Statistic::factory()->create(['name' => "Dexterity"]);
        Statistic::factory()->create(['name' => "Constitution"]);
        Statistic::factory()->create(['name' => "Wisdom"]);
        Statistic::factory()->create(['name' => "Intelligence"]);
        Statistic::factory()->create(['name' => "Charisma"]);
    }
}
