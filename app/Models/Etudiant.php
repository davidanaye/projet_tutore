<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{

    protected $table= etudiants;

    protected $primaryKey='id_etudiant';

    use HasFactory;

    public function niveau(){

     return  $this->belongsTo (niveau:: class ,'id_niveau');

    }

    
}
