<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pqr;

class PqrController extends Controller
{
    function __construct(){
        $this->middleware('auth');
    }

   function show(){
       $pqrList = Pqr::all();
       return view('pqr/list',['pqrs' => $pqrList]);
   }

   function delete($id){
       $pqr = Pqr::find($id);
       $pqr->delete();
       //Pqr::destroy($id);
       return redirect('/pqrs')->with('message','El producto fue borrado');
   }


   function form($id = null){
    $pqr = new Pqr();
   // $brands = Brand::orderBy('name')->get();
    //$categories = Categorie::orderBy('name')->get();
    if($id != null){
        //Select * from pqrs where id=$id
        $pqr = Pqr::findOrFail($id); 
    }
    return view('pqr/form',[
                                'pqr'=> $pqr
                            ]);
}

   function save(Request $request){

        $request->validate(
            [
                'nis'=> 'required|numeric',
                'respuesta'=> 'required|max:100',
                'observacion_pqr'=> 'required|max:100',
                'estado'=> 'required|max:50'
            ]
            );

        $pqr = new Pqr();

            if (intval($request->id)>0) {
                $pqr = Pqr::findOrFail($request->id);
            }

        $pqr->nis = $request->nis;
        $pqr->respuesta = $request->respuesta;
        $pqr->observacion_pqr = $request->observacion_pqr;
        $pqr->estado = $request->estado;
       
        //$pqr->brand_id = $request->brand;
      //  $pqr->categorie_id = $request->categorie;
       
        $pqr->save();//hace insert y updates
        return redirect('/pqrs')->with('message','El proceso fue guardado');


   }  
}
