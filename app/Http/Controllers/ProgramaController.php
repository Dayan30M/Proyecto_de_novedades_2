<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programa;


class ProgramaController extends Controller
{

    function __construct(){
        $this->middleware('auth');
    }

   function show(){
       $programaList = Programa::all();
       return view('programa/list',['programas' => $programaList]);
   }

   function delete($id){
       $programa = Programa::find($id);
       $programa->delete();
       //Programa::destroy($id);
       return redirect('/programas')->with('message','El producto fue borrado');
   }


   function form($id = null){
    $programa = new Programa();
   // $brands = Brand::orderBy('name')->get();
    //$categories = Categorie::orderBy('name')->get();
    if($id != null){
        //Select * from programas where id=$id
        $programa = Programa::findOrFail($id); 
    }
    return view('programa/form',[
                                'programa'=> $programa
                            ]);
}

   function save(Request $request){

        $request->validate(
            [
                'nom_program' => 'required|max:50',
                'tipo_program' => 'required|max:50'

            ]
            );

        $programa = new Programa();

            if (intval($request->id)>0) {
                $programa = Programa::findOrFail($request->id);
            }

        $programa->nom_program = $request->nom_program;
        $programa->tipo_program = $request->tipo_program;
        
        //$programa->brand_id = $request->brand;
      //  $programa->categorie_id = $request->categorie;
       
        $programa->save();//hace insert y updates
        return redirect('/programas')->with('message','El proceso fue guardado');


   }  
}
