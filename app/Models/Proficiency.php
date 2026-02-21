<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proficiency extends Model
{
    /** @use HasFactory<\Database\Factories\ProficiencyFactory> */
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['character_id', 'skill_id', 'proficient', 'mastery'];

    public function character() {
        return $this->belongsTo(Character::class);
    }

    public function skill() {
        return $this->belongsTo(Skill::class);
    }

    public function mod() : int {
        $modifier = $this->character->statistics->where('statistic_id', $this->skill->statistic->id)->first()->modifier;

        if ($this->proficient) {
            return $this->character->proficiency_bonus + $modifier;
        } else {
            return $modifier;
        }
    }

    private function sign(int $mod) {
        if ($mod > -1) {
            return "+" . str($mod);
        } else {
            return str($mod);
        }
    }

    public function modsign() {
        return $this->sign($this->mod());
    }

    public function modify(int $num): string {
        $modifier = $this->character->statistics->where('statistic_id', $this->skill->statistic->id)->first()->modifier;
        return $this->sign($modifier + $num);
    }
}
