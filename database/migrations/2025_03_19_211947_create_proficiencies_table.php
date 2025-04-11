<?php

use App\Models\Character;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Skill;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('proficiencies', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Character::class);
            $table->foreignIdFor(Skill::class);
            $table->boolean('mastery')->default('false');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proficiencies');
    }
};
