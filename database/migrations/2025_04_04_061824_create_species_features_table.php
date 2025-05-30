<?php

use App\Models\Species;
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
        Schema::create('species_features', function (Blueprint $table) {
            $table->id();
            
            $table->foreignIdFor(Species::class)->constrained()->onDelete('cascade');
            
            $table->string('name');
            $table->text('description');
            $table->string('type')->default("FEATURE");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('species_features');
    }
};
