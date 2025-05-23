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
        Schema::create('armors', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('description')->nullable();
            $table->string('category'); // Light, Heavy, Shield
            $table->string('armor_class'); // AC in plain language
            $table->integer('base_ac')->nullable();
            $table->boolean('dex_modifier')->default(false);
            $table->integer('max_dex_bonus')->nullable();
            $table->integer('strength_requirement')->nullable();
            $table->boolean('stealth_disadvantage')->default(false);
            $table->integer('weight');
            $table->integer('cost');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('armors');
    }
};
