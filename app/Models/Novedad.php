<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Novedad extends Model
{
    use HasFactory;
    function aprendiz(){
        return $this->belongsTo(Aprendiz::class);
    }

     function tipo_novedads(){
        return $this->hasMany(Tipo_novedad::class);
    }
    
}
