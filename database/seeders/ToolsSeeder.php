<?php

namespace Database\Seeders;

use App\Models\Tools;
use Illuminate\Database\Seeder;

class ToolsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Artisan's Tools
        Tools::factory()->create([
            'name' => "Alchemist's Supplies",
            'description' => 'Tools for brewing potions, identifying substances, and creating alchemical compounds.',
            'category' => "Artisan's Tools",
            'ability' => 'Intelligence',
            'weight' => 8,
            'cost' => 5000,
            'variants' => null,
        ]);

        Tools::factory()->create([
            'name' => "Brewer's Supplies",
            'description' => 'Equipment for brewing alcoholic beverages and detecting poisoned drinks.',
            'category' => "Artisan's Tools",
            'ability' => 'Intelligence',
            'weight' => 9,
            'cost' => 2000,
            'variants' => null,
        ]);

        Tools::factory()->create([
            'name' => "Calligrapher's Supplies",
            'description' => 'Fine writing instruments and materials for creating elegant script and spell scrolls.',
            'category' => "Artisan's Tools",
            'ability' => 'Dexterity',
            'weight' => 5,
            'cost' => 1000,
            'variants' => null,
        ]);

        Tools::factory()->create([
            'name' => "Carpenter's Tools",
            'description' => 'Tools for working with wood, crafting furniture, and creating wooden structures.',
            'category' => "Artisan's Tools",
            'ability' => 'Strength',
            'weight' => 6,
            'cost' => 800,
            'variants' => null,
        ]);

        Tools::factory()->create([
            'name' => "Cartographer's Tools",
            'description' => 'Instruments for creating accurate maps and navigation charts.',
            'category' => "Artisan's Tools",
            'ability' => 'Wisdom',
            'weight' => 6,
            'cost' => 1500,
            'variants' => null,
        ]);

        Tools::factory()->create([
            'name' => "Cobbler's Tools",
            'description' => 'Tools for crafting and repairing footwear and leather goods.',
            'category' => "Artisan's Tools",
            'ability' => 'Dexterity',
            'weight' => 5,
            'cost' => 500,
            'variants' => null,
        ]);

        Tools::factory()->create([
            'name' => "Cook's Utensils",
            'description' => 'Cooking implements for preparing meals and detecting food contamination.',
            'category' => "Artisan's Tools",
            'ability' => 'Wisdom',
            'weight' => 8,
            'cost' => 100,
            'variants' => null,
        ]);

        Tools::factory()->create([
            'name' => "Glassblower's Tools",
            'description' => 'Tools for shaping glass into bottles, lenses, and other glass objects.',
            'category' => "Artisan's Tools",
            'ability' => 'Intelligence',
            'weight' => 5,
            'cost' => 3000,
            'variants' => null,
        ]);

        Tools::factory()->create([
            'name' => "Jeweler's Tools",
            'description' => 'Precision instruments for crafting jewelry and appraising gemstones.',
            'category' => "Artisan's Tools",
            'ability' => 'Intelligence',
            'weight' => 2,
            'cost' => 2500,
            'variants' => null,
        ]);

        Tools::factory()->create([
            'name' => "Leatherworker's Tools",
            'description' => 'Tools for crafting and decorating leather armor, clothing, and accessories.',
            'category' => "Artisan's Tools",
            'ability' => 'Dexterity',
            'weight' => 5,
            'cost' => 500,
            'variants' => null,
        ]);

        Tools::factory()->create([
            'name' => "Mason's Tools",
            'description' => 'Heavy tools for working with stone and constructing masonry.',
            'category' => "Artisan's Tools",
            'ability' => 'Strength',
            'weight' => 8,
            'cost' => 1000,
            'variants' => null,
        ]);

        Tools::factory()->create([
            'name' => "Painter's Supplies",
            'description' => 'Brushes, paints, and canvas for creating artistic works and religious symbols.',
            'category' => "Artisan's Tools",
            'ability' => 'Wisdom',
            'weight' => 5,
            'cost' => 1000,
            'variants' => null,
        ]);

        Tools::factory()->create([
            'name' => "Potter's Tools",
            'description' => 'Tools for shaping clay into pottery and ceramic vessels.',
            'category' => "Artisan's Tools",
            'ability' => 'Intelligence',
            'weight' => 3,
            'cost' => 1000,
            'variants' => null,
        ]);

        Tools::factory()->create([
            'name' => "Smith's Tools",
            'description' => 'Heavy tools for forging metal weapons, armor, and implements.',
            'category' => "Artisan's Tools",
            'ability' => 'Strength',
            'weight' => 8,
            'cost' => 2000,
            'variants' => null,
        ]);

        Tools::factory()->create([
            'name' => "Tinker's Tools",
            'description' => 'Precision tools for crafting mechanical devices and small contraptions.',
            'category' => "Artisan's Tools",
            'ability' => 'Dexterity',
            'weight' => 10,
            'cost' => 5000,
            'variants' => null,
        ]);

        Tools::factory()->create([
            'name' => "Weaver's Tools",
            'description' => 'Tools for spinning thread and weaving cloth into garments and textiles.',
            'category' => "Artisan's Tools",
            'ability' => 'Dexterity',
            'weight' => 5,
            'cost' => 100,
            'variants' => null,
        ]);

        Tools::factory()->create([
            'name' => "Woodcarver's Tools",
            'description' => 'Fine carving tools for creating detailed wooden objects and implements.',
            'category' => "Artisan's Tools",
            'ability' => 'Dexterity',
            'weight' => 5,
            'cost' => 100,
            'variants' => null,
        ]);

        // Other Tools
        Tools::factory()->create([
            'name' => 'Disguise Kit',
            'description' => 'Cosmetics, hair dye, and props for altering appearance and creating costumes.',
            'category' => 'Other Tools',
            'ability' => 'Charisma',
            'weight' => 3,
            'cost' => 2500,
            'variants' => null,
        ]);

        Tools::factory()->create([
            'name' => 'Forgery Kit',
            'description' => 'Specialized tools for creating false documents and duplicating handwriting.',
            'category' => 'Other Tools',
            'ability' => 'Dexterity',
            'weight' => 5,
            'cost' => 1500,
            'variants' => null,
        ]);

        Tools::factory()->create([
            'name' => 'Gaming Set',
            'description' => 'Games of chance and skill for entertainment and detecting cheating.',
            'category' => 'Other Tools',
            'ability' => 'Wisdom',
            'weight' => 0, // Varies by type
            'cost' => 10, // Base cost - 1 SP for dice
            'variants' => 'Dice (1 SP), Dragonchess (1 GP), Playing Cards (5 SP), Three-Dragon Ante (1 GP)',
        ]);

        Tools::factory()->create([
            'name' => 'Herbalism Kit',
            'description' => 'Tools for identifying plants and brewing healing potions from natural ingredients.',
            'category' => 'Other Tools',
            'ability' => 'Intelligence',
            'weight' => 3,
            'cost' => 500,
            'variants' => null,
        ]);

        Tools::factory()->create([
            'name' => 'Musical Instrument',
            'description' => 'Instruments for performing music and entertaining audiences.',
            'category' => 'Other Tools',
            'ability' => 'Charisma',
            'weight' => 0, // Varies by instrument
            'cost' => 200, // Base cost - 1 SP for dice
            'variants' => 'Bagpipes (30 GP, 6 lb.), Drum (6 GP, 3 lb.), Dulcimer (25 GP, 10 lb.), Flute (2 GP, 1 lb.), Horn (3 GP, 2 lb.), Lute (35 GP, 2 lb.), Lyre (30 GP, 2 lb.), Pan Flute (12 GP, 2 lb.), Shawm (2 GP, 1 lb.), Viol (30 GP, 1 lb.)',
        ]);

        Tools::factory()->create([
            'name' => "Navigator's Tools",
            'description' => 'Instruments for navigation, plotting courses, and determining position by stars.',
            'category' => 'Other Tools',
            'ability' => 'Wisdom',
            'weight' => 2,
            'cost' => 2500,
            'variants' => null,
        ]);

        Tools::factory()->create([
            'name' => "Poisoner's Kit",
            'description' => 'Equipment for creating and detecting various poisons and toxins.',
            'category' => 'Other Tools',
            'ability' => 'Intelligence',
            'weight' => 2,
            'cost' => 5000,
            'variants' => null,
        ]);

        Tools::factory()->create([
            'name' => "Thieves' Tools",
            'description' => 'Specialized tools for picking locks, disarming traps, and bypassing security.',
            'category' => 'Other Tools',
            'ability' => 'Dexterity',
            'weight' => 1,
            'cost' => 2500,
            'variants' => null,
        ]);
    }
}