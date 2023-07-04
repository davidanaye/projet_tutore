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

    public function connaissance()
    {
        return $this->belongsToMany(Connaissance::class, 'publication');
    }
       public function appreciation()
       {
           return $this->hasMany(appreciation::class, 'id_appreciation');
       }


}
