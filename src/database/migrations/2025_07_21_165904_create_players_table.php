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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
             $table->string('name');
             $table->string('position');
             $table->string('nationality');
             $table->date('birth_date');
             $table->integer('jersey_number');
             $table->enum('status', ['active', 'loan', 'injured', 'retired'])->default('active');
             $table->enum('team_role', ['starter', 'substitute'])->default('starter');
             $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
