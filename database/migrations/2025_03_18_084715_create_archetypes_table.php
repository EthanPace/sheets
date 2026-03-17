<?php

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
        Schema::create('archetypes', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('hit_die');
            $table->string('primary_ability');
            $table->string('saving_throws');
            $table->string('skill_proficiencies');
            $table->string('armor_training');
            $table->string('weapon_training');
            $table->string('tool_proficiencies')->nullable();
            $table->string('starter_gear');

            $table->integer('num_skills')->unsigned()->default(2);

            $table->enum('spellcaster', ['FULL','HALF','PACT','NONE']);
            $table->enum('spell_list', ['SPELLBOOK','FULL','OTHER','NONE']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('archetypes');
    }
};
