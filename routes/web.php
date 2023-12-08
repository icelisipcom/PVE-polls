<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MuestrasController;

use App\Http\Controllers\EncuestasController;
/*
|--------------------------------------------------------------------------|
| Web Routes                                                               |
|--------------------------------------------------------------------------|
|                                                                          |
| Here is where you can register web routes for your application. These    |
| routes are loaded by the RouteServiceProvider and all of them will       |
| be assigned to the "web" middleware group. Make something great!         |
|__________________________________________________________________________|

*/

Route::get('/', function () {
    return redirect(route('login'));
});
Auth::routes();
Route::group(['middleware' => ['auth']], function()
{   

Route::resource('muestras', MuestrasController::class);

Route::get('muestras14/index', [MuestrasController::class,'index_14'])->name('muestras14.index');
Route::get('muestras14/show/{carrera}/{plantel}', [MuestrasController::class,'show_14'])->name('muestras14.show');

Route::get('muestras20/index', [MuestrasController::class,'index_20'])->name('muestras20.index');
Route::resource('encuestas', EncuestasController::class);

Route::get('/encuestas/2014/show/{id}', [App\Http\Controllers\EncuestasController::class, 'show_14'])->name('encuestas.show_14');
Route::get('/encuestas/2014/recados/{id}', [App\Http\Controllers\RecadosController::class, 'recado_14'])->name('encuestas.recado_14');

Route::post('/encuestas/2014/marcar/{id}', [App\Http\Controllers\RecadosController::class, 'marcar_14'])->name('marcar_14');

Route::post('/encuestas/real_update/{id}', [App\Http\Controllers\EncuestasController::class, 'update2'])->name('encuestas.real_update');
Route::post('/encuestas/2014/real_update/{id}', [App\Http\Controllers\EncuestasController::class, 'update14'])->name('encuestas14.real_update');
Route::get('/encuestas/json/{id}', [App\Http\Controllers\EncuestasController::class, 'json'])->name('encuestas.json');

Route::get('/enc2019_make', [App\Http\Controllers\EncuestasController::class, 'index'])->name('encuestas.make19');

Route::get('/encuestas/verify/{id}', [App\Http\Controllers\EncuestasController::class, 'verificar'])->name('encuestas.verificar');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/2014_act', [App\Http\Controllers\HomeController::class, '2014_act'])->name('2014_act');
Route::get('/2019', [App\Http\Controllers\HomeController::class, 'encuesta_2019'])->name('2019');
Route::get('/buscar', [App\Http\Controllers\HomeController::class, 'buscar'])->name('buscar');
Route::post('/resultado', [App\Http\Controllers\HomeController::class, 'resultado'])->name('resultado');
Route::get('/aviso', [App\Http\Controllers\HomeController::class, 'aviso'])->name('aviso');
Route::post('/enviar_aviso', [App\Http\Controllers\HomeController::class, 'enviar_aviso'])->name('enviar_aviso');

Route::get('/invitacion', [App\Http\Controllers\HomeController::class, 'invitacion'])->name('invitacion');
Route::post('/enviar_invitacion', [App\Http\Controllers\HomeController::class, 'enviar_invitacion'])->name('enviar_invitacion');

Route::get('/reporte/{report}', [App\Http\Controllers\ReportController::class, 'generate'])->name('report');

});