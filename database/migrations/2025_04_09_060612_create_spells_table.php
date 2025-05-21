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
        Schema::create('spells', function (Blueprint $table) {
            $table->id();

            $table->string('name')->unique();
            $table->text('description');
            $table->text('higher_levels');

            $table->boolean('verbal');
            $table->boolean('somatic');
            $table->string('material')->nullable();

            $table->string('range');
            $table->string('casting_time');
            $table->string('duration');
            
            $table->integer('level');
            $table->string('school');
            $table->string('spell_lists');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spells');
    }
};
