<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    /** @use HasFactory<\Database\Factories\InventoryFactory> */
    use HasFactory;

    public function items() {
        return $this->morphedByMany(Item::class, 'equippable');
    }

    public function weapons() {
        return $this->morphedByMany(Weapon::class, 'equippable');
    }

    public function armor() {
        return $this->morphedByMany(Armor::class, 'equippable');
    }
    
    public function tools() {
        return $this->morphedByMany(Tools::class, 'equippable');
    }
}
