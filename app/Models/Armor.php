<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Armor extends Model
{
    /** @use HasFactory<\Database\Factories\ArmorFactory> */
    use HasFactory;

    public function equippable() {
        return $this->morphMany(Inventory::class, 'equippable');
    }
}
