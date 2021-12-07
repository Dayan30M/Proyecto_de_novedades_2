<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aprendiz;
use App\Models\User;
use App\Models\Ficha;
class AprendizController extends Controller
{
    function __construct(){
        $this->middleware('auth');
    }

   function show(){
       $aprendizList = Aprendiz::has('ficha')->get();
       return view('aprendiz/list',['aprendizs' => $aprendizList]);
   }
   function delete($id){
       $aprendiz = Aprendiz::find($id);
       $aprendiz->delete();
       //Aprendiz::destroy($id);
       return redirect('/aprendizs')->with('message','El producto fue borrado');
   }


   function form($id = null){
    $aprendiz = new Aprendiz();
    $fichas = Ficha::orderBy('num_ficha')->get();

    if($id != null){
        //Select * from aprendizs where id=$id
        $aprendiz = Aprendiz::findOrFail($id); 
    }
    return view('aprendiz/form',[
                                'aprendiz'=> $aprendiz,
                                'fichas' => $fichas
                                //'users' => $users
                            ]);
}

   function save(Request $request){

        $request->validate(
            [
                'nom_apren' => 'required|max:50',
                'apelli_apren' => 'required|max:50',
                'tel_apren' => 'required|numeric',
                'estado_apren' => 'required|max:50',
                'email' => 'required|max:50',
                'tipo_doc_apren' => 'required|max:50',
                'num_doc_apren' => 'required|numeric',
                'ficha' => 'required|numeric'
                //'name' => 'required|max:50'

            ]
            );

        $aprendiz = new Aprendiz();

            if (intval($request->id)>0) {
                $aprendiz = Aprendiz::findOrFail($request->id);
            }

        $aprendiz->nom_apren = $request->nom_apren;
        $aprendiz->apelli_apren = $request->apelli_apren;
        $aprendiz->tel_apren = $request->tel_apren;
        $aprendiz->estado_apren = $request->estado_apren;
        $aprendiz->email = $request->email;
        $aprendiz->tipo_doc_apren = $request->tipo_doc_apren;
        $aprendiz->num_doc_apren = $request->num_doc_apren;
        $aprendiz->ficha_id = $request->ficha;
       // $aprendiz->user_id = $request->id_user;
      
       
        $aprendiz->save();//hace insert y updates
        return redirect('/aprendizs')->with('message','El proceso fue guardado');


   } 
}
