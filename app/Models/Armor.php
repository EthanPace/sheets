<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Armor extends Model
{
    /** @use HasFactory<\Database\Factories\ArmorFactory> */
    use HasFactory;
    public $timestamps = false;

    public function equippable() {
        return $this->morphMany(Inventory::class, 'equippable');
    }

    public function price() : string {
        if (($this->cost / 100) >= 1) {
            return $this->cost / 100 . " GP";
        } elseif (($this->cost / 10) >= 1) {
            return $this->cost / 10 . " SP";
        } else {
            return $this->cost . " CP";
        }
    }
}
