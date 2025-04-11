<?php

//use App\Models\Subclass;

use App\Models\Archetype;
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
        Schema::create('archetype_character', function (Blueprint $table) {
            $table->id();
            
            $table->foreignIdFor(Character::class);
            $table->foreignIdFor(Archetype::class);
            
            $table->integer('level')->default(1);
            //$table->foreignIdFor(Subclass::class);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('archetype_character');
    }
};
