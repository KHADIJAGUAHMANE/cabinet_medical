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
        Schema::create('rendez_vous', function (Blueprint $table) {
    $table->id();
    $table->foreignId('patient_id')->constrained()->onDelete('cascade');
    $table->foreignId('user_id_medecin')->constrained('users')->onDelete('cascade'); 
    $table->dateTime('date_heure');
    // Gestion des statuts demandée [cite: 87]
    $table->enum('statut', ['en_attente', 'confirme', 'annule', 'termine'])->default('en_attente');
    $table->string('motif')->nullable();
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_rendez_vous');
    }
};
