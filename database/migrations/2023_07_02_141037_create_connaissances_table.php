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
        Schema::create('connaissances', function (Blueprint $table) {
            $table->id('id_connaissance');
            $table->timestamps();
            $table->String('titre_connaiss');
            $table->String('lien_connaiss');
            $table->String('img_connaiss');
            $table->String('video_connaissance')->nullable();
            $table->String('titre_connaissance')->nullable();
            $table->Integer('nbr_vues');
            $table->unsignedBigInteger('id_niveau');
            $table->unsignedBigInteger('id_etudiant');
            $table->unsignedBigInteger('id_matiere');
            $table->foreign('id_niveau')->references('id_niveau')->on('niveaux');
            $table->foreign('id_etudiant')->references('id_etudiant')->on('etudiants');
            $table->foreign('id_matiere')->references('id_matiere')->on('matieres');

        });
    }









    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('connaissances');
    }
};
