<?php

namespace App\Http\Controllers;

use App\Models\respuestas2;
use App\Models\respuestas3;
use App\Models\respuestas14;
use App\Models\Egresado;
use App\Models\Carrera;
use App\Models\Comentario;
use App\Models\Recado;

use Illuminate\Support\Facades\Auth;
use App\Models\Telefono;
use Illuminate\Http\Request;

class RecadosController extends Controller
{
    public function recado_14($id){
    $Egresado=respuestas14::find($id);
    $Recados=Recado::where('cuenta','=',$Egresado->CUENTA)->get();
    foreach($Recados as $r){
        $color='';
        switch ($r->status) {
          
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
      }
      $r->color=$color;
    }
    return view('muestras.act14.recados',compact('Egresado','Recados'));


    }
    public function marcar_14(Request $request,$id){
        $Egresado=respuestas14::find($id);
        $Recado= new Recado();
        $Recado->recado=$request->recado;
        $Recado->status=$request->code;
        $Recado->cuenta=$Egresado->CUENTA;
        $Recado->fecha=now()->modify('-6 hours');
        $Recado->save();


        $Egresado->status=$request->code;
        $Egresado->recado=$request->recado;
        $Egresado->llamadas=$Recados=Recado::where('cuenta','=',$Egresado->CUENTA)->get()->count();
        $Egresado->save();

       
        return redirect()->route('muestras14.show',[$Egresado->carrera,$Egresado->plantel]);
        }
        
    public function marcar_20(Request $request,$tel_id,$eg_id){
      $Egresado=Egresado::find($eg_id);
      $telefono=Telefono::find($tel_id);
      $Recado= new Recado();
      $Recado->recado=$request->recado;
      $Recado->status=$request->code;
      $Recado->tel_id=$telefono->id;
      $Recado->cuenta=$Egresado->cuenta;
      
      $Recado->user_id=Auth::user()->id;
      $Recado->fecha=now()->modify('-6 hours');
      $Recado->save();

      $telefono->status=$request->code;
      $telefono->save();
      if($Recado->status != 6){
        $Egresado->status=$request->code;
        $Egresado->llamadas=$Recados=Recado::where('cuenta','=',$Egresado->cuenta)->get()->count();
        $Egresado->save();}

      //verificar si todos los telefonos no existen (egresado ilocalizable)
      $Telefonos=Telefono::where('cuenta',$Egresado->cuenta);
      
      
      return redirect()->route('muestras20.show',[$Egresado->carrera,$Egresado->plantel]);
      }
}
