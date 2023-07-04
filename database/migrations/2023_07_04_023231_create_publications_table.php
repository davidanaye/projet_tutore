<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

     public function up()
     {
         Schema::create('publications', function (Blueprint $table) {
             $table->id('id_publication');
             $table->unsignedBigInteger('id_etudiant');
             $table->unsignedBigInteger('id_connaissance');
             $table->dateTime('date_publication');
             $table->timestamps();

             $table->foreign('id_etudiant')->references('id_etudiant')->on('etudiants');
             $table->foreign('id_connaissance')->references('id_connaissance')->on('connaissances');
         });
     }



    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publications');
    }


}
