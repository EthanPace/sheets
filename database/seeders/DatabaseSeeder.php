<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = [
            ['username' => 'alpine', 'role' => 'admin'],
            ['username' => 'ethan',  'role' => 'runner'],
            ['username' => 'ben',    'role' => 'player'],
            ['username' => 'aadyn',  'role' => 'player'],
            ['username' => 'james',  'role' => 'player'],
        ];

        $this->command->info('');
        $this->command->info('User passwords (save these now):');
        $this->command->info(str_repeat('-', 30));

        foreach ($users as $data) {
            $password = Str::random(12);
            User::factory()->create([
                'username' => $data['username'],
                'password' => $password,
                'role'     => $data['role'],
            ]);
            $this->command->info("{$data['username']}: {$password}");
        }

        $this->command->info(str_repeat('-', 30));
        $this->command->info('');

        $this->call([
            StatisticSeeder::class,
            ArchetypeSeeder::class,
            SpeciesSeeder::class,
            BackgroundSeeder::class,
            SpellSeeder::class,
            CharacterSeeder::class,
            CharacterStatisticSeeder::class,
            SkillSeeder::class,
            SpeciesFeatureSeeder::class,
            ArchetypeFeatureSeeder::class,
            SpellslotsSeeder::class,
            ChargesSeeder::class,
            NoteSeeder::class,
            ItemSeeder::class,
            ArmorSeeder::class,
            WeaponSeeder::class,
            ToolsSeeder::class,
            ProficiencySeeder::class,
            CharacterSpellsSeeder::class,
            InventorySeeder::class,
            ActionSeeder::class,
            CharacterSpellslotsSeeder::class,
        ]);
    }
}
