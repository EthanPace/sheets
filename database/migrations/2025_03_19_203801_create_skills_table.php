<?php

use App\Models\Character;
use App\Models\Statistic;
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
        Schema::create('skills', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Character::class)->constrained()->onDelete('cascade');

            $table->enum('name', ['ATHLETICS','ACROBATICS','SLEIGHT OF HAND','STEALTH','ARCANA','HISTORY','INVESTIGATION','NATURE','RELIGION','ANIMAL HANDLING','INSIGHT','MEDICINE','PERCEPTION','SURVIVAL','DECEPTION','INTIMIDATION','PERFORMANCE','PERSUASION']);
            $table->enum('ability', ['STRENGTH', 'DEXTERITY', 'CONSTITUTION', 'WISDOM', 'INTELLIGENCE', 'CHARISMA']);

            $table->boolean('proficient');
            $table->boolean('mastery');
            $table->integer('modifier');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skills');
    }
};
