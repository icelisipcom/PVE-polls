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
Route::resource('encuestas', EncuestasController::class);
Route::post('/encuestas/real_update/{id}', [App\Http\Controllers\EncuestasController::class, 'update2'])->name('encuestas.real_update');
Route::post('/encuestas/real_update/{id}', [App\Http\Controllers\EncuestasController::class, 'update2'])->name('encuestas.real_update');
Route::get('/encuestas/json/{id}', [App\Http\Controllers\EncuestasController::class, 'json'])->name('encuestas.json');

Route::get('/enc2019_make', [App\Http\Controllers\EncuestasController::class, 'index'])->name('encuestas.make19');

Route::get('/encuestas/verify/{id}', [App\Http\Controllers\EncuestasController::class, 'verificar'])->name('encuestas.verificar');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/2014_act', [App\Http\Controllers\HomeController::class, '2014_act'])->name('2014_act');
Route::get('/2019', [App\Http\Controllers\HomeController::class, 'encuesta_2019'])->name('2019');
Route::get('/aviso', [App\Http\Controllers\HomeController::class, 'aviso'])->name('aviso');
Route::get('/buscar', [App\Http\Controllers\HomeController::class, 'buscar'])->name('buscar');
Route::post('/resultado', [App\Http\Controllers\HomeController::class, 'resultado'])->name('resultado');
Route::post('/enviar_aviso', [App\Http\Controllers\HomeController::class, 'enviar_aviso'])->name('enviar_aviso');
Route::get('/reporte/{report}', [App\Http\Controllers\ReportController::class, 'generate'])->name('report');

});