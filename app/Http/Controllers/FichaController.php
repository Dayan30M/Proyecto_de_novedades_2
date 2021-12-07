<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ficha;
use App\Models\Programa;

class FichaController extends Controller
{
    function __construct(){
        $this->middleware('auth');
    }

   function show(){
       $fichaList = Ficha::has('programa')->get();
       return view('ficha/list',['fichas' => $fichaList]);
   }

   function delete($id){
       $ficha = Ficha::find($id);
       $ficha->delete();
       //Ficha::destroy($id);
       return redirect('/fichas')->with('message','El producto fue borrado');
   }


   function form($id = null){
    $ficha = new Ficha();
    $programas = Programa::orderBy('nom_program')->get();
    //$categories = Categorie::orderBy('name')->get();
    if($id != null){
        //Select * from fichas where id=$id
        $ficha = Ficha::findOrFail($id); 
    }
    return view('ficha/form',[
                                'ficha'=> $ficha,
                                'programas'=>$programas
                            ]);
}

   function save(Request $request){

        $request->validate(
            [
                'num_ficha' => 'required|numeric',
                'programa'=> 'required:numeric'

            ]
            );

        $ficha = new Ficha();

            if (intval($request->id)>0) {
                $ficha = Ficha::findOrFail($request->id);
            }

        $ficha->num_ficha = $request->num_ficha;
        $ficha->programa_id = $request->programa;
       
        //$ficha->brand_id = $request->brand;
      //  $ficha->categorie_id = $request->categorie;
       
        $ficha->save();//hace insert y updates
        return redirect('/fichas')->with('message','El proceso fue guardado');


   }  
}
