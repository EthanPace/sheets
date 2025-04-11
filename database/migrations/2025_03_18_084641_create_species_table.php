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
        Schema::create('species', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->enum('creature_type', ['Humanoid', 'Non-Humanoid']);
            $table->enum('size', ['small', 'medium', 'large']);
            $table->integer('speed');
            $table->integer('darkvision');
            $table->text('description');
            $table->string('lifespan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('species');
    }
};
