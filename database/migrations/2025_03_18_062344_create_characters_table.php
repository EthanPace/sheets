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

            $table->boolean('draft')->default(true);

            $table->integer('level')->unsigned()->default(1);
            $table->integer('experience_points')->unsigned()->default(0);
            
            $table->integer('gold')->unsigned()->default(0);
            $table->integer('silver')->unsigned()->default(0);
            $table->integer('copper')->unsigned()->default(0);

            $table->integer('armor_class')->unsigned()->default(11);
            $table->integer('initiative')->unsigned()->default(0);
            $table->integer('proficiency_bonus')->unsigned()->default(2);

            $table->boolean('inspiration')->default(false);

            $table->integer('current_hit_points')->unsigned()->default(0);
            $table->integer('max_hit_points')->unsigned()->default(0);
            $table->integer('temporary_hit_points')->unsigned()->default(0);

            $table->integer('turn_order')->unsigned()->default(0);
            $table->integer('current_roll')->unsigned()->default(0);

            $table->string('archetype_proficiencies')->nullable();

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
