<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
    use HasFactory;

    protected $table = 'niveaux';
    protected $primaryKey = 'id_niveau';

    protected $fillable = [
        'nom_niveau',
        'numero_niveau'
    ];

    public function matiere()

{
    return $this->hasMany(Matiere::class, 'id_niveau');
}

public function etudiant()
{
 return $this->hasMany(etudiant::class, 'id_niveau');
}
public function connaissance()
{
 return $this->hasMany( connaissance::class, 'id_niveau');
}

}

