<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\respuestas2;
use App\Models\Carrera;
use DB;
use App\Models\User;
use App\Models\Estudio;
use App\Models\Muestra;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
class HomeController extends Controller
{
    
    public function index()
    {
        $encuestas19=DB::table('respuestas2')
        ->join('egresados','egresados.cuenta','=','respuestas2.cuenta')
        ->select('respuestas2.*','egresados.anio_egreso','egresados.carrera','egresados.plantel')
        ->where('egresados.anio_egreso','=',2019)
        ->whereNotNull('respuestas2.ngr11f')
        ->get();
        $carreras=DB::table('muestras')
        ->leftJoin('carreras', function($join)
                         {
                             $join->on('carreras.clave_carrera', '=', 'muestras.carrera_id');
                             $join->on('carreras.clave_plantel', '=', 'muestras.plantel_id');                             
                         })
       // ->rightJoin('carreras as c','c.clave_carrera','=','muestras.carrera_id')
        //->where('carreras.clave_plantel','=','muestras.clave_plantel')
        ->get();
     
        return view('home',compact('encuestas19','carreras'));
    }

    public function create_user($name, $email,$password){
      
        return User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
        ]);
    
    }
}
