<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Background>
 */
class BackgroundFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->jobTitle(),
            'description' => fake()->text(),
            'ability_score_increases' => "Strength, Dexterity, Constitution, Wisdom, Intelligence, Charisma",
            'skill_proficiencies' => "Acrobatics, Athletics, Sleight of Hand, Stealth, Arcana, History, Investigation, Nature, Religion, Animal Handling, Insight, Medicine, Perception, Survival, Deception, Intimidation, Performance, Persuasion",
            'tool_proficiencies' => "Alchemist's Supplies, Brewer's Supplies, Calligrapher's Tools, Carpenter's Tools, Cartographer's Tools, Cobbler's Tools, Cook's Utensils, Glassblower's Tools, Jeweler's Tools, Leatherworker's Tools, Mason's Tools, Painter's Supplies, Potter's Tools, Smith's Tools, Tinker's Tools, Weaver's Tools, Woodcarver's Tools, Disguise Kit, Forgery Kit, Gaming Set, Herbalism Kit, Musical Intrument, Navigator's Tools, Poisoner's Kit, Theives' Tools",
            'starting_equipment' => "150GP, OR 12 Daggers, 1GP, OR 63GP, 1PP",
        ];
    }
}
