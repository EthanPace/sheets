<?php

namespace Database\Factories;

use App\Models\Archetype;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ArchetypeFeature>
 */
class ArchetypeFeatureFactory extends Factory
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
            
            'level' => fake()->numberBetween(1,20),
            'name' => fake()->word(),
            'description' => fake()->text(),
        ];
    }
}
