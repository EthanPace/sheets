<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('archetypes', function (Blueprint $table) {
            $table->integer('num_skills')->unsigned()->default(2);
        });
    }

    public function down(): void
    {
        Schema::table('archetypes', function (Blueprint $table) {
            $table->dropColumn('num_skills');
        });
    }
};
