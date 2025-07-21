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
         Schema::create('line_ups', function (Blueprint $table) {
            $table->id();
             $table->foreignId('match_id')->constrained('football_matches')->onDelete('cascade');
            $table->foreignId('player_id')->constrained('players')->onDelete('cascade');
            $table->enum('lineup_role', ['starter', 'substitute']);
            $table->integer('minutes_played')->default(0);
            $table->integer('goals')->default(0);
            $table->integer('assists')->default(0);
            $table->enum('card', ['none', 'yellow', 'red', 'yellow_red'])->default('none');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('line_ups');
    }
};
