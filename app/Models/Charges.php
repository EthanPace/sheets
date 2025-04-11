<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Charges extends Model
{
    /** @use HasFactory<\Database\Factories\ChargesFactory> */
    use HasFactory;
    public $timestamps = false;

    public function archetype() {
        return $this->belongsTo(Archetype::class);
    }

    public function at_level(int $level)  {
        switch ($level) {
            case 1:
                return $this->level_one;
            case 2:
                return $this->level_two;
            case 3:
                return $this->level_three;
            case 4:
                return $this->level_four;
            case 5:
                return $this->level_five;
            case 6:
                return $this->level_six;
            case 7:
                return $this->level_seven;
            case 8:
                return $this->level_eight;
            case 9:
                return $this->level_nine;
            case 10:
                return $this->level_ten;
            case 11:
                return $this->level_eleven;
            case 12:
                return $this->level_twelve;
            case 13:
                return $this->level_thirteen;
            case 14:
                return $this->level_fourteen;
            case 15:
                return $this->level_fifteen;
            case 16:
                return $this->level_sixteen;
            case 17:
                return $this->level_seventeen;
            case 18:
                return $this->level_eighteen;
            case 19:
                return $this->level_nineteen;
            case 20:
                return $this->level_twenty;
        }
    }
}
