<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Création de l'Administrateur (Khadija)
        User::create([
            'nom' => 'GUAHMANE',
            'prenom' => 'Khadija',
            'email' => 'admin@cabinet.ma',
            'password' => Hash::make('password123'),
            'role' => 'admin',
        ]);

        // Création d'un Médecin de test
        User::create([
            'nom' => 'Alaoui',
            'prenom' => 'Ahmed',
            'email' => 'medecin@cabinet.ma',
            'password' => Hash::make('password123'),
            'role' => 'medecin',
        ]);

        // Création d'une Secrétaire
        User::create([
            'nom' => 'Benzakour',
            'prenom' => 'Sanae',
            'email' => 'secretaire@cabinet.ma',
            'password' => Hash::make('password123'),
            'role' => 'secretaire',
        ]);

    }
}