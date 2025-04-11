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
        Schema::create('archetype_features', function (Blueprint $table) {
            $table->id();
            
            $table->foreignIdFor(Archetype::class);

            $table->integer('level');
            $table->string('name');
            $table->text('description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('archetype_features');
    }
};
