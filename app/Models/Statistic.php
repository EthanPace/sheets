<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    /** @use HasFactory<\Database\Factories\StatisticFactory> */
    use HasFactory;
    public $timestamps = false;

    public function short() : string {
        return strtoupper(substr($this->name,0,3));
    }
}
