<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spell extends Model
{
    /** @use HasFactory<\Database\Factories\SpellFactory> */
    use HasFactory;
    public $timestamps = false;

    public function character() {
        return $this->belongsToMany(Character::class);
    }
}
