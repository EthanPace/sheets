<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    /** @use HasFactory<\Database\Factories\CharacterFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'level',
        'experience',
        'max_hit_points',
        'current_hit_points',
        'armor_class',
        'speed',
        'proficiency_bonus',
        'inspiration',
        'background_id',
        'species_id',
        'archetype_id',
        'user_id',
        'archetype_proficiencies'
    ];

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

    public function spells() {
        return $this->belongsToMany(Spell::class);
    }

    public function inventory() {
        return $this->hasMany(Inventory::class);
    }

    public function actions() {
        return $this->hasMany(Action::class);
    }

    public function spellslots() {
        return $this->hasOne(CharacterSpellslots::class);
    }

    public function slots_per_level(): array {
        $slots = $this->spellslots;

        return [
            $slots->level_one,
            $slots->level_two,
            $slots->level_three,
            $slots->level_four,
            $slots->level_five,
            $slots->level_six,
            $slots->level_seven,
            $slots->level_eight,
            $slots->level_nine
        ];
    }

    public function expend_slot(int $level): void {
        $l_word = ['','level_one','level_two','level_three','level_four','level_five','level_six','level_seven','level_eight','level_nine'];

        $this->spellslots->update([
            $l_word[$level] => ($this->slots_per_level()[$level - 1] - 1),
        ]);
    }

    public function reset_slots() : void {
        $slots = $this->archetype->spellslots->slots_at_level($this->level);

        if (count($slots) < 9) { $slots = array_merge($slots,[0,0,0,0,0]); }

        $this->spellslots->update([
            'level_one' => $slots[0],
            'level_two' => $slots[1],
            'level_three' => $slots[2],
            'level_four' => $slots[3],
            'level_five' => $slots[4],
            'level_six' => $slots[5],
            'level_seven' => $slots[6],
            'level_eight' => $slots[7],
            'level_nine' => $slots[8],
        ]);
    }

    public function longrest(): void {
        if ($this->archetype->spellcaster != "NONE") { $this->reset_slots(); }
        $this->update(['current_hit_points' => $this->max_hit_points]);
    }

    public function arch_skills() : array {
        return explode(', ', $this->archetype_proficiencies);
    }

    public function stat(String $stat) : int {
        return $this->statistics->where('ability',$stat)->firstOrFail()->score;
    }
}