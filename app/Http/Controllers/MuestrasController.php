<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Estudio;
use App\Models\Muestra;
use DB;
use App\Models\Egresado;
use App\Models\respuestas2;
use App\Models\respuestas14;

use Illuminate\Support\Facades\Auth;
class MuestrasController extends Controller
{
  public function index(){
    //  $Muestras2019=Muestra::where('enc_id','=',Auth::user()->id)
    $Muestras2019=DB::table('muestras')
     ->leftJoin('carreras', function($join)
                         {
                             $join->on('carreras.clave_carrera', '=', 'muestras.carrera_id');
                             $join->on('carreras.clave_plantel', '=', 'muestras.plantel_id');                             
                         })
    ->select('muestras.*','carreras.carrera','carreras.plantel')
                         ->get();
    //dd($Muestras2019);
    return view('muestras.index',compact('Muestras2019'));
  }
  
  public function show($id){
    $Muestra=Muestra::find($id);
    $Egresados=Egresado::where('carrera','=',$Muestra->carrera_id)->where('plantel','=',$Muestra->plantel_id)->get();
    return view('muestras.show',compact('Egresados','Muestra'));
}


public function index_14(){

$carreras=respuestas14::select('carrera','plantel')->distinct()->get();

return view('muestras.act14.index',compact('carreras'));
}

public function show_14($carrera,$plantel){
  $muestra=respuestas14::where('carrera','=',$carrera)->where('plantel','=',$plantel)->get();
  // dd($muestra);
  return view('muestras.act14.show',compact('muestra'));
}

public function index_20(){
  return view('muestras.seg20.index');

}
}


