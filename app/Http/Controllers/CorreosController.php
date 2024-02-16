<?php

namespace App\Http\Controllers;
use App\Models\Egresado;
use App\Models\Carrera;
use App\Models\Correo;
use Illuminate\Http\Request;

class CorreosController extends Controller
{
    public function create($cuenta,$carrera){
        $Egresado=Egresado::where('cuenta',$cuenta)->where('carrera',$carrera)->first();
        $Carrera=Carrera::where('clave_carrera','=',$Egresado->carrera)->first()->carrera;
        $Plantel=Carrera::where('clave_plantel','=',$Egresado->plantel)->first()->plantel;
     
        return view('encuesta.seg20.create_correo',compact('Egresado','Carrera','Plantel'));
    }
    public function store(Request $request ,$cuenta,$carrera){
        $Egresado=Egresado::where('cuenta',$cuenta)->where('carrera',$carrera)->first();
        $Correo=new Correo();
        $Correo->cuenta=$cuenta;
        $Correo->correo=$request->correo;
        $Correo->status='en uso';
        $Correo->enviado=0;
        $Correo->save();
        return redirect()->route('encuesta20.act_data',[$Egresado->cuenta,$Egresado->carrera]);
    }
    public function edit($id,$carrera){
        $Correo=Correo::find($id);
        $Egresado=Egresado::where('cuenta',$Correo->cuenta)->where('carrera',$carrera)->first();
        $Carrera=Carrera::where('clave_carrera','=',$Egresado->carrera)->first()->carrera;
        $Plantel=Carrera::where('clave_plantel','=',$Egresado->plantel)->first()->plantel;
     
        return view('encuesta.seg20.editar_correo',compact('Egresado','Correo','Carrera','Plantel'));
    }
    public function update(Request $request ,$id,$carrera){
        $Correo=Correo::find($id);
        $Egresado=Egresado::where('cuenta',$Correo->cuenta)->where('carrera',$carrera)->first();
        
        $Correo->correo=$request->correo;
        $Correo->status=$request->status;
        $Correo->enviado=0;
        $Correo->save();
        return redirect()->route('encuesta20.act_data',[$Egresado->cuenta,$Egresado->carrera]);
    }
}
