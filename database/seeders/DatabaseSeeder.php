<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'username' => 'alpine',
            'password' => 'root',
            'role' => "admin",
        ]);

        User::factory()->create([
            'username' => 'dungeonmaster',
            'password' => 'password',
            'role' => "runner",
        ]);

        User::factory()->create([
            'username' => 'ben',
            'password' => 'password',
            'role' => "player",
        ]);

        User::factory()->create([
            'username' => 'aadyn',
            'password' => 'password',
            'role' => "player",
        ]);

        $this->call([
            ArchetypeSeeder::class,
            SpeciesSeeder::class,
            BackgroundSeeder::class,
            SpellSeeder::class,
            CharacterSeeder::class,
            CharacterStatisticSeeder::class,
            SkillSeeder::class,
            SpeciesFeatureSeeder::class,
            ArchetypeFeatureSeeder::class,
            ActionSeeder::class,
            SpellslotsSeeder::class,
            ChargesSeeder::class,
            NoteSeeder::class,
            ItemSeeder::class,
            ArmorSeeder::class,
            WeaponSeeder::class,
            ToolsSeeder::class,
        ]);
    }
}
