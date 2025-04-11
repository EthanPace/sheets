<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class CharacterStatistic extends Pivot
{
    use HasFactory;
    public $timestamps = false;

    public function character() {
        return $this->belongsTo(Character::class);
    }
    
    public function short() {
        return substr($this->ability,0,3);
    }

    private function sign(int $mod) {
        if ($mod > -1) {
            return "+" . str($mod);
        } else {
            return $mod;
        }
    }

    public function mod(int $num = -0) {
        if ($num == -0) {
            $mod = $this->modifier;
            return $this->sign($mod);
        } else {
            return $this->sign($num);
        }
    }

    public function modify(int $num) {
        return $this->sign($this->modifier + $num);
    }
}
