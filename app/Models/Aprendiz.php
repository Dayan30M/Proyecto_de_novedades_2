<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aprendiz extends Model
{
    use HasFactory;
    function ficha(){
        return $this->belongsTo(Ficha::class);
    }
    /*function user(){
        return $this->belongsTo(User::class);
    }
    */
}
