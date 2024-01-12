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
        $Recados=Recado::where('cuenta','=',$Egresado->cuenta)->get();
        return view('muestras.seg20.llamar',compact('Egresado','Telefonos','Recados'));

    }
}
