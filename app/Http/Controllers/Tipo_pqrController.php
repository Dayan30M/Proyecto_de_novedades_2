<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipo_pqr;


class Tipo_pqrController extends Controller
{
    function __construct(){
        $this->middleware('auth');
    }

   function show(){
       $tipo_pqrList = Tipo_pqr::all();
       return view('tipo_pqr/list',['tipo_pqrs' => $tipo_pqrList]);
   }
   function delete($id){
       $tipo_pqr = Tipo_pqr::find($id);
       $tipo_pqr->delete();
       //Tipo_pqr::destroy($id);
       return redirect('/tipo_pqrs')->with('message','El producto fue borrado');
   }


   function form($id = null){
    $tipo_pqr = new Tipo_pqr();
   // $brands = Brand::orderBy('name')->get();
    //$categories = Categorie::orderBy('name')->get();
    if($id != null){
        //Select * from tipo_pqrs where id=$id
        $tipo_pqr = Tipo_pqr::findOrFail($id); 
    }
    return view('tipo_pqr/form',[
                                'tipo_pqr'=> $tipo_pqr
                            ]);
}

   function save(Request $request){

        $request->validate(
            [
                'nom_tipo_pqr' => 'required|max:50'
                

            ]
            );

        $tipo_pqr = new Tipo_pqr();

            if (intval($request->id)>0) {
                $tipo_pqr = Tipo_pqr::findOrFail($request->id);
            }

        $tipo_pqr->nom_tipo_pqr = $request->nom_tipo_pqr;
       
        //$tipo_pqr->brand_id = $request->brand;
      //  $tipo_pqr->categorie_id = $request->categorie;
       
        $tipo_pqr->save();//hace insert y updates
        return redirect('/tipo_pqrs')->with('message','El proceso fue guardado');


   } 
}
