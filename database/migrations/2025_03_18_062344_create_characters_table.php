<?php

use App\Models\Archetype;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\Species;
use App\Models\Background;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(User::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(Species::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(Background::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(Archetype::class)->constrained()->onDelete('cascade');

            $table->string('name');

            $table->integer('level');
            $table->integer('experience_points');

            $table->integer('armor_class');
            $table->integer('initiative');
            $table->integer('proficiency_bonus');

            $table->boolean('inspiration');

            $table->integer('current_hit_points');
            $table->integer('max_hit_points');
            $table->integer('temporary_hit_points');

            $table->string('archetype_proficiencies');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};
