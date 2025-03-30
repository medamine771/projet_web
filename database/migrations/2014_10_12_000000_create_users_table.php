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
        // Créer la table 'users'
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            // Ajouter les colonnes supplémentaires
            $table->string('user_type');  // Type d'utilisateur
            $table->string('cne')->nullable();  // CNE (si étudiant)
            $table->string('matricule')->nullable();  // Matricule (si professeur)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Si cette migration est annulée, supprimer la table 'users'
        Schema::dropIfExists('users');
    }
};
