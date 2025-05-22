<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    private function prof(Character $character, string $skill): bool {
        if (in_array($skill, $character->arch_skills()) or in_array($skill, $character->background->skills())) {
            return true;
        } else {
            return false;
        }
    }
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (Character::all() as $character) {
            Skill::factory()->create([
                'character_id' => $character->id,
                'name' => "ATHLETICS",
                'ability' => "STRENGTH",
                'proficient' => $this->prof($character, "ATHLETICS"),
                'modifier' => $character->statistics->where('ability', "STRENGTH")->first()->modifier,
            ]);

            Skill::factory()->create([
                'character_id' => $character->id,
                'name' => "ACROBATICS",
                'ability' => "DEXTERITY",
                'proficient' => $this->prof($character, "ACROBATICS"),
                'modifier' => $character->statistics->where('ability', "DEXTERITY")->first()->modifier,
            ]);

            Skill::factory()->create([
                'character_id' => $character->id,
                'name' => "SLEIGHT OF HAND",
                'ability' => "DEXTERITY",
                'proficient' => $this->prof($character, "SLEIGHT OF HAND"),
                'modifier' => $character->statistics->where('ability', "DEXTERITY")->first()->modifier,
            ]);

            Skill::factory()->create([
                'character_id' => $character->id,
                'name' => "STEALTH",
                'ability' => "DEXTERITY",
                'proficient' => $this->prof($character, "STEALTH"),
                'modifier' => $character->statistics->where('ability', "DEXTERITY")->first()->modifier,
            ]);

            Skill::factory()->create([
                'character_id' => $character->id,
                'name' => "ARCANA",
                'ability' => "INTELLIGENCE",
                'proficient' => $this->prof($character, "ARCANA"),
                'modifier' => $character->statistics->where('ability', "INTELLIGENCE")->first()->modifier,
            ]);

            Skill::factory()->create([
                'character_id' => $character->id,
                'name' => "HISTORY",
                'ability' => "INTELLIGENCE",
                'proficient' => $this->prof($character, "HISTORY"),
                'modifier' => $character->statistics->where('ability', "INTELLIGENCE")->first()->modifier,
            ]);

            Skill::factory()->create([
                'character_id' => $character->id,
                'name' => "INVESTIGATION",
                'ability' => "INTELLIGENCE",
                'proficient' => $this->prof($character, "INVESTIGATION"),
                'modifier' => $character->statistics->where('ability', "INTELLIGENCE")->first()->modifier,
            ]);

            Skill::factory()->create([
                'character_id' => $character->id,
                'name' => "NATURE",
                'ability' => "INTELLIGENCE",
                'proficient' => $this->prof($character, "NATURE"),
                'modifier' => $character->statistics->where('ability', "INTELLIGENCE")->first()->modifier,
            ]);

            Skill::factory()->create([
                'character_id' => $character->id,
                'name' => "RELIGION",
                'ability' => "INTELLIGENCE",
                'proficient' => $this->prof($character, "RELIGION"),
                'modifier' => $character->statistics->where('ability', "INTELLIGENCE")->first()->modifier,
            ]);

            Skill::factory()->create([
                'character_id' => $character->id,
                'name' => "ANIMAL HANDLING",
                'ability' => "WISDOM",
                'proficient' => $this->prof($character, "ANIMAL HANDLING"),
                'modifier' => $character->statistics->where('ability', "WISDOM")->first()->modifier,
            ]);

            Skill::factory()->create([
                'character_id' => $character->id,
                'name' => "INSIGHT",
                'ability' => "WISDOM",
                'proficient' => $this->prof($character, "INSIGHT"),
                'modifier' => $character->statistics->where('ability', "WISDOM")->first()->modifier,
            ]);

            Skill::factory()->create([
                'character_id' => $character->id,
                'name' => "MEDICINE",
                'ability' => "WISDOM",
                'proficient' => $this->prof($character, "MEDICINE"),
                'modifier' => $character->statistics->where('ability', "WISDOM")->first()->modifier,
            ]);

            Skill::factory()->create([
                'character_id' => $character->id,
                'name' => "PERCEPTION",
                'ability' => "WISDOM",
                'proficient' => $this->prof($character, "PERCEPTION"),
                'modifier' => $character->statistics->where('ability', "WISDOM")->first()->modifier,
            ]);

            Skill::factory()->create([
                'character_id' => $character->id,
                'name' => "SURVIVAL",
                'ability' => "WISDOM",
                'proficient' => $this->prof($character, "SURVIVAL"),
                'modifier' => $character->statistics->where('ability', "WISDOM")->first()->modifier,
            ]);

            Skill::factory()->create([
                'character_id' => $character->id,
                'name' => "DECEPTION",
                'ability' => "CHARISMA",
                'proficient' => $this->prof($character, "DECEPTION"),
                'modifier' => $character->statistics->where('ability', "STRENGTH")->first()->modifier,
            ]);

            Skill::factory()->create([
                'character_id' => $character->id,
                'name' => "INTIMIDATION",
                'ability' => "CHARISMA",
                'proficient' => $this->prof($character, "INTIMIDATION"),
                'modifier' => $character->statistics->where('ability', "CHARISMA")->first()->modifier,
            ]);

            Skill::factory()->create([
                'character_id' => $character->id,
                'name' => "PERFORMANCE",
                'ability' => "CHARISMA",
                'proficient' => $this->prof($character, "PERFORMANCE"),
                'modifier' => $character->statistics->where('ability', "CHARISMA")->first()->modifier,
            ]);

            Skill::factory()->create([
                'character_id' => $character->id,
                'name' => "PERSUASION",
                'ability' => "CHARISMA",
                'proficient' => $this->prof($character, "PERSUASION"),
                'modifier' => $character->statistics->where('ability', "CHARISMA")->first()->modifier,
            ]);
        }
    }
}
