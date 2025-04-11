<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArchetypeFeature extends Model
{
    /** @use HasFactory<\Database\Factories\ArchetypeFeatureFactory> */
    use HasFactory;
    public $timestamps = false;

    public function archetype() {
        return $this->belongsTo(Archetype::class);
    }
}
