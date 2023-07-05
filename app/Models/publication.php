<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publication extends Model
{


    protected $table = 'publication';
    protected $primaryKey = 'id_publication';
    protected $fillable = ['id_etudiant', 'id_connaissance', 'date_publication'];

    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class, 'id_etudiant');
    }

    public function connaissance()
    {
        return $this->belongsTo(Connaissance::class, 'id_connaissance');
    }
    public function connaissan()
    {
        //
    }


    use HasFactory;
}
