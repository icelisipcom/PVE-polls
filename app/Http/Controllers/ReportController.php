<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Symfony\Component\Process\Process; 
use Symfony\Component\Process\Exception\ProcessFailedException;
use DateTime;
use DB;
use App\Models\respuestas20;
use App\Models\respuestas14;
class ReportController extends Controller
{
    public function generate($report)
       {
           $caminoalpoder=public_path();
           $process = new Process(['python3', $report.'.py'],$caminoalpoder);
           $process->run();
           if (!$process->isSuccessful()) {
               throw new ProcessFailedException($process);
           }
           $data = $process->getOutput();
           
               return response()->download(public_path('storage/'.$report.'.xlsx'));
          
       }
       public function semanal ($semana,$user=0){
        $dias=$semana*7; //convertir semanas a dias
        //la semana 1 comenzo el lunes 1 de enero
        $inicio=new DateTime('01-01-2024');
        $inicio->modify('+ '.$dias.' days');//avanzamos al lunes de la semana en cuestion
        $fin=new DateTime('01-01-2024');
        $fin->modify('+ '.($dias+5).' days'); //analogamente, avanzamos al viernes
        $Dias= collect();
        for($i=0; $i<5;$i++){
            $date=new DateTime('01-01-2024');
            $date->modify('+ '.($dias+$i).' days'); 
            $recados=DB::table('recados')->whereDate('created_at','=',$date->format('Y-m-d'))->get();
            if($user >0 ){
                $recados=$recados->where('user_id',$user);
                $encuestas20=respuestas20::where('aplica','=',$user)->whereDate('fec_capt','=',$date->format('Y-m-d'))->get();
                $encuestas14=respuestas14::where('aplica','=',$user)->whereDate('FEC_CAPT','=',$date->format('Y-m-d'))->get();
                
            }else{
                $encuestas20=respuestas20::whereDate('fec_capt','=',$date->format('Y-m-d'))->get();
                $encuestas14=respuestas14::whereDate('FEC_CAPT','=',$date->format('Y-m-d'))->get();
            }

            $Dias->push((object)['dia' => $i+1,
                'fecha' =>$date->format('Y-m-d'),
                "recados" => $recados->where('status',3)->count(),
                "contestadora" => $recados->where('status',9)->count(),
                "no_contesta" => $recados->where('status',7)->count(),
                "enc2014" => $encuestas14->count(),
                "enc2020" => $encuestas20->count(),
                "enc_inconclusas" => $recados->where('status',10)->count(),
                "correos" => $recados->where('status',8)->count(),
                "equivocados" => $recados->where('status',2)->count(),
                "no_existe" => $recados->where('status',11)->count(),
                "llamadas" => $recados->count(),
                "internet" => $recados->where('status',3)->count(),
            ]);
        }
        $Dias=collect($Dias);
        // dd($inicio->format('Y-m-d'),$Dias,$Dias->sum('recados'));

        return view('reports.semanal',compact('inicio','fin','Dias'));
       }
}
