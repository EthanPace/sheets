<?php

namespace Database\Factories;

use App\Models\Archetype;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Spellslots>
 */
class SpellslotsFactory extends Factory
{
    private function strum() {
        return str(fake()->numberBetween(0,5));
    }

    private function slotsperlevel() {
        return $this->strum() . ", " . $this->strum() . ", " . $this->strum() . ", " . $this->strum() . ", " . $this->strum() . ", " . $this->strum() . ", " . $this->strum() . ", " . $this->strum() . ", " . $this->strum() . ", ";
    }
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'archetype_id' => Archetype::inRandomOrder()->first()->id,
            'slots_at_level_one' =>       $this->slotsperlevel(),
            'slots_at_level_two' =>       $this->slotsperlevel(),
            'slots_at_level_three' =>     $this->slotsperlevel(),
            'slots_at_level_four' =>      $this->slotsperlevel(),
            'slots_at_level_five' =>      $this->slotsperlevel(),
            'slots_at_level_six' =>       $this->slotsperlevel(),
            'slots_at_level_seven' =>     $this->slotsperlevel(),
            'slots_at_level_eight' =>     $this->slotsperlevel(),
            'slots_at_level_nine' =>      $this->slotsperlevel(),
            'slots_at_level_ten' =>       $this->slotsperlevel(),
            'slots_at_level_eleven' =>    $this->slotsperlevel(),
            'slots_at_level_twelve' =>    $this->slotsperlevel(),
            'slots_at_level_thirteen' =>  $this->slotsperlevel(),
            'slots_at_level_fourteen' =>  $this->slotsperlevel(),
            'slots_at_level_fifteen' =>   $this->slotsperlevel(),
            'slots_at_level_sixteen' =>   $this->slotsperlevel(),
            'slots_at_level_seventeen' => $this->slotsperlevel(),
            'slots_at_level_eighteen' =>  $this->slotsperlevel(),
            'slots_at_level_nineteen' =>  $this->slotsperlevel(),
            'slots_at_level_twenty' =>    $this->slotsperlevel(),
        ];
    }
}
