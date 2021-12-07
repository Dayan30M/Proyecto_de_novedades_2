<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_novedad extends Model
{
    use HasFactory;
    function novedad(){
        return $this->belongsTo(Novedad::class);
    }
    
}
