<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Egresado;
use App\Models\Carrera;
use App\Models\Telefono;
class TelefonosController extends Controller
{
    public function create($cuenta,$carrera){
        $Egresado=Egresado::where('cuenta',$cuenta)->where('carrera',$carrera)->first();
         
        return view('encuesta.seg20.create_telefono',compact('Egresado'));
    }
    public function store(Request $request ,$cuenta,$carrera){
        $Egresado=Egresado::where('cuenta',$cuenta)->where('carrera',$carrera)->first();
        $Correo=new Telefono();
        $Correo->cuenta=$cuenta;
        $Correo->telefono=$request->telefono;
        $Correo->status=0;
        $Correo->save();
        return redirect()->route('encuesta20.act_data',[$Egresado->cuenta,$Egresado->carrera]);
    }
    public function edit($id,$carrera){
        $Correo=Telefono::find($id);
        $Egresado=Egresado::where('cuenta',$Correo->cuenta)->where('carrera',$carrera)->first();
         
        return view('encuesta.seg20.editar_telefono',compact('Egresado','Correo'));
    }
    public function update(Request $request ,$id,$carrera){
        $Correo=Telefono::find($id);
        $Egresado=Egresado::where('cuenta',$Correo->cuenta)->where('carrera',$carrera)->first();
        
        $Correo->telefono=$request->telefono;
        $Correo->status=0;
        $Correo->save();
        return redirect()->route('encuesta20.act_data',[$Egresado->cuenta,$Egresado->carrera]);
    }
}
