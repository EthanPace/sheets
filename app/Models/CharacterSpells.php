<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class CharacterSpells extends Pivot
{
    use HasFactory;
    public $timestamps = false;

    public function character() {
        return $this->belongsTo(Character::class);
    }

    public function spell() {
        return $this->belongsTo(Spell::class);
    }
}
