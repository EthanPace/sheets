<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Models\CharacterStatistic;
use App\Models\Statistic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CharacterStatisticSeeder extends Seeder
{
    private function make(Statistic $stat, int $score, Character $character) {
        CharacterStatistic::factory()->create([
            'character_id' => $character->id,
            'statistic_id' => $stat->id,
            'score' => $score,
            'modifier' => floor(($score - 10) / 2),
            'proficient' => in_array($stat->name, $character->archetype->saves()),
        ]);
    }
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //BEN'S CHAR
        $character = Character::firstWhere('id', 1);
        $stat = Statistic::firstWhere('name',"Strength");
        $score = 17;
        $this->make($stat, $score, $character);
        $stat = Statistic::firstWhere('name',"Dexterity");
        $score = 15;
        $this->make($stat, $score, $character);
        $stat = Statistic::firstWhere('name',"Constitution");
        $score = 16;
        $this->make($stat, $score, $character);
        $stat = Statistic::firstWhere('name',"Wisdom");
        $score = 15;
        $this->make($stat, $score, $character);
        $stat = Statistic::firstWhere('name',"Intelligence");
        $score = 17;
        $this->make($stat, $score, $character);
        $stat = Statistic::firstWhere('name',"Charisma");
        $score = 16;
        $this->make($stat, $score, $character);
        
        //AADYN'S CHAR
        $character = Character::firstWhere('id', 2);
        $stat = Statistic::firstWhere('name',"Strength");
        $score = 18;
        $this->make($stat, $score, $character);
        $stat = Statistic::firstWhere('name',"Dexterity");
        $score = 17;
        $this->make($stat, $score, $character);
        $stat = Statistic::firstWhere('name',"Constitution");
        $score = 16;
        $this->make($stat, $score, $character);
        $stat = Statistic::firstWhere('name',"Wisdom");
        $score = 12;
        $this->make($stat, $score, $character);
        $stat = Statistic::firstWhere('name',"Intelligence");
        $score = 11;
        $this->make($stat, $score, $character);
        $stat = Statistic::firstWhere('name',"Charisma");
        $score = 9;
        $this->make($stat, $score, $character);

        foreach (Character::all() as $character) {
            foreach (Statistic::all() as $stat) {
                if (CharacterStatistic::where('character_id', $character->id)->count() < 6) {
                    $score = fake()->numberBetween(9,18);
                    CharacterStatistic::factory()->create([
                        'character_id' => $character->id,
                        'statistic_id' => $stat->id,
                        'score' => $score,
                        'modifier' => floor(($score - 10) / 2),
                        'proficient' => in_array($stat->name, $character->archetype->saves()),
                    ]);
                }                
            }
        }
    }
}
