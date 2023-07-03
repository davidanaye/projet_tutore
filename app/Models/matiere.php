<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matiere extends Model
{
    use HasFactory;
    protected $table = 'matieres';
    protected $primaryKey = 'id_matiere';
    public function Niveau(){
        return$this->belongTo(Niveau::class,'id_niveau');

    }
}
