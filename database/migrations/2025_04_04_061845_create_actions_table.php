<?php

use App\Models\Character;
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
        Schema::create('actions', function (Blueprint $table) {
            $table->id();
            
            $table->foreignIdFor(Character::class);
            $table->string('name');
            $table->enum('ability', ['STRENGTH','DEXTERITY','CONSTITUTION','WISDOM','INTELLIGENCE','CHARISMA']);
            $table->string('damage');
            $table->string('type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actions');
    }
};
