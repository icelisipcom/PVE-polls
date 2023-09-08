<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\respuestas2;
use App\Models\Egresado;
use App\Models\Carrera;

class EncuestasController extends Controller
{
   
    public function completar_cuenta($cuenta){

    }
    public function show($id){

        if(strlen(strval($id))<9){
            $cuenta='0'.strval($id);
        }else{
            $cuenta=strval($id);
        }
        
        $Encuesta=respuestas2::where('cuenta','=',$cuenta)->first();
        if(!$Encuesta){
            $Encuesta= new respuestas2();
        }
        $Egresado=Egresado::where('cuenta','=',$id)->first();
        $Carrera=Carrera::where('clave_carrera','=',$Egresado->carrera)->first()->carrera;
        $Plantel=Carrera::where('clave_plantel','=',$Egresado->plantel)->first()->plantel;
        return view('encuesta.show',compact('Encuesta','Egresado','Carrera','Plantel'));
}
public function edit($id){
    
    
    $Encuesta=respuestas2::where('registro','=',$id)->first();
    if(!$Encuesta){
        $Encuesta= new respuestas2();
    }
    $Egresado=Egresado::where('cuenta','=',$Encuesta->cuenta)->first();
    $Carrera=Carrera::where('clave_carrera','=',$Egresado->carrera)->first()->carrera;
    $Plantel=Carrera::where('clave_plantel','=',$Egresado->plantel)->first()->plantel;
    return view('encuesta.show',compact('Encuesta','Egresado','Carrera','Plantel'));

}
public function create(){

}
public function store( Request $request){

}
public function update($id, Request $request){

}
}
