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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
    $table->string('name');
    $table->string('client')->nullable();
    $table->string('period'); // Es: "Gennaio 2024 - Marzo 2024"
    $table->text('summary'); // Breve estratto per le card
    $table->text('description')->nullable(); // Descrizione dettagliata
    $table->string('cover_image')->nullable();
    $table->string('github_link')->nullable();
    $table->string('live_demo')->nullable();
    $table->string('tech_stack')->nullable(); // Es: "Laravel, Vue.js, Tailwind"
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
