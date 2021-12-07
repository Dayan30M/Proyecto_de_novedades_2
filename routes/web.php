
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ProgramaController;
use App\Http\Controllers\FichaController;
use App\Http\Controllers\Tipo_pqrController;
use App\Http\Controllers\PqrController;
use App\Http\Controllers\NovedadController;
use App\Http\Controllers\AprendizController;
use App\Http\Controllers\Tipo_novedadController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ModeradorController;
use App\Http\Controllers\BarchartController;

use Illuminate\Support\Facades\Mail;
use App\Mail\RespuestaMailable;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('menu');
});//->middleware('auth');

Route::get('/inicio', function () {
    return view('welcome');
})->middleware('auth');


Route::get('programas',[ProgramaController::class, 'show']);

Route::get('/programa/delete/{id}', [ProgramaController::class, 'delete'])->name('programa.delete');

Route::get('/programa/form/{id?}', [ProgramaController::class, 'form'])->name('programa.form');

Route::post('/programas/save', [ProgramaController::class, 'save'])->name('programa.save');





Route::get('fichas',[FichaController::class, 'show']);

Route::get('/ficha/delete/{id}', [FichaController::class, 'delete'])->name('ficha.delete');

Route::get('/ficha/form/{id?}', [FichaController::class, 'form'])->name('ficha.form');

Route::post('/fichas/save', [FichaController::class, 'save'])->name('ficha.save');




Route::get('tipo_pqrs',[Tipo_pqrController::class, 'show']);

Route::get('/tipo_pqr/delete/{id}', [Tipo_pqrController::class, 'delete'])->name('tipo_pqr.delete');

Route::get('/tipo_pqr/form/{id?}', [Tipo_pqrController::class, 'form'])->name('tipo_pqr.form');

Route::post('/tipo_pqrs/save', [Tipo_pqrController::class, 'save'])->name('tipo_pqr.save');


Route::get('pqrs',[PqrController::class, 'show']);

Route::get('/pqr/delete/{id}', [PqrController::class, 'delete'])->name('pqr.delete');

Route::get('/pqr/form/{id?}', [PqrController::class, 'form'])->name('pqr.form');

Route::post('/pqrs/save', [PqrController::class, 'save'])->name('pqr.save');



Route::get('novedads',[NovedadController::class, 'show']);

Route::get('/novedad/delete/{id}', [NovedadController::class, 'delete'])->name('novedad.delete');

Route::get('/novedad/form/{id?}', [NovedadController::class, 'form'])->name('novedad.form');

Route::post('/novedads/save', [NovedadController::class, 'save'])->name('novedad.save');




Route::get('aprendizs',[AprendizController::class, 'show']);

Route::get('/aprendiz/delete/{id}', [AprendizController::class, 'delete'])->name('aprendiz.delete');

Route::get('/aprendiz/form/{id?}', [AprendizController::class, 'form'])->name('aprendiz.form');

Route::post('/aprendizs/save', [AprendizController::class, 'save'])->name('aprendiz.save');



Route::get('tipo_novedads',[Tipo_novedadController::class, 'show']);

Route::get('/tipo_novedad/form/{id?}', [Tipo_novedadController::class, 'form'])->name('tipo_novedad.form');

Route::post('/tipo_novedads/save', [Tipo_novedadController::class, 'save'])->name('tipo_novedad.save');//aqui hice cabio 11:39 18-11 tipo_novedad.save


//FORMA NUEVA  DE USAR RUTAS






Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home',[App\Http\Controllers\ModeradorController::class, 'index'])->name('moderauth')->middleware('auth');


Route::get('respuesta', function(){
    $correo = new RespuestaMailable;
    Mail::to('damejia766@misena.edu.co')->send($correo);

    return "Mensaje enviado";
});





Route::get('barchart',[BarchartController::class, 'barChart']);
///Route::get('/home',[App\Http\Controllers\UserController::class, 'index'])->name('home');

//Route::get('/home',[App\Http\Controllers\ModeradorController::class, 'index'])->name('moderauth')->middleware('auth');
//Route::get('/invoice/{id}',function($id){
   // $invoice = App\Models\Invoice::findOrFail($id);
    //return dd($invoice->products);
//});
