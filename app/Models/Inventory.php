<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    /** @use HasFactory<\Database\Factories\InventoryFactory> */
    use HasFactory;
    public $timestamps = false;

    public $fillable = [
        'character_id',
        'equippable_id',
        'equippable_type',
    ];

    public function character() {
        return $this->belongsTo(Character::class);
    }

    public function equippable() {
        return $this->morphTo();
    }

    public function type() {
        return class_basename($this->equippable_type);
    }
}
