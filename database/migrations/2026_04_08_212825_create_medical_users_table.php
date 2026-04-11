<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void{
    Schema::create('users', function (Blueprint $table) {
        $table->id();
        $table->string('nom');
        $table->string('prenom');
        $table->string('email')->unique();
        $table->string('password');
        // Gestion des rôles obligatoire (Administrateur, Médecin, Secrétaire, Patient)
        $table->enum('role', ['admin', 'medecin', 'secretaire', 'patient'])->default('patient');
        $table->string('telephone')->nullable();
        $table->rememberToken();
        $table->timestamps(); // Pour le suivi de l'activité
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_users');
    }
};
