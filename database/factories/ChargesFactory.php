<?php

namespace Database\Factories;

use App\Models\Archetype;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Charges>
 */
class ChargesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'archetype_id' => Archetype::inRandomOrder()->first()->id,

            'name' => fake()->word(),

            'level_one' =>          0,
            'level_two' =>          0,
            'level_three' =>        0,
            'level_four' =>         0,
            'level_five' =>         0,
            'level_six' =>          0,
            'level_seven' =>        0,
            'level_eight' =>        0,
            'level_nine' =>         0,
            'level_ten' =>          0,
            'level_eleven' =>       0,
            'level_twelve' =>       0,
            'level_thirteen' =>     0,
            'level_fourteen' =>     0,
            'level_fifteen' =>      0,
            'level_sixteen' =>      0,
            'level_seventeen' =>    0,
            'level_eighteen' =>     0,
            'level_nineteen' =>     0,
            'level_twenty' =>       0,
        ];
    }
}
