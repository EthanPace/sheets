<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proficiency extends Model
{
    /** @use HasFactory<\Database\Factories\ProficiencyFactory> */
    use HasFactory;
    public $timestamps = false;

    public function character() {
        return $this->belongsTo(Character::class);
    }

    public function skill() {
        return $this->hasOne(Skill::class);
    }
}
