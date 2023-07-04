<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class connaissance extends Model
{
    protected $table = 'connaissances';
    protected $primaryKey = 'id_connaissance';

    use HasFactory;




    protected $fillable = [
        'titre_connaiss',
        'lien_connaiss',
        'img_connaiss',
        'video_connaissance',
        'titre_connaissance',
        'id_niveau',
        'id_etudiant',
        'id_matiere'
    ];

    public function niveau()
    {
        return $this->belongsTo(Niveau::class, 'id_niveau');
    }

    public function etudiants()
    {
        return $this->belongsToMany(Etudiant::class, 'publication');
    }

    public function matiere()
    {
        return $this->belongsTo(Matiere::class, 'id_matiere');
    }

    public function appreciation()
    {
        return $this->hasMany(appreciation::class, 'id_appreciation');
    }



}

