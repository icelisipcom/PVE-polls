<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MuestrasController;

use App\Http\Controllers\Encuesta20Controller;
use App\Http\Controllers\CorreosController;
use App\Http\Controllers\TelefonosController;

use App\Http\Controllers\OpcionesController;
use App\Http\Controllers\ReactivosController;
use App\Http\Controllers\RecadosController;
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
Route::resource('reactivos', ReactivosController::class);
Route::post('/reactivos_update/{id}', [App\Http\Controllers\ReactivosController::class, 'update'])->name('reactivos.update_re');

Route::resource('options', OpcionesController::class);
Route::post('/opciones_update/{id}', [App\Http\Controllers\OpcionesController::class, 'update'])->name('options.update_re');

Route::get('muestras14/index', [MuestrasController::class,'index_14'])->name('muestras14.index');
Route::get('muestras14/show/{carrera}/{plantel}', [MuestrasController::class,'show_14'])->name('muestras14.show');

Route::get('muestras20/index/{id}', [MuestrasController::class,'index_20'])->name('muestras20.index');
Route::get('muestras20/planteles/', [MuestrasController::class,'plantel_index'])->name('muestras20.plantel_index');
Route::get('muestras20/show/{carrera}/{plantel}', [MuestrasController::class,'show_20'])->name('muestras20.show');
Route::get('/encuestas/2020/llamar/{id}', [App\Http\Controllers\LlamadasController::class, 'llamar_20'])->name('llamar_20');
Route::get('revision', [MuestrasController::class,'revision'])->name('revision');

Route::get('recados', [RecadosController::class,'index'])->name('recados.index');
Route::delete('recados/delete/{id}', [RecadosController::class,'destroy'])->name('recados.destroy');


Route::post('/encuestas/2020/real_update/{id}', [App\Http\Controllers\Encuesta20Controller::class, 'update2'])->name('encuestas.real_update');
Route::post('/encuestas/2020/A_update/{id}', [App\Http\Controllers\Encuesta20Controller::class, 'updateA'])->name('encuestas.real_update.A');
Route::post('/encuestas/2020/C_update/{id}', [App\Http\Controllers\Encuesta20Controller::class, 'updateC'])->name('encuestas.real_update.C');
Route::post('/encuestas/2020/D_update/{id}', [App\Http\Controllers\Encuesta20Controller::class, 'updateD'])->name('encuestas.real_update.D');
Route::post('/encuestas/2020/E_update/{id}', [App\Http\Controllers\Encuesta20Controller::class, 'updateE'])->name('encuestas.real_update.E');
Route::post('/encuestas/2020/F_update/{id}', [App\Http\Controllers\Encuesta20Controller::class, 'updateF'])->name('encuestas.real_update.F');
Route::post('/encuestas/2020/G_update/{id}', [App\Http\Controllers\Encuesta20Controller::class, 'updateG'])->name('encuestas.real_update.G');

Route::get('/encuestas/2020/terminar/{id}', [App\Http\Controllers\Encuesta20Controller::class, 'terminar'])->name('terminar');

Route::resource('encuestas', EncuestasController::class);
Route::resource('correos', CorreosController::class);
Route::get('/agregar_correo/{cuenta}/{carrera}/{encuesta?}', [App\Http\Controllers\CorreosController::class, 'create'])->name('agregar_correo');
Route::post('/guardar_correo{cuenta}/{carrera}/{encuesta?}', [App\Http\Controllers\CorreosController::class, 'store'])->name('guardar_correo');
Route::get('/editar_correo/{id}/{carrera}/{encuesta?}', [App\Http\Controllers\CorreosController::class, 'edit'])->name('editar_correo');
Route::post('/actualizar_correo/{id}/{carrera}/{encuesta?}', [App\Http\Controllers\CorreosController::class, 'update'])->name('actualizar_correo');

Route::get('/agregar_telefono/{cuenta}/{carrera}/{encuesta?}', [App\Http\Controllers\TelefonosController::class, 'create'])->name('agregar_telefono');
Route::post('/guardar_telefono{cuenta}/{carrera}/{encuesta?}', [App\Http\Controllers\TelefonosController::class, 'store'])->name('guardar_telefono');
Route::get('/editar_telefono/{id}/{carrera}/{encuesta?}', [App\Http\Controllers\TelefonosController::class, 'edit'])->name('editar_telefono');
Route::post('/actualizar_telefono/{id}/{carrera}/{encuesta?}', [App\Http\Controllers\TelefonosController::class, 'update'])->name('actualizar_telefono');

Route::get('/encuestas/2014/show/{id}', [App\Http\Controllers\EncuestasController::class, 'show_14'])->name('encuestas.show_14');
Route::get('/encuestas/2014/recados/{id}', [App\Http\Controllers\RecadosController::class, 'recado_14'])->name('encuestas.recado_14');

