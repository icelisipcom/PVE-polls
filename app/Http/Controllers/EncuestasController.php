<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\respuestas2;
use App\Models\Egresado;
use App\Models\Carrera;

class EncuestasController extends Controller
{

    public function show($id){
        $Encuesta=respuestas2::where('cuenta','=',$id)->first();
        $Egresado=Egresado::where('cuenta','=',$id)->first();
        $Carrera=Carrera::where('clave_carrera','=',$Egresado->carrera)->first()->carrera;
        $Plantel=Carrera::where('clave_plantel','=',$Egresado->plantel)->first()->plantel;
        return view('encuesta.show',compact('Encuesta','Egresado','Carrera','Plantel'));
}
}
