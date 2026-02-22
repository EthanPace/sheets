<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    /** @use HasFactory<\Database\Factories\NoteFactory> */
    use HasFactory;
    public $guarded = [];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function short() {
        return substr($this->title,0,10) . "-";
    }

    public function preview() {
        return substr($this->text,0,100) . "-";
    }
}
