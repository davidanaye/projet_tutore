<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appreciation extends Model
{

    protected $table = 'appreciation';
    protected $primaryKey = 'id_appreciation';
    protected $fillable = ['id_connaiss', 'id_etudiant', 'like', 'unlike'];

    public function connaissance()
    {
        return $this->belongsTo(Connaissance::class, 'id_connaissance');
    }

    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class, 'id_etudiant');
    }


    use HasFactory;
}
