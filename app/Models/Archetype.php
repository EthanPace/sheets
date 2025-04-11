<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archetype extends Model
{
    /** @use HasFactory<\Database\Factories\CharacterClassFactory> */
    use HasFactory;
    public $timestamps = false;

    public function features() {
        return $this->hasMany(ArchetypeFeature::class);
    }

    public function charges() {
        return $this->hasMany(Charges::class);
    }

    public function spellslots() {
        return $this->hasOne(Spellslots::class);
    }

    public function character() {
        return $this->belongsToOne(Character::class);
    }

    public function abilities() {
        return explode(", ", $this->primary_ability);
    }

    public function saves() {
        return explode(", ", $this->saving_throws);
    }

    public function skills() {
        return explode(", ", $this->skill_proficiencies);
    }

    public function armors() {
        return explode(", ", $this->armor_training);
    }

    public function weapons() {
        return explode(", ", $this->weapon_training);
    }

    public function tools() {
        return explode(", ", $this->tool_proficiencies);
    }

    public function equipment_options() {
        return explode(", ", $this->starter_gear);
    }

    public function gear(string $option) {
        return explode(", ", $option);
    }
}
