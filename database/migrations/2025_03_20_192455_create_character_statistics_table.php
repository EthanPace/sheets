<?php

use App\Models\Character;
use App\Models\Statistic;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('character_statistic', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Character::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(Statistic::class)->constrained()->onDelete('cascade');

            $table->integer('score');
            $table->integer('modifier');
            $table->boolean('proficient');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('character_statistic');
    }
};
