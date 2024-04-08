<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Reactivo;

use App\Models\Option;
class OpcionesController extends Controller
{
   public function edit($id){
    $Opcion=Option::find($id);
    return view('admin.opciones.edit',compact('Opcion'));
   }

   public function update(Request $request,$id){
  
    $Opcion=Option::find($id);
    $Opcion->descripcion=$request->description;
    $Opcion->save();
    $Reactivo=Reactivo::where('clave',$Opcion->reactivo)->first();
    if($Reactivo){
    return redirect()->route('reactivos.edit',$Reactivo->id);
   }
    else{
      
    $Reactivo=Reactivo::where('archtype',$Opcion->reactivo)->first();
      return redirect()->route('reactivos.edit',$Reactivo->id);
   }
    
   }
}
