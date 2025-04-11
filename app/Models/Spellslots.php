<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spellslots extends Model
{
    /** @use HasFactory<\Database\Factories\SpellslotsFactory> */
    use HasFactory;
    public $timestamps = false;

    public function archetype() {
        return $this->belongsTo(Archetype::class);
    }

    public function levels() {
        switch ($this->archetype->spellcaster) {
            case "NONE":
                return null;
            case "SINGLE":
                return ["SPELL SLOTS"];
            case "HALF":
                return ["LEVEL 1", "LEVEL 2", "LEVEL 3", "LEVEL 4", "LEVEL 5"];
            case "FULL":
                return ["LEVEL 1", "LEVEL 2", "LEVEL 3", "LEVEL 4", "LEVEL 5", "LEVEL 6", "LEVEL 7", "LEVEL 8", "LEVEL 9"];
        }
    }

    public function slots_at_level(int $level)  {
        switch ($level) {
            case 1:
                return explode(",", $this->slots_at_level_one);
            case 2:
                return explode(",", $this->slots_at_level_two);
            case 3:
                return explode(",", $this->slots_at_level_three);
            case 4:
                return explode(",", $this->slots_at_level_four);
            case 5:
                return explode(",", $this->slots_at_level_five);
            case 6:
                return explode(",", $this->slots_at_level_six);
            case 7:
                return explode(",", $this->slots_at_level_seven);
            case 8:
                return explode(",", $this->slots_at_level_eight);
            case 9:
                return explode(",", $this->slots_at_level_nine);
            case 10:
                return explode(",", $this->slots_at_level_ten);
            case 11:
                return explode(",", $this->slots_at_level_eleven);
            case 12:
                return explode(",", $this->slots_at_level_twelve);
            case 13:
                return explode(",", $this->slots_at_level_thirteen);
            case 14:
                return explode(",", $this->slots_at_level_fourteen);
            case 15:
                return explode(",", $this->slots_at_level_fifteen);
            case 16:
                return explode(",", $this->slots_at_level_sixteen);
            case 17:
                return explode(",", $this->slots_at_level_seventeen);
            case 18:
                return explode(",", $this->slots_at_level_eighteen);
            case 19:
                return explode(",", $this->slots_at_level_nineteen);
            case 20:
                return explode(",", $this->slots_at_level_twenty);
        }
    }
}
