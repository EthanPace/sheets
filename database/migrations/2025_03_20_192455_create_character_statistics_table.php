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
        Schema::create('character_statistic', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Character::class)->constrained()->onDelete('cascade');

            $table->enum('ability', ['STRENGTH','DEXTERITY','CONSTITUTION','WISDOM','INTELLIGENCE','CHARISMA']);
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
        Schema::dropIfExists('statistics');
    }
};
