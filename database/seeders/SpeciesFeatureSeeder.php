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
        // Dragonborn
        //
        $dragonborn = Species::firstWhere('name', "Dragonborn");
        SpeciesFeature::factory()->create([
            'species_id' => $dragonborn->id,
            'name' => "Draconic Ancestry",
            'description' => "Your lineage stems from a dragon progenitor. Choose the kind of dragon from the Draconic Ancestors table. Your choice affects your Breath Weapon and Damage Resistance traits as well as your appearance.",
        ]);
        SpeciesFeature::factory()->create([
            'species_id' => $dragonborn->id,
            'name' => "Breath Weapon",
            'description' => "When you take the Attack action on your turn, you can replace one of your attacks with an exhalation of magical energy in either a 15-foot Cone or a 30-foot Line that is 5 feet wide (choose the shape each time). Each creature in that area must make a Dexterity saving throw (DC 8 plus your Constitution modifier and Proficiency Bonus). On a failed save, a creature takes 1d10 damage of the type determined by your Draconic Ancestry trait. On a successful save, a creature takes half as much damage. This damage increases by 1d10 when you reach character levels 5 (2d10), 11 (3d10), and 17 (4d10). You can use this Breath Weapon a number of times equal to your Proficiency Bonus, and you regain all expended uses when you finish a Long Rest.",
        ]);
        SpeciesFeature::factory()->create([
            'species_id' => $dragonborn->id,
            'name' => "Damage Resistance",
            'description' => "You have Resistance to the damage type determined by your Draconic Ancestry trait.",
        ]);
        SpeciesFeature::factory()->create([
            'species_id' => $dragonborn->id,
            'name' => "Darkvision",
            'description' => "You have Darkvision with a range of 60 feet.",
        ]);
        SpeciesFeature::factory()->create([
            'species_id' => $dragonborn->id,
            'name' => "Draconic Flight",
            'description' => "When you reach character level 5, you can channel draconic magic to give yourself temporary flight. As a Bonus Action, you sprout spectral wings on your back that last for 10 minutes or until you retract the wings (no action required) or have the Incapacitated condition. During that time, you have a Fly Speed equal to your Speed. Your wings appear to be made of the same energy as your Breath Weapon. Once you use this trait, you can't use it again until you finish a Long Rest.",
        ]);

        //
        // Dwarf
        //
        $dwarf = Species::firstWhere('name', "Dwarf");
        SpeciesFeature::factory()->create([
            'species_id' => $dwarf->id,
            'name' => "Darkvision",
            'description' => "You have Darkvision with a range of 120 feet.",
        ]);
        SpeciesFeature::factory()->create([
            'species_id' => $dwarf->id,
            'name' => "Dwarven Resilience",
            'description' => "You have Resistance to Poison damage. You also have Advantage on saving throws you make to avoid or end the Poisoned condition.",
        ]);
        SpeciesFeature::factory()->create([
            'species_id' => $dwarf->id,
            'name' => "Dwarven Toughness",
            'description' => "Your Hit Point maximum increases by 1, and it increases by 1 again whenever you gain a level.",
        ]);
        SpeciesFeature::factory()->create([
            'species_id' => $dwarf->id,
            'name' => "Stonecunning",
            'description' => "As a Bonus Action, you gain Tremorsense with a range of 60 feet for 10 minutes. You must be on a stone surface or touching a stone surface to use this Tremorsense. The stone can be natural or worked. You can use this Bonus Action a number of times equal to your Proficiency Bonus, and you regain all expended uses when you finish a Long Rest.",
        ]);

        //
        // Elf
        //
        $elf = Species::firstWhere('name', "Elf");
        SpeciesFeature::factory()->create([
            'species_id' => $elf->id,
            'name' => "Darkvision",
            'description' => "You have Darkvision with a range of 60 feet.",
        ]);
        SpeciesFeature::factory()->create([
            'species_id' => $elf->id,
            'name' => "Elven Lineage",
            'description' => "You are part of a lineage that grants you supernatural abilities. Choose a lineage from the Elven Lineages table. You gain the level 1 benefit of that lineage. When you reach character levels 3 and 5, you learn a higher-level spell, as shown on the table. You always have that spell prepared. You can cast it once without a spell slot, and you regain the ability to cast it in that way when you finish a Long Rest. You can also cast the spell using any spell slots you have of the appropriate level. Intelligence, Wisdom, or Charisma is your spellcasting ability for the spells you cast with this trait (choose the ability when you select the lineage).",
        ]);
        SpeciesFeature::factory()->create([
            'species_id' => $elf->id,
            'name' => "Fey Ancestry",
            'description' => "You have Advantage on saving throws you make to avoid or end the Charmed condition.",
        ]);
        SpeciesFeature::factory()->create([
            'species_id' => $elf->id,
            'name' => "Keen Senses",
            'description' => "You have proficiency in the Insight, Perception, or Survival skill.",
        ]);
        SpeciesFeature::factory()->create([
            'species_id' => $elf->id,
            'name' => "Trance",
            'description' => "You don't need to sleep, and magic can't put you to sleep. You can finish a Long Rest in 4 hours if you spend those hours in a trancelike meditation, during which you retain consciousness.",
        ]);

        //
        // Gnome
        //
        $gnome = Species::firstWhere('name', "Gnome");
        SpeciesFeature::factory()->create([
            'species_id' => $gnome->id,
            'name' => "Darkvision",
            'description' => "You have Darkvision with a range of 60 feet.",
        ]);
        SpeciesFeature::factory()->create([
            'species_id' => $gnome->id,
            'name' => "Gnomish Cunning",
            'description' => "You have Advantage on Intelligence, Wisdom, and Charisma saving throws.",
        ]);
        SpeciesFeature::factory()->create([
            'species_id' => $gnome->id,
            'name' => "Gnomish Lineage",
            'description' => "You are part of a lineage that grants you supernatural abilities. Choose one of the following options; whichever one you choose, Intelligence, Wisdom, or Charisma is your spellcasting ability for the spells you cast with this trait (choose the ability when you select the lineage): Forest Gnome or Rock Gnome. Forest Gnome: You know the Minor Illusion cantrip. You also always have the Speak with Animals spell prepared. You can cast it without a spell slot a number of times equal to your Proficiency Bonus, and you regain all expended uses when you finish a Long Rest. You can also use any spell slots you have to cast the spell. Rock Gnome: You know the Mending and Prestidigitation cantrips. In addition, you can spend 10 minutes casting Prestidigitation to create a Tiny clockwork device (AC 5, 1 HP), such as a toy, fire starter, or music box.",
        ]);

        //
        // Goliath
        //
        $goliath = Species::firstWhere('name', "Goliath");
        SpeciesFeature::factory()->create([
            'species_id' => $goliath->id,
            'name' => "Giant Ancestry",
            'description' => "You are descended from Giants. Choose one of the following benefits—a supernatural boon from your ancestry; you can use the chosen benefit a number of times equal to your Proficiency Bonus, and you regain all expended uses when you finish a Long Rest: Cloud's Jaunt, Fire's Burn, Frost's Chill, Hill's Tumble, Stone's Endurance, or Storm's Thunder.",
        ]);
        SpeciesFeature::factory()->create([
            'species_id' => $goliath->id,
            'name' => "Large Form",
            'description' => "Starting at character level 5, you can change your size to Large as a Bonus Action if you're in a big enough space. This transformation lasts for 10 minutes or until you end it (no action required). For that duration, you have Advantage on Strength checks, and your Speed increases by 10 feet. Once you use this trait, you can't use it again until you finish a Long Rest.",
        ]);
        SpeciesFeature::factory()->create([
            'species_id' => $goliath->id,
            'name' => "Powerful Build",
            'description' => "You have Advantage on any ability check you make to end the Grappled condition. You also count as one size larger when determining your carrying capacity.",
        ]);

        //
        // Halfling
        //
        $halfling = Species::firstWhere('name', "Halfling");
        SpeciesFeature::factory()->create([
            'species_id' => $halfling->id,
            'name' => "Brave",
            'description' => "You have Advantage on saving throws you make to avoid or end the Frightened condition.",
        ]);
        SpeciesFeature::factory()->create([
            'species_id' => $halfling->id,
            'name' => "Halfling Nimbleness",
            'description' => "You can move through the space of any creature that is a size larger than you, but you can't stop in the same space.",
        ]);
        SpeciesFeature::factory()->create([
            'species_id' => $halfling->id,
            'name' => "Luck",
            'description' => "When you roll a 1 on the d20 of a D20 Test, you can reroll the die, and you must use the new roll.",
        ]);
        SpeciesFeature::factory()->create([
            'species_id' => $halfling->id,
            'name' => "Naturally Stealthy",
            'description' => "You can take the Hide action even when you are obscured only by a creature that is at least one size larger than you.",
        ]);

        //
        // Human
        //
        $human = Species::firstWhere('name', "Human");
        SpeciesFeature::factory()->create([
            'species_id' => $human->id,
            'name' => "Resourceful",
            'description' => "You gain Heroic Inspiration whenever you finish a Long Rest.",
        ]);
        SpeciesFeature::factory()->create([
            'species_id' => $human->id,
            'name' => "Skillful",
            'description' => "You gain proficiency in one skill of your choice.",
        ]);
        SpeciesFeature::factory()->create([
            'species_id' => $human->id,
            'name' => "Versatile",
            'description' => "You gain an Origin feat of your choice. Skilled is recommended.",
        ]);

        //
        // Orc
        //
        $orc = Species::firstWhere('name', "Orc");
        SpeciesFeature::factory()->create([
            'species_id' => $orc->id,
            'name' => "Adrenaline Rush",
            'description' => "You can take the Dash action as a Bonus Action. When you do so, you gain a number of Temporary Hit Points equal to your Proficiency Bonus. You can use this trait a number of times equal to your Proficiency Bonus, and you regain all expended uses when you finish a Short or Long Rest.",
        ]);
        SpeciesFeature::factory()->create([
            'species_id' => $orc->id,
            'name' => "Darkvision",
            'description' => "You have Darkvision with a range of 120 feet.",
        ]);
        SpeciesFeature::factory()->create([
            'species_id' => $orc->id,
            'name' => "Relentless Endurance",
            'description' => "When you are reduced to 0 Hit Points but not killed outright, you can drop to 1 Hit Point instead. Once you use this trait, you can't do so again until you finish a Long Rest.",
        ]);

        //
        // Tiefling
        //
        $tiefling = Species::firstWhere('name', "Tiefling");
        SpeciesFeature::factory()->create([
            'species_id' => $tiefling->id,
            'name' => "Darkvision",
            'description' => "You have Darkvision with a range of 60 feet.",
        ]);
        SpeciesFeature::factory()->create([
            'species_id' => $tiefling->id,
            'name' => "Fiendish Legacy",
            'description' => "You are the recipient of a legacy that grants you supernatural abilities. Choose a legacy from the Fiendish Legacies table. You gain the level 1 benefit of the chosen legacy. When you reach character levels 3 and 5, you learn a higher-level spell, as shown on the table. You always have that spell prepared. You can cast it once without a spell slot, and you regain the ability to cast it in that way when you finish a Long Rest. You can also cast the spell using any spell slots you have of the appropriate level. Intelligence, Wisdom, or Charisma is your spellcasting ability for the spells you cast with this trait (choose the ability when you select the legacy).",
        ]);
        SpeciesFeature::factory()->create([
            'species_id' => $tiefling->id,
            'name' => "Otherworldly Presence",
            'description' => "You know the Thaumaturgy cantrip. When you cast it with this trait, the spell uses the same spellcasting ability you use for your Fiendish Legacy trait.",
        ]);

        //
        // Triton
        //
        $triton = Species::firstWhere('name', "Triton");
        SpeciesFeature::factory()->create([
            'species_id' => $triton->id,
            'name' => "Amphibious",
            'description' => "You can breathe air and water.",
        ]);
        SpeciesFeature::factory()->create([
            'species_id' => $triton->id,
            'name' => "Control Air and Water",
            'description' => "You can cast Fog Cloud with this trait. Starting at 3rd level, you can cast the Gust of Wind spell with this trait. Starting at 5th level, you can also cast the Water Walk spell with it. 
Once you cast any of these spells with this trait, you can't cast that spell with it again until you finish a long rest. You can also cast these spells using any spell slots you have of the appropriate level.
Intelligence, Wisdom, or Charisma is your spellcasting ability for these spells when you cast them with this trait (choose when you select this race).",
        ]);
        SpeciesFeature::factory()->create([
            'species_id' => $triton->id,
            'name' => "Darkvision",
            'description' => "You can see in dim light within 60 feet of you as if it were bright light and in darkness as if it were dim light. You discern colors in that darkness only as shades of gray.",
        ]);
        SpeciesFeature::factory()->create([
            'species_id' => $triton->id,
            'name' => "Emissary of the Sea",
            'description' => "You can communicate simple ideas to any Beast, Elemental, or Monstrosity that has a swimming speed. It can understand your words, though you have no special ability to understand it in return.",
        ]);
        SpeciesFeature::factory()->create([
            'species_id' => $triton->id,
            'name' => "Guardian of the Depths",
            'description' => "Adapted to the frigid ocean depths, you have resistance to cold damage.",
        ]);

        //
        // Harengon
        //
        $harengon = Species::firstWhere('name', "Harengon");
        SpeciesFeature::factory()->create([
            'species_id' => $harengon->id,
            'name' => "Hare-Trigger",
            'description' => "You can add your proficiency bonus to your initiative rolls.",
        ]);
        SpeciesFeature::factory()->create([
            'species_id' => $harengon->id,
            'name' => "Lucky Footwork",
            'description' => "When you fail a Dexterity saving throw, you can use your reaction to roll a d4 and add it to the save, potentially turning the failure into a success. You can't use this reaction if you're prone or your speed is 0.",
        ]);
        SpeciesFeature::factory()->create([
            'species_id' => $harengon->id,
            'name' => "Rabbit Hop",
            'description' => "As a bonus action, you can jump a number of feet equal to five times your proficiency bonus, without provoking opportunity attacks. You can use this trait only if your speed is greater than 0. You can use it a number of times equal to your proficiency bonus, and you regain all expended uses when you finish a long rest.",
        ]);
    }
}