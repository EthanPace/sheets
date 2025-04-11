<?php

namespace Database\Seeders;

use App\Models\Species;
use App\Models\SpeciesFeature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpeciesFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Triton
        //
        $species = Species::where('name', "Triton")->first();
        SpeciesFeature::factory()->create([
            'species_id' => $species->id,
            'name' => "Amphibious",
            'description' => "You can breathe air and water.",
        ]);
        SpeciesFeature::factory()->create([
            'species_id' => $species->id,
            'name' => "Control Air and Water",
            'description' => "You can cast Fog Cloud with this trait. Starting at 3rd level, you can cast the Gust of Wind spell with this trait. Starting at 5th level, you can also cast the Water Walk spell with it. 
Once you cast any of these spells with this trait, you can’t cast that spell with it again until you finish a long rest. You can also cast these spells using any spell slots you have of the appropriate level.
Intelligence, Wisdom, or Charisma is your spellcasting ability for these spells when you cast them with this trait (choose when you select this race).",
        ]);
        SpeciesFeature::factory()->create([
            'species_id' => $species->id,
            'name' => "Darkvision",
            'description' => "You can see in dim light within 60 feet of you as if it were bright light and in darkness as if it were dim light. You discern colors in that darkness only as shades of gray.",
        ]);
        SpeciesFeature::factory()->create([
            'species_id' => $species->id,
            'name' => "Emissary of the Sea",
            'description' => "You can communicate simple ideas to any Beast, Elemental, or Monstrosity that has a swimming speed. It can understand your words, though you have no special ability to understand it in return.",
        ]);
        SpeciesFeature::factory()->create([
            'species_id' => $species->id,
            'name' => "Guardian of the Depths",
            'description' => "Adapted to the frigid ocean depths, you have resistance to cold damage.",
        ]);
        //
        // Harengon
        //
        $species = Species::where('name', "Harengon")->first();
        SpeciesFeature::factory()->create([
            'species_id' => $species->id,
            'name' => "Hare-Trigger",
            'description' => "You can add your proficiency bonus to your initiative rolls.",
        ]);
        SpeciesFeature::factory()->create([
            'species_id' => $species->id,
            'name' => "Lucky Footwork",
            'description' => "When you fail a Dexterity saving throw, you can use your reaction to roll a d4 and add it to the save, potentially turning the failure into a success. You can't use this reaction if you're prone or your speed is 0.",
        ]);
        SpeciesFeature::factory()->create([
            'species_id' => $species->id,
            'name' => "Rabbit Hop",
            'description' => "As a bonus action, you can jump a number of feet equal to five times your proficiency bonus, without provoking opportunity attacks. You can use this trait only if your speed is greater than 0. You can use it a number of times equal to your proficiency bonus, and you regain all expended uses when you finish a long rest.",
        ]);
        //
        // some random ones per species
        //
        foreach (Species::whereNot('name', "Triton")->whereNot('name', "Harengon")->get() as $species) {
            SpeciesFeature::factory(3)->create(['species_id' => $species->id]);
        }
    }
}