Route::post('/encuestas/2014/marcar/{id}', [App\Http\Controllers\RecadosController::class, 'marcar_14'])->name('marcar_14');
Route::post('/encuestas/2020/marcar/{telid}/{egid}', [App\Http\Controllers\RecadosController::class, 'marcar_20'])->name('marcar_20');

Route::post('/encuestas/real_update/{id}', [App\Http\Controllers\Encuesta20Controller::class, 'update2'])->name('encuestas.real_update');
Route::post('/encuestas/2014/real_update/{id}', [App\Http\Controllers\EncuestasController::class, 'update14'])->name('encuestas14.real_update');
Route::get('/encuestas/json/{id}', [App\Http\Controllers\EncuestasController::class, 'json'])->name('encuestas.json');

Route::get('/enc2019_make', [App\Http\Controllers\EncuestasController::class, 'index'])->name('encuestas.make19');
Route::get('/enc2020_actualizar/{cuenta}/{carrera}', [App\Http\Controllers\Encuesta20Controller::class, 'act_data'])->name('encuesta20.act_data');
Route::get('/comenzar_encuesta_2020/{correo}/{cuenta}/{carrera}', [App\Http\Controllers\Encuesta20Controller::class, 'comenzar'])->name('comenzar_encuesta_2020');
Route::get('/encuestas_2020/edit/{id}/{section}', [App\Http\Controllers\Encuesta20Controller::class, 'edit'])->name('edit_20');

Route::get('/encuestas/verify/{id}', [App\Http\Controllers\EncuestasController::class, 'verificar'])->name('encuestas.verificar');
Route::get('/stats', [App\Http\Controllers\HomeController::class, 'stats'])->name('stats');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/2014_act', [App\Http\Controllers\HomeController::class, '2014_act'])->name('2014_act');
Route::get('/2019', [App\Http\Controllers\HomeController::class, 'encuesta_2019'])->name('2019');

Route::get('/2020', [App\Http\Controllers\Encuesta20Controller::class, 'encuesta_2020'])->name('2020');
Route::get('/buscar', [App\Http\Controllers\HomeController::class, 'buscar'])->name('buscar');
Route::post('/resultado', [App\Http\Controllers\HomeController::class, 'resultado'])->name('resultado');
Route::post('/resultado_fonetico', [App\Http\Controllers\HomeController::class, 'resultado_fonetico'])->name('resultado_fonetico');
Route::get('/aviso', [App\Http\Controllers\HomeController::class, 'aviso'])->name('aviso');
Route::post('/enviar_aviso', [App\Http\Controllers\HomeController::class, 'enviar_aviso'])->name('enviar_aviso');

Route::get('direct_send/{id}', [App\Http\Controllers\CorreosController::class, 'direct_send'])->name('direct_send');

Route::get('/invitacion', [App\Http\Controllers\HomeController::class, 'invitacion'])->name('invitacion');
Route::post('/enviar_invitacion', [App\Http\Controllers\HomeController::class, 'enviar_invitacion'])->name('enviar_invitacion');
Route::get('/invitacion14/{registro}', [App\Http\Controllers\HomeController::class, 'invitacion'])->name('invitacion14');
Route::get('/invitacion19/{id}', [App\Http\Controllers\HomeController::class, 'invitacion19'])->name('invitacion19');

Route::post('/enviar_invitacion', [App\Http\Controllers\HomeController::class, 'enviar_invitacion'])->name('enviar_invitacion');


Route::get('/reporte/{report}', [App\Http\Controllers\ReportController::class, 'generate'])->name('report');
Route::get('/reporte/semanal/{semana}/{user?}', [App\Http\Controllers\ReportController::class, 'semanal'])->name('reporte.semanal');

Route::get('/switch', [App\Http\Controllers\ConfigController::class, 'switch_mode'])->name('switch_mode');


//Rutas para encuesta fast
Route::get('/fast_show/{registro}/{reactivo}/{type}', [App\Http\Controllers\FastPollController::class, 'show'])->name('fast.show');
Route::get('/fast_begin', [App\Http\Controllers\FastPollController::class, 'begin'])->name('fast.begin');
Route::post('/fast_check_cuenta', [App\Http\Controllers\FastPollController::class, 'check_cuenta'])->name('fast.check');
Route::post('/fast_check_store/{registro}/{reactivo}/{type}', [App\Http\Controllers\FastPollController::class, 'store'])->name('fast.store');

Route::get('/fast/find_next/{registro}/{type}', [App\Http\Controllers\FastPollController::class, 'find_next'])->name('fast.find');


});