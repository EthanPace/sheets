<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Adventuring Gear - Combat Items
        Item::factory()->create([
            'name' => 'Acid',
            'description' => 'When you take the Attack action, you can replace one of your attacks with throwing a vial of Acid. Target one creature or object you can see within 20 feet of yourself. The target must succeed on a Dexterity saving throw (DC 8 plus your Dexterity modifier and Proficiency Bonus) or take 2d6 Acid damage.',
            'type' => 'Adventuring Gear',
            'weight' => 1,
            'cost' => 2500,
            'properties' => 'Throwable'
        ]);

        Item::factory()->create([
            'name' => 'Alchemist\'s Fire',
            'description' => 'When you take the Attack action, you can replace one of your attacks with throwing a flask of Alchemist\'s Fire. Target one creature or object you can see within 20 feet of yourself. The target must succeed on a Dexterity saving throw (DC 8 plus your Dexterity modifier and Proficiency Bonus) or take 1d4 Fire damage and start burning.',
            'type' => 'Adventuring Gear',
            'weight' => 1,
            'cost' => 5000,
            'properties' => 'Throwable'
        ]);

        Item::factory()->create([
            'name' => 'Ball Bearings',
            'description' => 'As a Utilize action, you can spill Ball Bearings from their pouch. They spread to cover a level, 10-foot-square area within 10 feet of yourself. A creature that enters this area for the first time on a turn must succeed on a DC 10 Dexterity saving throw or have the Prone condition.',
            'type' => 'Adventuring Gear',
            'weight' => 2,
            'cost' => 100,
            'properties' => 'Utility'
        ]);

        Item::factory()->create([
            'name' => 'Caltrops',
            'description' => 'As a Utilize action, you can spread Caltrops from their bag to cover a 5-foot-square area within 5 feet of yourself. A creature that enters this area for the first time on a turn must succeed on a DC 15 Dexterity saving throw or take 1 Piercing damage and have its Speed reduced to 0 until the start of its next turn.',
            'type' => 'Adventuring Gear',
            'weight' => 2,
            'cost' => 100,
            'properties' => 'Trap'
        ]);

        Item::factory()->create([
            'name' => 'Holy Water',
            'description' => 'When you take the Attack action, you can replace one of your attacks with throwing a flask of Holy Water. Target one creature you can see within 20 feet of yourself. The target must succeed on a Dexterity saving throw (DC 8 plus your Dexterity modifier and Proficiency Bonus) or take 2d8 Radiant damage if it is a Fiend or an Undead.',
            'type' => 'Adventuring Gear',
            'weight' => 1,
            'cost' => 2500,
            'properties' => 'Throwable'
        ]);

        Item::factory()->create([
            'name' => 'Hunting Trap',
            'description' => 'As a Utilize action, you can set a Hunting Trap, which is a sawtooth steel ring that snaps shut when a creature steps on a pressure plate in the center. A creature that steps on the plate must succeed on a DC 13 Dexterity saving throw or take 1d4 Piercing damage and have its Speed reduced to 0.',
            'type' => 'Adventuring Gear',
            'weight' => 25,
            'cost' => 500,
            'properties' => 'Trap'
        ]);

        Item::factory()->create([
            'name' => 'Net',
            'description' => 'When you take the Attack action, you can replace one of your attacks with throwing a Net. Target a creature you can see within 15 feet of yourself. The target must succeed on a Dexterity saving throw (DC 8 plus your Dexterity modifier and Proficiency Bonus) or have the Restrained condition until it escapes.',
            'type' => 'Adventuring Gear',
            'weight' => 3,
            'cost' => 100,
            'properties' => 'Throwable'
        ]);

        Item::factory()->create([
            'name' => 'Oil',
            'description' => 'You can douse a creature, object, or space with Oil or use it as fuel. When thrown at a target within 20 feet, if the target takes Fire damage before the oil dries (after 1 minute), the target takes an extra 5 Fire damage from burning oil.',
            'type' => 'Adventuring Gear',
            'weight' => 1,
            'cost' => 10,
            'properties' => 'Fuel, Throwable'
        ]);

        Item::factory()->create([
            'name' => 'Poison, Basic',
            'description' => 'As a Bonus Action, you can use a vial of Basic Poison to coat one weapon or up to three pieces of ammunition. A creature that takes Piercing or Slashing damage from the poisoned weapon or ammunition takes an extra 1d4 Poison damage.',
            'type' => 'Adventuring Gear',
            'weight' => 0,
            'cost' => 10000,
            'properties' => 'Coating'
        ]);

        // Adventuring Gear - Utility Items
        Item::factory()->create([
            'name' => 'Antitoxin',
            'description' => 'As a Bonus Action, you can drink a vial of Antitoxin to gain Advantage on saving throws to avoid or end the Poisoned condition for 1 hour.',
            'type' => 'Adventuring Gear',
            'weight' => 0,
            'cost' => 5000,
            'properties' => 'Consumable'
        ]);

        Item::factory()->create([
            'name' => 'Backpack',
            'description' => 'A Backpack holds up to 30 pounds within 1 cubic foot. It can also serve as a saddlebag.',
            'type' => 'Container',
            'weight' => 5,
            'cost' => 200,
            'properties' => 'Container'
        ]);

        Item::factory()->create([
            'name' => 'Barrel',
            'description' => 'A Barrel holds up to 40 gallons of liquid or up to 4 cubic feet of dry goods.',
            'type' => 'Container',
            'weight' => 70,
            'cost' => 200,
            'properties' => 'Container'
        ]);

        Item::factory()->create([
            'name' => 'Basket',
            'description' => 'A Basket holds up to 40 pounds within 2 cubic feet.',
            'type' => 'Container',
            'weight' => 2,
            'cost' => 40,
            'properties' => 'Container'
        ]);

        Item::factory()->create([
            'name' => 'Bedroll',
            'description' => 'A Bedroll sleeps one Small or Medium creature. While in a Bedroll, you automatically succeed on saving throws against extreme cold.',
            'type' => 'Adventuring Gear',
            'weight' => 7,
            'cost' => 100,
            'properties' => 'Rest'
        ]);

        Item::factory()->create([
            'name' => 'Bell',
            'description' => 'When rung as a Utilize action, a Bell produces a sound that can be heard up to 60 feet away.',
            'type' => 'Adventuring Gear',
            'weight' => 0,
            'cost' => 100,
            'properties' => 'Sound'
        ]);

        Item::factory()->create([
            'name' => 'Blanket',
            'description' => 'While wrapped in a blanket, you have Advantage on saving throws against extreme cold.',
            'type' => 'Adventuring Gear',
            'weight' => 3,
            'cost' => 50,
            'properties' => 'Comfort'
        ]);

        Item::factory()->create([
            'name' => 'Block and Tackle',
            'description' => 'A Block and Tackle allows you to hoist up to four times the weight you can normally lift.',
            'type' => 'Adventuring Gear',
            'weight' => 5,
            'cost' => 100,
            'properties' => 'Utility'
        ]);

        Item::factory()->create([
            'name' => 'Book',
            'description' => 'A Book contains fiction or nonfiction. If you consult an accurate nonfiction Book about its topic, you gain a +5 bonus to Intelligence checks you make about that topic.',
            'type' => 'Adventuring Gear',
            'weight' => 5,
            'cost' => 2500,
            'properties' => 'Knowledge'
        ]);

        Item::factory()->create([
            'name' => 'Bottle, Glass',
            'description' => 'A Glass Bottle holds up to 1 1/2 pints.',
            'type' => 'Container',
            'weight' => 2,
            'cost' => 200,
            'properties' => 'Container'
        ]);

        Item::factory()->create([
            'name' => 'Bucket',
            'description' => 'A Bucket holds up to half a cubic foot of contents.',
            'type' => 'Container',
            'weight' => 2,
            'cost' => 5,
            'properties' => 'Container'
        ]);

        Item::factory()->create([
            'name' => 'Candle',
            'description' => 'For 1 hour, a lit Candle sheds Bright Light in a 5-foot radius and Dim Light for an additional 5 feet.',
            'type' => 'Light Source',
            'weight' => 0,
            'cost' => 1,
            'properties' => 'Light'
        ]);

        Item::factory()->create([
            'name' => 'Case, Crossbow Bolt',
            'description' => 'A Crossbow Bolt Case holds up to 20 Bolts.',
            'type' => 'Container',
            'weight' => 1,
            'cost' => 100,
            'properties' => 'Container'
        ]);

        Item::factory()->create([
            'name' => 'Case, Map or Scroll',
            'description' => 'A Map or Scroll Case holds up to 10 sheets of paper or 5 sheets of parchment.',
            'type' => 'Container',
            'weight' => 1,
            'cost' => 100,
            'properties' => 'Container'
        ]);

        Item::factory()->create([
            'name' => 'Chain',
            'description' => 'As a Utilize action, you can wrap a Chain around an unwilling creature within 5 feet of yourself that has the Grappled, Incapacitated, or Restrained condition. If the creature\'s legs are bound, the creature has the Restrained condition until it escapes.',
            'type' => 'Adventuring Gear',
            'weight' => 10,
            'cost' => 500,
            'properties' => 'Restraint'
        ]);

        Item::factory()->create([
            'name' => 'Chest',
            'description' => 'A Chest holds up to 12 cubic feet of contents.',
            'type' => 'Container',
            'weight' => 25,
            'cost' => 500,
            'properties' => 'Container'
        ]);

        Item::factory()->create([
            'name' => 'Climber\'s Kit',
            'description' => 'A Climber\'s Kit includes boot tips, gloves, pitons, and a harness. As a Utilize action, you can use the Climber\'s Kit to anchor yourself; when you do, you can\'t fall more than 25 feet from the anchor point.',
            'type' => 'Adventuring Gear',
            'weight' => 12,
            'cost' => 2500,
            'properties' => 'Climbing'
        ]);

        Item::factory()->create([
            'name' => 'Clothes, Fine',
            'description' => 'Fine Clothes are made of expensive fabrics and adorned with expertly crafted details. Some events and locations admit only people wearing these clothes.',
            'type' => 'Clothing',
            'weight' => 6,
            'cost' => 1500,
            'properties' => 'Social'
        ]);

        Item::factory()->create([
            'name' => 'Clothes, Traveler\'s',
            'description' => 'Traveler\'s Clothes are resilient garments designed for travel in various environments.',
            'type' => 'Clothing',
            'weight' => 4,
            'cost' => 200,
            'properties' => 'Clothing'
        ]);

        Item::factory()->create([
            'name' => 'Component Pouch',
            'description' => 'A Component Pouch is watertight and filled with compartments that hold all the free Material components of your spells.',
            'type' => 'Spellcasting Focus',
            'weight' => 2,
            'cost' => 2500,
            'properties' => 'Spellcasting'
        ]);

        Item::factory()->create([
            'name' => 'Costume',
            'description' => 'While wearing a Costume, you have Advantage on any ability check you make to impersonate the person or type of person it represents.',
            'type' => 'Clothing',
            'weight' => 4,
            'cost' => 500,
            'properties' => 'Disguise'
        ]);

        Item::factory()->create([
            'name' => 'Crowbar',
            'description' => 'Using a Crowbar gives you Advantage on Strength checks where the Crowbar\'s leverage can be applied.',
            'type' => 'Adventuring Gear',
            'weight' => 5,
            'cost' => 200,
            'properties' => 'Tool'
        ]);

        Item::factory()->create([
            'name' => 'Flask',
            'description' => 'A Flask holds up to 1 pint.',
            'type' => 'Container',
            'weight' => 1,
            'cost' => 2,
            'properties' => 'Container'
        ]);

        Item::factory()->create([
            'name' => 'Grappling Hook',
            'description' => 'As a Utilize action, you can throw the Grappling Hook at a railing, a ledge, or another catch within 50 feet of yourself, and the hook catches on if you succeed on a DC 13 Dexterity (Acrobatics) check.',
            'type' => 'Adventuring Gear',
            'weight' => 4,
            'cost' => 200,
            'properties' => 'Climbing'
        ]);

        Item::factory()->create([
            'name' => 'Healer\'s Kit',
            'description' => 'A Healer\'s Kit has ten uses. As a Utilize action, you can expend one of its uses to stabilize an Unconscious creature that has 0 Hit Points without needing to make a Wisdom (Medicine) check.',
            'type' => 'Adventuring Gear',
            'weight' => 3,
            'cost' => 500,
            'properties' => 'Healing'
        ]);

        Item::factory()->create([
            'name' => 'Ink',
            'description' => 'Ink comes in a 1-ounce bottle, which provides enough ink to write about 500 pages.',
            'type' => 'Adventuring Gear',
            'weight' => 0,
            'cost' => 1000,
            'properties' => 'Writing'
        ]);

        Item::factory()->create([
            'name' => 'Ink Pen',
            'description' => 'Using Ink, an Ink Pen is used to write or draw.',
            'type' => 'Adventuring Gear',
            'weight' => 0,
            'cost' => 2,
            'properties' => 'Writing'
        ]);

        Item::factory()->create([
            'name' => 'Jug',
            'description' => 'A Jug holds up to 1 gallon.',
            'type' => 'Container',
            'weight' => 4,
            'cost' => 2,
            'properties' => 'Container'
        ]);

        Item::factory()->create([
            'name' => 'Ladder',
            'description' => 'A Ladder is 10 feet tall. You must climb to move up or down it.',
            'type' => 'Adventuring Gear',
            'weight' => 25,
            'cost' => 10,
            'properties' => 'Climbing'
        ]);

        Item::factory()->create([
            'name' => 'Lamp',
            'description' => 'A Lamp burns Oil as fuel to cast Bright Light in a 15 foot radius and Dim Light for an additional 30 feet.',
            'type' => 'Light Source',
            'weight' => 1,
            'cost' => 50,
            'properties' => 'Light'
        ]);

        Item::factory()->create([
            'name' => 'Lantern, Bullseye',
            'description' => 'A Bullseye Lantern burns Oil as fuel to cast Bright Light in a 60-foot Cone and Dim Light for an additional 60 feet.',
            'type' => 'Light Source',
            'weight' => 2,
            'cost' => 1000,
            'properties' => 'Light'
        ]);

        Item::factory()->create([
            'name' => 'Lantern, Hooded',
            'description' => 'A Hooded Lantern burns Oil as fuel to cast Bright Light in a 30-foot radius and Dim Light for an additional 30 feet. As a Bonus Action, you can lower the hood, reducing the light to Dim Light in a 5-foot radius.',
            'type' => 'Light Source',
            'weight' => 2,
            'cost' => 500,
            'properties' => 'Light'
        ]);

        Item::factory()->create([
            'name' => 'Lock',
            'description' => 'A Lock comes with a key. Without the key, a creature can use Thieves\' Tools to pick this Lock with a successful DC 15 Dexterity (Sleight of Hand) check.',
            'type' => 'Adventuring Gear',
            'weight' => 1,
            'cost' => 1000,
            'properties' => 'Security'
        ]);

        Item::factory()->create([
            'name' => 'Magnifying Glass',
            'description' => 'A Magnifying Glass grants Advantage on any ability check made to appraise or inspect a highly detailed item. Lighting a fire with a Magnifying Glass requires light as bright as sunlight to focus, tinder to ignite, and about 5 minutes.',
            'type' => 'Adventuring Gear',
            'weight' => 0,
            'cost' => 10000,
            'properties' => 'Investigation'
        ]);

        Item::factory()->create([
            'name' => 'Manacles',
            'description' => 'As a Utilize action, you can use Manacles to bind an unwilling Small or Medium creature within 5 feet of yourself that has the Grappled, Incapacitated, or Restrained condition if you succeed on a DC 13 Dexterity (Sleight of Hand) check.',
            'type' => 'Adventuring Gear',
            'weight' => 6,
            'cost' => 200,
            'properties' => 'Restraint'
        ]);

        Item::factory()->create([
            'name' => 'Map',
            'description' => 'If you consult an accurate Map, you gain a +5 bonus to Wisdom (Survival) checks you make to find your way in the place represented on it.',
            'type' => 'Adventuring Gear',
            'weight' => 0,
            'cost' => 100,
            'properties' => 'Navigation'
        ]);

        Item::factory()->create([
            'name' => 'Mirror',
            'description' => 'A handheld steel Mirror is useful for personal cosmetics but also for peeking around corners and reflecting light as a signal.',
            'type' => 'Adventuring Gear',
            'weight' => 0,
            'cost' => 500,
            'properties' => 'Utility'
        ]);

        Item::factory()->create([
            'name' => 'Paper',
            'description' => 'One sheet of Paper can hold about 250 handwritten words.',
            'type' => 'Adventuring Gear',
            'weight' => 0,
            'cost' => 20,
            'properties' => 'Writing'
        ]);

        Item::factory()->create([
            'name' => 'Parchment',
            'description' => 'One sheet of Parchment can hold about 250 handwritten words.',
            'type' => 'Adventuring Gear',
            'weight' => 0,
            'cost' => 10,
            'properties' => 'Writing'
        ]);

        Item::factory()->create([
            'name' => 'Perfume',
            'description' => 'Perfume comes in a 4-ounce vial. For 1 hour after applying Perfume to yourself, you have Advantage on Charisma (Persuasion) checks made to influence an Indifferent Humanoid within 5 feet of yourself.',
            'type' => 'Adventuring Gear',
            'weight' => 0,
            'cost' => 500,
            'properties' => 'Social'
        ]);

        Item::factory()->create([
            'name' => 'Pole',
            'description' => 'A Pole is 10 feet long. You can use it to touch something up to 10 feet away. If you must make a Strength (Athletics) check as part of a High or Long Jump, you can use the Pole to vault, giving yourself Advantage on the check.',
            'type' => 'Adventuring Gear',
            'weight' => 7,
            'cost' => 5,
            'properties' => 'Utility'
        ]);

        Item::factory()->create([
            'name' => 'Pot, Iron',
            'description' => 'An Iron Pot holds up to 1 gallon.',
            'type' => 'Container',
            'weight' => 10,
            'cost' => 200,
            'properties' => 'Container, Cooking'
        ]);

        Item::factory()->create([
            'name' => 'Potion of Healing',
            'description' => 'This potion is a magic item. As a Bonus Action, you can drink it or administer it to another creature within 5 feet of yourself. The creature that drinks the magical red fluid in this vial regains 2d4 + 2 Hit Points.',
            'type' => 'Magic Item',
            'weight' => 0,
            'cost' => 5000,
            'properties' => 'Healing, Magic'
        ]);

        Item::factory()->create([
            'name' => 'Pouch',
            'description' => 'A Pouch holds up to 6 pounds within one-fifth of a cubic foot.',
            'type' => 'Container',
            'weight' => 1,
            'cost' => 50,
            'properties' => 'Container'
        ]);

        Item::factory()->create([
            'name' => 'Quiver',
            'description' => 'A Quiver holds up to 20 Arrows.',
            'type' => 'Container',
            'weight' => 1,
            'cost' => 100,
            'properties' => 'Container'
        ]);

        Item::factory()->create([
            'name' => 'Ram, Portable',
            'description' => 'You can use a Portable Ram to break down doors. When doing so, you gain a +4 bonus to the Strength check. One other character can help you use the ram, giving you Advantage on this check.',
            'type' => 'Adventuring Gear',
            'weight' => 35,
            'cost' => 400,
            'properties' => 'Tool'
        ]);

        Item::factory()->create([
            'name' => 'Rations',
            'description' => 'Rations consist of travel-ready food, including jerky, dried fruit, hardtack, and nuts.',
            'type' => 'Food',
            'weight' => 2,
            'cost' => 50,
            'properties' => 'Food'
        ]);

        Item::factory()->create([
            'name' => 'Robe',
            'description' => 'A Robe has vocational or ceremonial significance. Some events and locations admit only people wearing a Robe bearing certain colors or symbols.',
            'type' => 'Clothing',
            'weight' => 4,
            'cost' => 100,
            'properties' => 'Clothing'
        ]);

        Item::factory()->create([
            'name' => 'Rope',
            'description' => 'As a Utilize action, you can tie a knot with Rope if you succeed on a DC 10 Dexterity (Sleight of Hand) check. You can bind an unwilling creature with the Rope only if the creature has the Grappled, Incapacitated, or Restrained condition.',
            'type' => 'Adventuring Gear',
            'weight' => 5,
            'cost' => 100,
            'properties' => 'Utility'
        ]);

        Item::factory()->create([
            'name' => 'Sack',
            'description' => 'A Sack holds up to 30 pounds within 1 cubic foot.',
            'type' => 'Container',
            'weight' => 0,
            'cost' => 1,
            'properties' => 'Container'
        ]);

        Item::factory()->create([
            'name' => 'Shovel',
            'description' => 'Working for 1 hour, you can use a Shovel to dig a hole that is 5 feet on each side in soil or similar material.',
            'type' => 'Adventuring Gear',
            'weight' => 5,
            'cost' => 200,
            'properties' => 'Tool'
        ]);

        Item::factory()->create([
            'name' => 'Signal Whistle',
            'description' => 'When blown as a Utilize action, a Signal Whistle produces a sound that can be heard up to 600 feet away.',
            'type' => 'Adventuring Gear',
            'weight' => 0,
            'cost' => 5,
            'properties' => 'Sound'
        ]);

        Item::factory()->create([
            'name' => 'Spikes, Iron',
            'description' => 'Iron Spikes come in bundles of ten. As a Utilize action, you can use a blunt object, such as a Light Hammer, to hammer a spike into wood, earth, or a similar material.',
            'type' => 'Adventuring Gear',
            'weight' => 5,
            'cost' => 100,
            'properties' => 'Tool'
        ]);

        Item::factory()->create([
            'name' => 'Spyglass',
            'description' => 'Objects viewed through a Spyglass are magnified to twice their size.',
            'type' => 'Adventuring Gear',
            'weight' => 1,
            'cost' => 100000,
            'properties' => 'Investigation'
        ]);

        Item::factory()->create([
            'name' => 'String',
            'description' => 'String is 10 feet long. You can tie a knot in it as a Utilize action.',
            'type' => 'Adventuring Gear',
            'weight' => 0,
            'cost' => 10,
            'properties' => 'Utility'
        ]);

        Item::factory()->create([
            'name' => 'Tent',
            'description' => 'A Tent sleeps up to two Small or Medium creatures.',
            'type' => 'Adventuring Gear',
            'weight' => 20,
            'cost' => 200,
            'properties' => 'Shelter'
        ]);

        Item::factory()->create([
            'name' => 'Tinderbox',
            'description' => 'A Tinderbox is a small container holding flint, fire steel, and tinder used to kindle a fire. Using it to light a Candle, Lamp, Lantern, or Torch takes a Bonus Action. Lighting any other fire takes 1 minute.',
            'type' => 'Adventuring Gear',
            'weight' => 1,
            'cost' => 50,
            'properties' => 'Fire'
        ]);

        Item::factory()->create([
            'name' => 'Torch',
            'description' => 'A Torch burns for 1 hour, casting Bright Light in a 20-foot radius and Dim Light for an additional 20 feet. When you take the Attack action, you can attack with the Torch, dealing 1 Fire damage on a hit.',
            'type' => 'Light Source',
            'weight' => 1,
            'cost' => 1,
            'properties' => 'Light, Weapon'
        ]);

        Item::factory()->create([
            'name' => 'Vial',
            'description' => 'A Vial holds up to 4 ounces.',
            'type' => 'Container',
            'weight' => 0,
            'cost' => 100,
            'properties' => 'Container'
        ]);

        Item::factory()->create([
            'name' => 'Waterskin',
            'description' => 'A Waterskin holds up to 4 pints.',
            'type' => 'Container',
            'weight' => 5,
            'cost' => 20,
            'properties' => 'Container'
        ]);

        // Equipment Packs
        Item::factory()->create([
            'name' => 'Burglar\'s Pack',
            'description' => 'A Burglar\'s Pack contains the following items: Backpack, Ball Bearings, Bell, 10 Candles, Crowbar, Hooded Lantern, 7 flasks of Oil, 5 days of Rations, Rope, Tinderbox, and Waterskin.',
            'type' => 'Equipment Pack',
            'weight' => 42,
            'cost' => 1600,
            'properties' => 'Pack'
        ]);

        Item::factory()->create([
            'name' => 'Diplomat\'s Pack',
            'description' => 'A Diplomat\'s Pack contains the following items: Chest, Fine Clothes, Ink, 5 Ink Pens, Lamp, 2 Map or Scroll Cases, 4 flasks of Oil, 5 sheets of Paper, 5 sheets of Parchment, Perfume, and Tinderbox.',
            'type' => 'Equipment Pack',
            'weight' => 39,
            'cost' => 3900,
            'properties' => 'Pack'
        ]);

        Item::factory()->create([
            'name' => 'Dungeoneer\'s Pack',
            'description' => 'A Dungeoneer\'s Pack contains the following items: Backpack, Caltrops, Crowbar, 2 flasks of Oil, 10 days of Rations, Rope, Tinderbox, 10 Torches, and Waterskin.',
            'type' => 'Equipment Pack',
            'weight' => 55,
            'cost' => 1200,
            'properties' => 'Pack'
        ]);

        Item::factory()->create([
            'name' => 'Entertainer\'s Pack',
            'description' => 'An Entertainer\'s Pack contains the following items: Backpack, Bedroll, Bell, Bullseye Lantern, 3 Costumes, Mirror, 8 flasks of Oil, 9 days of Rations, Tinderbox, and Waterskin.',
            'type' => 'Equipment Pack',
            'weight' => 58,
            'cost' => 4000,
            'properties' => 'Pack'
        ]);

        Item::factory()->create([
            'name' => 'Explorer\'s Pack',
            'description' => 'An Explorer\'s Pack contains the following items: Backpack, Bedroll, 2 flasks of Oil, 10 days of Rations, Rope, Tinderbox, 10 Torches, and Waterskin.',
            'type' => 'Equipment Pack',
            'weight' => 55,
            'cost' => 1000,
            'properties' => 'Pack'
        ]);

        Item::factory()->create([
            'name' => 'Priest\'s Pack',
            'description' => 'A Priest\'s Pack contains the following items: Backpack, Blanket, Holy Water, Lamp, 7 days of Rations, Robe, and Tinderbox.',
            'type' => 'Equipment Pack',
            'weight' => 29,
            'cost' => 3300,
            'properties' => 'Pack'
        ]);

        Item::factory()->create([
            'name' => 'Scholar\'s Pack',
            'description' => 'A Scholar\'s Pack contains the following items: Backpack, Book, Ink, Ink Pen, Lamp, 10 flasks of Oil, 10 sheets of Parchment, and Tinderbox.',
            'type' => 'Equipment Pack',
            'weight' => 22,
            'cost' => 4000,
            'properties' => 'Pack'
        ]);

        // Ammunition
        Item::factory()->create([
            'name' => 'Arrows',
            'description' => 'Arrows are used with bows. This bundle contains 20 arrows.',
            'type' => 'Ammunition',
            'weight' => 1,
            'cost' => 100,
            'properties' => 'Ammunition'
        ]);

        Item::factory()->create([
            'name' => 'Bolts',
            'description' => 'Bolts are used with crossbows. This bundle contains 20 bolts.',
            'type' => 'Ammunition',
            'weight' => 1,
            'cost' => 100,
            'properties' => 'Ammunition'
        ]);

        Item::factory()->create([
            'name' => 'Bullets, Firearm',
            'description' => 'Firearm bullets are used with muskets and pistols. This pouch contains 10 bullets.',
            'type' => 'Ammunition',
            'weight' => 2,
            'cost' => 300,
            'properties' => 'Ammunition'
        ]);

        Item::factory()->create([
            'name' => 'Bullets, Sling',
            'description' => 'Sling bullets are used with slings. This pouch contains 20 bullets.',
            'type' => 'Ammunition',
            'weight' => 1,
            'cost' => 4,
            'properties' => 'Ammunition'
        ]);

        Item::factory()->create([
            'name' => 'Needles',
            'description' => 'Needles are used with blowguns. This pouch contains 50 needles.',
            'type' => 'Ammunition',
            'weight' => 1,
            'cost' => 100,
            'properties' => 'Ammunition'
        ]);

        // Spellcasting Focuses
        Item::factory()->create([
            'name' => 'Arcane Focus - Crystal',
            'description' => 'A crystal arcane focus is bejeweled or carved to channel arcane magic. A Sorcerer, Warlock, or Wizard can use such an item as a Spellcasting Focus.',
            'type' => 'Spellcasting Focus',
            'weight' => 1,
            'cost' => 1000,
            'properties' => 'Spellcasting'
        ]);

        Item::factory()->create([
            'name' => 'Arcane Focus - Orb',
            'description' => 'An orb arcane focus is bejeweled or carved to channel arcane magic. A Sorcerer, Warlock, or Wizard can use such an item as a Spellcasting Focus.',
            'type' => 'Spellcasting Focus',
            'weight' => 3,
            'cost' => 2000,
            'properties' => 'Spellcasting'
        ]);

        Item::factory()->create([
            'name' => 'Arcane Focus - Rod',
            'description' => 'A rod arcane focus is bejeweled or carved to channel arcane magic. A Sorcerer, Warlock, or Wizard can use such an item as a Spellcasting Focus.',
            'type' => 'Spellcasting Focus',
            'weight' => 2,
            'cost' => 1000,
            'properties' => 'Spellcasting'
        ]);

        Item::factory()->create([
            'name' => 'Arcane Focus - Staff',
            'description' => 'A staff arcane focus is bejeweled or carved to channel arcane magic and also functions as a Quarterstaff. A Sorcerer, Warlock, or Wizard can use such an item as a Spellcasting Focus.',
            'type' => 'Spellcasting Focus',
            'weight' => 4,
            'cost' => 500,
            'properties' => 'Spellcasting, Weapon'
        ]);

        Item::factory()->create([
            'name' => 'Arcane Focus - Wand',
            'description' => 'A wand arcane focus is bejeweled or carved to channel arcane magic. A Sorcerer, Warlock, or Wizard can use such an item as a Spellcasting Focus.',
            'type' => 'Spellcasting Focus',
            'weight' => 1,
            'cost' => 1000,
            'properties' => 'Spellcasting'
        ]);

        Item::factory()->create([
            'name' => 'Druidic Focus - Sprig of Mistletoe',
            'description' => 'A sprig of mistletoe druidic focus is carved, tied with ribbon, or painted to channel primal magic. A Druid or Ranger can use such an object as a Spellcasting Focus.',
            'type' => 'Spellcasting Focus',
            'weight' => 0,
            'cost' => 100,
            'properties' => 'Spellcasting'
        ]);

        Item::factory()->create([
            'name' => 'Druidic Focus - Wooden Staff',
            'description' => 'A wooden staff druidic focus is carved, tied with ribbon, or painted to channel primal magic and also functions as a Quarterstaff. A Druid or Ranger can use such an object as a Spellcasting Focus.',
            'type' => 'Spellcasting Focus',
            'weight' => 4,
            'cost' => 500,
            'properties' => 'Spellcasting, Weapon'
        ]);

        Item::factory()->create([
            'name' => 'Druidic Focus - Yew Wand',
            'description' => 'A yew wand druidic focus is carved, tied with ribbon, or painted to channel primal magic. A Druid or Ranger can use such an object as a Spellcasting Focus.',
            'type' => 'Spellcasting Focus',
            'weight' => 1,
            'cost' => 1000,
            'properties' => 'Spellcasting'
        ]);

        Item::factory()->create([
            'name' => 'Holy Symbol - Amulet',
            'description' => 'A holy symbol amulet is bejeweled or painted to channel divine magic and can be worn or held. A Cleric or Paladin can use a Holy Symbol as a Spellcasting Focus.',
            'type' => 'Spellcasting Focus',
            'weight' => 1,
            'cost' => 500,
            'properties' => 'Spellcasting'
        ]);

        Item::factory()->create([
            'name' => 'Holy Symbol - Emblem',
            'description' => 'A holy symbol emblem is bejeweled or painted to channel divine magic and can be borne on fabric or a Shield. A Cleric or Paladin can use a Holy Symbol as a Spellcasting Focus.',
            'type' => 'Spellcasting Focus',
            'weight' => 0,
            'cost' => 500,
            'properties' => 'Spellcasting'
        ]);

        Item::factory()->create([
            'name' => 'Holy Symbol - Reliquary',
            'description' => 'A holy symbol reliquary is bejeweled or painted to channel divine magic and must be held. A Cleric or Paladin can use a Holy Symbol as a Spellcasting Focus.',
            'type' => 'Spellcasting Focus',
            'weight' => 2,
            'cost' => 500,
            'properties' => 'Spellcasting'
        ]);

        // Magic Items
        Item::factory()->create([
            'name' => 'Spell Scroll (Cantrip)',
            'description' => 'A Spell Scroll (Cantrip) is a magic item that bears the words of a cantrip. If the spell is on your class\'s spell list, you can read the scroll and cast the spell using its normal casting time and without providing any Material components.',
            'type' => 'Magic Item',
            'weight' => 0,
            'cost' => 3000,
            'properties' => 'Magic, Consumable'
        ]);

        Item::factory()->create([
            'name' => 'Spell Scroll (Level 1)',
            'description' => 'A Spell Scroll (Level 1) is a magic item that bears the words of a level 1 spell. If the spell is on your class\'s spell list, you can read the scroll and cast the spell using its normal casting time and without providing any Material components.',
            'type' => 'Magic Item',
            'weight' => 0,
            'cost' => 5000,
            'properties' => 'Magic, Consumable'
        ]);

        // Food and Drink
        Item::factory()->create([
            'name' => 'Ale (mug)',
            'description' => 'A mug of common ale, the typical drink of common folk.',
            'type' => 'Food and Drink',
            'weight' => 0,
            'cost' => 4,
            'properties' => 'Drink'
        ]);

        Item::factory()->create([
            'name' => 'Bread (loaf)',
            'description' => 'A loaf of bread, a staple food.',
            'type' => 'Food and Drink',
            'weight' => 0,
            'cost' => 2,
            'properties' => 'Food'
        ]);

        Item::factory()->create([
            'name' => 'Cheese (wedge)',
            'description' => 'A wedge of cheese, good for travel provisions.',
            'type' => 'Food and Drink',
            'weight' => 0,
            'cost' => 10,
            'properties' => 'Food'
        ]);

        Item::factory()->create([
            'name' => 'Wine (bottle) - Common',
            'description' => 'A bottle of common wine.',
            'type' => 'Food and Drink',
            'weight' => 0,
            'cost' => 20,
            'properties' => 'Drink'
        ]);

        Item::factory()->create([
            'name' => 'Wine (bottle) - Fine',
            'description' => 'A bottle of fine wine from a good vintage.',
            'type' => 'Food and Drink',
            'weight' => 0,
            'cost' => 1000,
            'properties' => 'Drink'
        ]);
    }
}