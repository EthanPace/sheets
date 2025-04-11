<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Models\CharacterStatistic;
use App\Models\Statistic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CharacterStatisticSeeder extends Seeder
{
    private function make(string $stat, int $score, Character $character) {
        CharacterStatistic::factory()->create([
            'character_id' => $character->id,
            'ability' => $stat,
            'score' => $score,
            'modifier' => floor(($score - 10) / 2),
            'proficient' => in_array($stat, $character->archetype->saves()),
        ]);
    }
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //BEN'S CHAR
        $character = Character::where('id', 1)->first();
        $stat = "STRENGTH";
        $score = 17;
        $this->make($stat, $score, $character);
        $stat = "DEXTERITY";
        $score = 15;
        $this->make($stat, $score, $character);
        $stat = "CONSTITUTION";
        $score = 16;
        $this->make($stat, $score, $character);
        $stat = "WISDOM";
        $score = 15;
        $this->make($stat, $score, $character);
        $stat = "INTELLIGENCE";
        $score = 17;
        $this->make($stat, $score, $character);
        $stat = "CHARISMA";
        $score = 16;
        $this->make($stat, $score, $character);
        
        //AADYN'S CHAR
        $character = Character::where('id', 2)->first();
        $stat = "STRENGTH";
        $score = 18;
        $this->make($stat, $score, $character);
        $stat = "DEXTERITY";
        $score = 17;
        $this->make($stat, $score, $character);
        $stat = "CONSTITUTION";
        $score = 16;
        $this->make($stat, $score, $character);
        $stat = "WISDOM";
        $score = 12;
        $this->make($stat, $score, $character);
        $stat = "INTELLIGENCE";
        $score = 11;
        $this->make($stat, $score, $character);
        $stat = "CHARISMA";
        $score = 9;
        $this->make($stat, $score, $character);

        foreach (Character::all() as $character) {
            foreach (['STRENGTH', 'DEXTERITY', 'CONSTITUTION', 'WISDOM', 'INTELLIGENCE', 'CHARISMA'] as $stat) {
                if (CharacterStatistic::where('character_id', $character->id)->count() < 6) {
                    $score = fake()->numberBetween(9,18);
                    CharacterStatistic::factory()->create([
                        'character_id' => $character->id,
                        'ability' => $stat,
                        'score' => $score,
                        'modifier' => floor(($score - 10) / 2),
                        'proficient' => in_array($stat, $character->archetype->saves()),
                    ]);
                }                
            }
        }
    }
}
