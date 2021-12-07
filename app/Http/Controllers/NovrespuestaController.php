<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NovrespuestaController extends Controller
{
    /*
    public function index($user)
    {

        $novrespuesta=Respuesta::where($id)->get();
        return view('novrespuestas')
        ->with('user',$novrespuesta);
        
    }
*/
public function Index($id)
{
    $novedad = Novedad::find($id);
}
}


