<?php

use App\Models\Archetype;
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
        Schema::create('charges', function (Blueprint $table) {
            $table->id();
            
            $table->foreignIdFor(Archetype::class);

            $table->string('name');

            $table->integer('level_one');
            $table->integer('level_two');
            $table->integer('level_three');
            $table->integer('level_four');
            $table->integer('level_five');
            $table->integer('level_six');
            $table->integer('level_seven');
            $table->integer('level_eight');
            $table->integer('level_nine');
            $table->integer('level_ten');
            $table->integer('level_eleven');
            $table->integer('level_twelve');
            $table->integer('level_thirteen');
            $table->integer('level_fourteen');
            $table->integer('level_fifteen');
            $table->integer('level_sixteen');
            $table->integer('level_seventeen');
            $table->integer('level_eighteen');
            $table->integer('level_nineteen');
            $table->integer('level_twenty');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('charges');
    }
};
