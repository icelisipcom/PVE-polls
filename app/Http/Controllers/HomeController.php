<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\respuestas2;
use App\Models\respuestas14;
use App\Models\Carrera;
use DB;
use App\Models\User;
use App\Models\Estudio;
use App\Models\Egresado;
use App\Models\Muestra;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use ArielMejiaDev\LarapexCharts\Facades\LarapexChart;

use Symfony\Component\Process\Process; 
use Symfony\Component\Process\Exception\ProcessFailedException; 
class HomeController extends Controller
{
    
    public function index()
    {
        $encuestas19=DB::table('respuestas2')
        ->join('egresados','egresados.cuenta','=','respuestas2.cuenta')
        ->select('respuestas2.*','egresados.anio_egreso','egresados.carrera','egresados.plantel')
        ->where('egresados.anio_egreso','=',2019)
        ->whereNotNull('respuestas2.UTILIZA')
        ->get();
        $carreras=DB::table('muestras')
        ->leftJoin('carreras', function($join)
                         {
                             $join->on('carreras.clave_carrera', '=', 'muestras.carrera_id');
                             $join->on('carreras.clave_plantel', '=', 'muestras.plantel_id');                             
                         })
        ->get();
        
        $requeridas=0;
        foreach($carreras as $c){
            $faltan=($c->requeridas_5 -$encuestas19->where('carrera','=',$c->clave_carrera)->where('plantel','=',$c->clave_plantel)->count());
            if($faltan>0){
                $requeridas=$requeridas+$faltan;
            }
        }
        //$requeridas=$carreras->sum('requeridas_5')-$encuestas19->count();
        $internet=$encuestas19->whereNull('aplica')->count();
        $telefonicas=$encuestas19->whereNotNull('aplica')->count();
        $chart = LarapexChart::setTitle('Encuestas realizadas')
        ->setColors(['#D1690E', '#D1330E','#D19914'])
            ->setLabels(['Realizadas por Internet','Realizadas Telefonica', 'Por hacer'])
            ->setDataset([$internet,$telefonicas, $requeridas]);
        

        $encuestas14=respuestas14::all();
        
        #Grafica de encuestadores
        $moni=$encuestas19->where('aplica', '=' ,'12')->count();
        $ere=$encuestas19->where('aplica', '=' ,'17')->count();
        $cesar=$encuestas19->where('aplica', '=' ,'15')->count();
        $eli=$encuestas19->where('aplica', '=' ,'22')->count();
        $ivon=$encuestas19->where('aplica', '=' ,'21')->count();

        $moni14=respuestas14::where('aplica', '=' ,'12')->count();
        $ere14=respuestas14::where('aplica', '=' ,'17')->count();
        $cesar14=respuestas14::where('aplica', '=' ,'15')->count();
        $eli14=respuestas14::where('aplica', '=' ,'22')->count();
        $ivon14=respuestas14::where('aplica', '=' ,'21')->count();
        
        $aplica_chart = LarapexChart::barChart()
        ->setTitle('Conteo por encuestador')
        ->setSubtitle('enc2019 vs enc2014 actualizacion')
         ->addData('2019', [$moni, $ere,$cesar,$eli,$ivon])
         ->addData('2014', [$moni14, $ere14,$cesar14,$eli14,$ivon14])
         ->setColors(['#D1690E', '#EB572F'])
         ->setXAxis(['Monica', 'Erendira', 'Cesar', 'Elizabeth', 'Ivonne']);
    
         
        return view('home',compact('encuestas19','carreras','chart','aplica_chart'));
    }

    public function encuesta_2019(){
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
        ->select('muestras.*','carreras.carrera','carreras.plantel','carreras.clave_carrera','carreras.clave_plantel')
        ->get();
       
        return view('encuesta_2019',compact('encuestas19','carreras'));
    }

    public function aviso(){
      
        return view('aviso');
    }

    public function invitacion($registro){
        $Egresado=respuestas14::find($registro);   
        return view('invitacion',compact('Egresado'));
   
      }
    public function invitacion19($id){
        $Egresado=Egresado::find($id);   
        $Carrera=Carrera::where('clave_carrera','=',$Egresado->carrera)->first()->carrera;
        $Plantel=Carrera::where('clave_plantel','=',$Egresado->plantel)->first()->plantel;
        
        return view('invitacion19',compact('Egresado','Carrera','Plantel'));
    }

