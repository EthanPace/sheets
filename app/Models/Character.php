<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    /** @use HasFactory<\Database\Factories\CharacterFactory> */
    use HasFactory;
    public $guarded = [];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function species() {
        return $this->belongsTo(Species::class);
    }

    public function archetype() {
        return $this->belongsTo(Archetype::class);
    }

    public function skills() {
        return $this->hasMany(Skill::class);
    }

    public function background() {
        return $this->belongsTo(Background::class);
    }

    public function statistics() {
        return $this->hasMany(CharacterStatistic::class);
    }
}