<?php

use App\Models\Character;
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
        Schema::create('character_spellslot', function (Blueprint $table) {
            $table->id();
            
            $table->foreignIdFor(Character::class);
            
            $table->integer('level_one');
            $table->integer('level_two');
            $table->integer('level_three');
            $table->integer('level_four');
            $table->integer('level_five');
            $table->integer('level_six');
            $table->integer('level_seven');
            $table->integer('level_eight');
            $table->integer('level_nine');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('character_spellslot');
    }
};
