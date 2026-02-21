<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Models\Skill;
use App\Models\Statistic;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Skill::factory()->create([
            'name' => "Athletics",
            'statistic_id' => Statistic::where('name',"Strength")->first()->id,
        ]);

        Skill::factory()->create([
            'name' => "Acrobatics",
            'statistic_id' => Statistic::where('name',"Dexterity")->first()->id,
        ]);

        Skill::factory()->create([
            'name' => "Sleight Of Hand",
            'statistic_id' => Statistic::where('name',"Dexterity")->first()->id,
        ]);

        Skill::factory()->create([
            'name' => "Stealth",
            'statistic_id' => Statistic::where('name',"Dexterity")->first()->id,
        ]);

        Skill::factory()->create([
            'name' => "Arcana",
            'statistic_id' => Statistic::where('name',"Intelligence")->first()->id,
        ]);

        Skill::factory()->create([
            'name' => "History",
            'statistic_id' => Statistic::where('name',"Intelligence")->first()->id,
        ]);

        Skill::factory()->create([
            'name' => "Investigation",
            'statistic_id' => Statistic::where('name',"Intelligence")->first()->id,
        ]);

        Skill::factory()->create([
            'name' => "Nature",
            'statistic_id' => Statistic::where('name',"Intelligence")->first()->id,
        ]);

        Skill::factory()->create([
            'name' => "Religion",
            'statistic_id' => Statistic::where('name',"Intelligence")->first()->id,
        ]);

        Skill::factory()->create([
            'name' => "Animal Handling",
            'statistic_id' => Statistic::where('name',"Wisdom")->first()->id,
        ]);

        Skill::factory()->create([
            'name' => "Insight",
            'statistic_id' => Statistic::where('name',"Wisdom")->first()->id,
        ]);

        Skill::factory()->create([
            'name' => "Medicine",
            'statistic_id' => Statistic::where('name',"Wisdom")->first()->id,
        ]);

        Skill::factory()->create([
            'name' => "Perception",
            'statistic_id' => Statistic::where('name',"Wisdom")->first()->id,
        ]);

        Skill::factory()->create([
            'name' => "Survival",
            'statistic_id' => Statistic::where('name',"Wisdom")->first()->id,
        ]);

        Skill::factory()->create([
            'name' => "Deception",
            'statistic_id' => Statistic::where('name',"Charisma")->first()->id,
        ]);

        Skill::factory()->create([
            'name' => "Intimidation",
            'statistic_id' => Statistic::where('name',"Charisma")->first()->id,
        ]);

        Skill::factory()->create([
            'name' => "Performance",
            'statistic_id' => Statistic::where('name',"Charisma")->first()->id,
        ]);

        Skill::factory()->create([
            'name' => "Persuasion",
            'statistic_id' => Statistic::where('name',"Charisma")->first()->id,
        ]);
    }
}
