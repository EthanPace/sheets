<?php

namespace Database\Seeders;

use App\Models\Archetype;
use App\Models\Background;
use App\Models\Character;
use App\Models\CharacterClass;
use App\Models\Proficiency;
use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProficiencySeeder extends Seeder
{
    /**
     * Check whether the character should be proficient in this skill
     */
    private function prof(Character $character, string $skill): bool {
        if (in_array($skill, $character->background->skills())) {
            return true;
        } elseif (in_array($skill, $character->archetype->skills()) && $character->id > 4) {
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
        $character = Character::firstWhere('name', "Kluiekkeer");
        foreach (Skill::all() as $skill) {
            Proficiency::factory()->create([
                'character_id' => $character->id,
                'skill_id' => $skill->id,
                'proficient' => ($this->prof($character,$skill->name) || in_array($skill->name,["Intimidation","Religion"])),
            ]);
        }

        $character = Character::firstWhere('name', "Vonik");
        foreach (Skill::all() as $skill) {
            Proficiency::factory()->create([
                'character_id' => $character->id,
                'skill_id' => $skill->id,
                'proficient' => ($this->prof($character,$skill->name) || in_array($skill->name,["Intimidation","Animal Handling"])),
            ]);
        }

        foreach (Character::whereNot('name',"Kluiekkeer")->whereNot('name',"Vonik")->get() as $character) {
            foreach (Skill::all() as $skill) {
                Proficiency::factory()->create([
                    'character_id' => $character->id,
                    'skill_id' => $skill->id,
                    'proficient' => $this->prof($character,$skill->name),
                ]);
            }
        }
    }
}
