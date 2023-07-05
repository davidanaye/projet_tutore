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
        Schema::create('appreciations', function (Blueprint $table) {
            $table->id('id_appreciation');
            $table->unsignedBigInteger('id_connaissance');
            $table->unsignedBigInteger('id_etudiant');
            $table->integer('like')->default(0);
            $table->integer('unlike')->default(0);
            $table->timestamps();

            $table->foreign('id_connaissance')->references('id_connaissance')->on('connaissances');
          $table->foreign('id_etudiant')->references('id_etudiant')->on('etudiants');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appreciations');
    }
};
