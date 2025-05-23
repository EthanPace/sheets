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
        Schema::create('weapons', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('description')->nullable();
            $table->string('category'); // Simple, Martial
            $table->string('type'); // Melee, Ranged
            $table->integer('damage_die');
            $table->integer('damage_die_number');
            $table->string('damage_type');
            $table->json('properties')->nullable();
            $table->string('mastery');
            $table->integer('weight');
            $table->integer('cost');
            $table->string('range')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weapons');
    }
};
