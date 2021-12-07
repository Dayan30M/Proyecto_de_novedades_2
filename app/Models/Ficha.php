<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    use HasFactory;

    function programa(){
        return $this->belongsTo(Programa::class);
    }
    
    function aprendizs(){
        return $this->hasMany(Aprendiz::class);
    }
    

}
