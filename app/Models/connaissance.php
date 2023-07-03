<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class connaissance extends Model
{
    protected $table = 'connaissances';
    protected $primaryKey = 'id_connaissance';
    use HasFactory;
}
