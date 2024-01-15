<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\respuestas2;
use App\Models\respuestas3;
use App\Models\respuestas14;
use App\Models\Egresado;
use App\Models\Carrera;
use App\Models\Comentario;
use App\Models\Telefono;

use App\Models\Recado;
class LlamadasController extends Controller
{
    public function llamar_20($id){
        $Egresado=Egresado::where('cuenta','=',$id)->where('muestra','=',3)->first();
        $Telefonos=Telefono::where('cuenta','=',$Egresado->cuenta)->get();
        //colorear status del telefono
        foreach($Telefonos as $t){
             $color='#40409A';
            //  dd($t->status,$t->id);
            switch ($t->status) {
             
              case 3:
                  $color="rgb(245, 66, 66)";
                  break;
              case 4:
                $color="rgb(147, 66, 245)";
                  break;
              case 5:
                $color="rgb(64, 64, 64)";
                  break;
              case 6:
                $color="rgb(59, 173, 196)";
                  break;
          }
          $t->color=$color;}
          $telefonos=collect($Telefonos);
        $Recados=Recado::where('cuenta','=',$Egresado->cuenta)->get();
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
          $r->color=$color;}
        return view('muestras.seg20.llamar',compact('Egresado','Telefonos','Recados'));

    }
}
