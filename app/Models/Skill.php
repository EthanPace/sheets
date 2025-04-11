<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    /** @use HasFactory<\Database\Factories\SkillFactory> */
    use HasFactory;

    public $timestamps = false;

    public function character() {
        return $this->belongsTo(Character::class);
    }

    private function sign(int $mod) {
        if ($mod > -1) {
            return "+" . str($mod);
        } else {
            return str($mod);
        }
    }

    public function mod() {
        return $this->sign($this->modifier);
    }

    public function modify(int $num) {
        return $this->sign($this->modifier + $num);
    }
}
