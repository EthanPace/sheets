<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Note>
 */
class NoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,

            'title' => strtoupper(fake()->word()),
            'theme' => fake()->randomElement(["rose","yellow","indigo","gray","cyan","lime","purple","orange","pink"]),
            'text' => fake()->text(),
            
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
