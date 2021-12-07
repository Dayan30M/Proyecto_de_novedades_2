<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Novedad;
use App\Models\Tipo_novedad;


class Tipo_novedadController extends Controller
{
    function __construct(){
        $this->middleware('auth');
    }

    function show(){
        $tipo_novedadList = Tipo_novedad::has('novedad')->where('id',7)->get();
        return view('tipo_novedad/list',['tipo_novedads' => $tipo_novedadList]);
    }

  /* 
  function show(){
    $tipo_novedadList = Tipo_Novedad::where('id',16)->get();
    return view('tipo_novedad/list',['tipo_novedads' => $tipo_novedadList]);
}
   */
  

  


   function form($id = null){
    $tipo_novedad = new Tipo_novedad();
    $novedads = Novedad::orderBy('nom_novedad')->get();
   // $brands = Brand::orderBy('name')->get();
    //$categories = Categorie::orderBy('name')->get();
    if($id != null){
        //Select * from tipo_novedads where id=$id
        $tipo_novedad = Tipo_novedad::findOrFail($id); 
    }
    return view('tipo_novedad/form',[
                                'tipo_novedad'=> $tipo_novedad,
                                'novedads'=>$novedads
                            ]);
}

   function save(Request $request){

        $request->validate(
            [
                

                'fecha_realizacion'=> 'required|max:100',
                'respuesta'=> 'required|max:100',
                'observacion'=> 'required|max:100',
                'fecha_reintegro'=> 'required|max:100',
                'estado_nov'=> 'required|max:100',
                'novedad'=> 'required:numeric'
            ]
            );

        $tipo_novedad = new Tipo_novedad();

            if (intval($request->id)>0) {
                $tipo_novedad = Tipo_novedad::findOrFail($request->id);
            }

        $tipo_novedad->fecha_realizacion = $request->fecha_realizacion;
        $tipo_novedad->respuesta = $request->respuesta;
        $tipo_novedad->observacion = $request->observacion;
        $tipo_novedad->fecha_reintegro = $request->fecha_reintegro;
        $tipo_novedad->estado_nov = $request->estado_nov;
        $tipo_novedad->novedad_id = $request->novedad;
       
        
        $tipo_novedad->save();//hace insert y updates
        return redirect('/novedads')->with('message','El proceso fue guardado');


   }  
}
