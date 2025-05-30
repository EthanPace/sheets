<?php

use App\Models\Archetype;
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
        Schema::create('spellslots', function (Blueprint $table) {
            $table->id();
            
            $table->foreignIdFor(Archetype::class)->constrained()->onDelete('cascade');
            
            $table->string('slots_at_level_one');
            $table->string('slots_at_level_two');
            $table->string('slots_at_level_three');
            $table->string('slots_at_level_four');
            $table->string('slots_at_level_five');
            $table->string('slots_at_level_six');
            $table->string('slots_at_level_seven');
            $table->string('slots_at_level_eight');
            $table->string('slots_at_level_nine');
            $table->string('slots_at_level_ten');
            $table->string('slots_at_level_eleven');
            $table->string('slots_at_level_twelve');
            $table->string('slots_at_level_thirteen');
            $table->string('slots_at_level_fourteen');
            $table->string('slots_at_level_fifteen');
            $table->string('slots_at_level_sixteen');
            $table->string('slots_at_level_seventeen');
            $table->string('slots_at_level_eighteen');
            $table->string('slots_at_level_nineteen');
            $table->string('slots_at_level_twenty');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spellslots');
    }
};
