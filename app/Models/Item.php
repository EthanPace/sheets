<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    /** @use HasFactory<\Database\Factories\ItemFactory> */
    use HasFactory;
    public $timestamps = false;

    public function equippable() {
        return $this->morphMany(Inventory::class, 'equippable');
    }
}
