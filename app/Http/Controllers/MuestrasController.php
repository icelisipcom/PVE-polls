<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Estudio;
use App\Models\Muestra;

use App\Models\Carrera;
use DB;
use App\Models\Egresado;
use App\Models\respuestas2;

use App\Models\respuestas20;
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

public function index_20(){
  $carreras=Egresado::where('muestra','=','3')->select('egresados.carrera','egresados.plantel')->distinct()->leftJoin('carreras', function($join)
  {
      $join->on('carreras.clave_carrera', '=', 'egresados.carrera');
      $join->on('carreras.clave_plantel', '=', 'egresados.plantel');                             
  })->select('carreras.carrera','carreras.plantel','egresados.carrera as c','egresados.plantel as p')->get();
  return view('muestras.seg20.index',compact('carreras'));

}
public function show_14($carrera,$plantel){
  $muestra=respuestas14::dwhere('carrera','=',$carrera)->where('plantel','=',$plantel)->get();
  foreach($muestra as $m){
    $color='';
    switch ($m->status) {
      case 1:
        $color="rgba(92, 191, 98,0.45)";
        break;
      case 2:
        $color="rgba(44, 92, 40,0.45)";
        break;
      case 3:
          $color="rgba(245, 66, 66, 0.45)";
          break;
      case 4:
        $color="rgba(147, 66, 245,0.45)";
          break;
      case 5:
        $color="rgba(64, 64, 64,0.7)";
          break;
      case 6:
        $color="rgba(59, 173, 196,0.45)";
          break;
      case 7:
        $color="rgba(219, 133, 96,0.45)";
          break;
  }
  $m->color=$color;
}
  $muestra=collect($muestra);
  return view('muestras.act14.show',compact('muestra'));
}
public function show_20($carrera,$plantel){
 $Carrera= Carrera::where('clave_carrera',$carrera)->where('clave_plantel',$plantel)->first();
 $muestra=DB::table('egresados')->where('muestra','=','3')->where('carrera','=',$carrera)->where('plantel','=',$plantel)
  ->leftJoin('codigos','codigos.code','=','egresados.status')
  ->select('egresados.*','codigos.color_rgb','codigos.description')
  ->get();
  $Codigos=DB::table('codigos')->where('code','>=',3)
  ->orderBy('color')->get();

  
  return view('muestras.seg20.show',compact('muestra','Carrera','Codigos'));
}
public function revision(){
  $Encuestas=respuestas20::leftJoin('carreras', function($join)
  {
      $join->on('carreras.clave_carrera', '=', 'respuestas20.nbr2');
      $join->on('carreras.clave_plantel', '=', 'respuestas20.nbr3');                             
  })
  ->rightjoin('users','users.clave','=','respuestas20.aplica')
  ->select('respuestas20.*','carreras.carrera','carreras.plantel','users.name')
  //->where('aplica',Auth::user()->clave) 
  ->get();
  return view('muestras.seg20.revision',compact('Encuestas'));
}

}