    public function buscar(){
        return view('buscar');
    
    }
    
    public function resultado(Request $request){
        $encuestas20=DB::table('respuestas20')
        ->join('egresados','egresados.cuenta','=','respuestas20.cuenta')
        ->select('respuestas20.*','egresados.anio_egreso','egresados.carrera','egresados.plantel')
        ->where('egresados.anio_egreso','=',2020)
        ->where('respuestas20.cuenta','=',(int)$request->nc)
        ->get(); 
        $encuestas19=DB::table('respuestas2')
        ->join('egresados','egresados.cuenta','=','respuestas2.cuenta')
        ->select('respuestas2.*','egresados.anio_egreso','egresados.carrera','egresados.plantel')
        ->where('egresados.anio_egreso','=',2019)
        ->where('respuestas2.cuenta','=',(int)$request->nc)
        ->get(); 
        $egresados=Egresado::where('cuenta',(int)$request->nc)->get();
        $encuestas14=DB::table('respuestas14')
        ->where('respuestas14.cuenta','=',$request->nc)
        ->whereNotNull('respuestas14.NGR11')
        ->get(); 
        $eg14=DB::table('respuestas14')
        ->where('respuestas14.cuenta','=',$request->nc)
        ->whereNull('respuestas14.NGR11')
        ->first();       
        return view('resultado',compact('encuestas20','encuestas19','encuestas14','egresados','eg14'));

    
    }
    public function resultado_fonetico(Request $request){

        $encuestas20=DB::table('respuestas20')
        ->join('egresados','egresados.cuenta','=','respuestas20.cuenta')
        ->select('respuestas20.*','egresados.anio_egreso','egresados.carrera','egresados.plantel')
        ->where('egresados.anio_egreso','=',2020)
        ->where('respuestas20.nombre','like','%'.mb_strtoupper($request->name, 'UTF-8').'%')
        ->get(); 
        
        $encuestas19=DB::table('respuestas2')
        ->join('egresados','egresados.cuenta','=','respuestas2.cuenta')
        ->select('respuestas2.*','egresados.anio_egreso','egresados.carrera','egresados.plantel')
        ->where('egresados.anio_egreso','=',2019)
        ->where('respuestas2.nombre','like','%'.mb_strtoupper($request->name, 'UTF-8').'%')
        ->get(); 
        $egresados=Egresado::where('nombre','like','%'.mb_strtoupper($request->name, 'UTF-8').'%')->get();
        if($request->paterno){
            $egresados=$egresados->toQuery()->where('paterno','like','%'.mb_strtoupper($request->paterno, 'UTF-8').'%')->get();
        }
        if($request->materno){
            $egresados=$egresados->toQuery()->where('materno','like','%'.mb_strtoupper($request->materno, 'UTF-8').'%')->get();
        }
        $encuestas14=DB::table('respuestas14')
        ->where('respuestas14.cuenta','=',$request->nc)
        ->whereNotNull('respuestas14.NGR11')
        ->get(); 
        $eg14=DB::table('respuestas14')
        ->where('respuestas14.cuenta','=',$request->nc)
        ->whereNull('respuestas14.NGR11')
        ->first();       
        return view('resultado',compact('encuestas20','encuestas14','egresados','eg14','encuestas19'));

    
    }
    public function enviar_aviso(Request $request){
      
           $caminoalpoder=public_path();
           $process = new Process([env('PY_COMAND'),$caminoalpoder.'/aviso.py',$request->nombre,$request->correo]);
           $process->run();
           if (!$process->isSuccessful()) {
               throw new ProcessFailedException($process);
           }
           $data = $process->getOutput();
           return redirect()->route('aviso');
    
    }
    public function enviar_invitacion(Request $request){
      
        if($request->anio==2014){
            $link="https://www.pveu.unam.mx/encuesta/01/act_14/encuesta_actualizacion.php";
        }else{
            $link="https://www.pveu.unam.mx/encuesta/01/global/exalumno2.html";
        }
        $caminoalpoder=public_path();
        $process = new Process([env('PY_COMAND'),$caminoalpoder.'/invitacion14.py',$request->nombre,$request->correo,$request->cuenta,$request->carrera,$request->plantel,$link]);
        $process->run();
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }
        $data = $process->getOutput();
        return redirect()->route('aviso');
 }
}

