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
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id('id_etudiant');
            $table->String('nom_etudiant',30);
            $table->String('prenom_etudiant',80);
            $table->integer('numero_tel');
            $table->String('email_etudiant',90);
            $table->unsignedBigInteger('id_niveau');
            $table->foreign('id_niveau')->references('id_niveau')->on('niveaux');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiants');
    }
};
