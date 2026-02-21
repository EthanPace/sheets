<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class CharacterStatistic extends Pivot
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'character_statistic';

    public function character() {
        return $this->belongsTo(Character::class);
    }

    public function statistic() {
        return $this->belongsTo(Statistic::class);
    }
    
    public function short() : Attribute {
        return Attribute::make(
            get: fn () => $this->statistic->short()
        );
    }

    public function name() : Attribute {
        return Attribute::make(
            get: fn () => $this->statistic->name,
        );
    }

    private function sign(int $mod) {
        if ($mod > -1) {
            return "+" . str($mod);
        } else {
            return $mod;
        }
    }

    public function mod() : string {
        if ($this->proficient) {
            return $this->sign($this->modifier + $this->character->proficiency_bonus);
        } else {
            return $this->sign($this->modifier);
        }
    }

    public function modify(int $num) {
        return $this->sign($this->modifier + $num);
    }
}
