<?php

namespace App\Http\Controllers;

use App\Models\Novedad;
use App\Models\Aprendiz;
use Illuminate\Http\Request;

class NovedadController extends Controller
{
    function __construct(){
        $this->middleware('auth');
    }

   function show(){
       $novedadList = Novedad::has('aprendiz')->get();
       return view('novedad/list',['novedads' => $novedadList]);
   }
   function delete($id){
       $novedad = Novedad::find($id);
       $novedad->delete();
       //Novedad::destroy($id);
       return redirect('/novedads')->with('message','El producto fue borrado');
   }


   function form($id = null){
    $novedad = new Novedad();
    $aprendizs = Aprendiz::orderBy('nom_apren')->get();
   // $brands = Brand::orderBy('name')->get();
    //$categories = Categorie::orderBy('name')->get();
    if($id != null){
        //Select * from novedads where id=$id
        $novedad = Novedad::findOrFail($id); 
    }
    return view('novedad/form',[
                                'novedad'=> $novedad,
                                'aprendizs'=>$aprendizs
                            ]);
}

   function save(Request $request){

        $request->validate(
            [
                'nom_novedad' => 'required|max:50',
                'fecha_peticion' => 'required|max:50',
                'motivo' => 'required|max:50',
                'aprendiz'=> 'required:numeric'
              
                

            ]
            );

        $novedad = new Novedad();

            if (intval($request->id)>0) {
                $novedad = Novedad::findOrFail($request->id);
            }

        $novedad->nom_novedad = $request->nom_novedad;
        $novedad->fecha_peticion = $request->fecha_peticion;
        $novedad->motivo = $request->motivo;
        $novedad->aprendiz_id = $request->aprendiz;
        
       
        //$novedad->brand_id = $request->brand;
      //  $novedad->categorie_id = $request->categorie;
       
        $novedad->save();//hace insert y updates
        return redirect('/novedads')->with('message','El proceso fue guardado');


   } 
}
