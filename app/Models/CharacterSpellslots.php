<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class CharacterSpellslots extends Pivot
{
    use HasFactory;
    public $timestamps = false;

    public function character() {
        return $this->belongsTo(Character::class);
    }
}
