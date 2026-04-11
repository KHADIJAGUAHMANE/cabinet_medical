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
        Schema::create('consultations', function (Blueprint $table) {
    $table->id();
    // Relation 1:1 avec le rendez-vous (clé unique)
    $table->foreignId('rendez_vous_id')->unique()->constrained()->onDelete('cascade');
    $table->text('compte_rendu');
    $table->date('date_consultation');
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_consultations');
    }
};
