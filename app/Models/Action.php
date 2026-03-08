<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    /** @use HasFactory<\Database\Factories\ActionFactory> */
    use HasFactory;
    public $timestamps = false;

    public $fillable = [
        'character_id',
        'statistic_id',
        'name',
        'damage',
        'type',
    ];

    public function character() {
        return $this->belongsTo(Character::class);
    }

    public function statistic() {
        return $this->belongsTo(Statistic::class);
    }
}
