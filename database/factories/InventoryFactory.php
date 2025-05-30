<?php

namespace Database\Factories;

use App\Models\Armor;
use App\Models\Character;
use App\Models\Item;
use App\Models\Tools;
use App\Models\Weapon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inventory>
 */
class InventoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $equippableTypes = [
            Item::class,
            Weapon::class,
            Armor::class,
            Tools::class,
        ];

        $equippableType = $this->faker->randomElement($equippableTypes);
        $equippable = $equippableType::inRandomOrder()->first();

        return [
            'character_id' => Character::factory(),
            'equippable_id' => $equippable->id,
            'equippable_type' => $equippableType,
        ];
    }
}
