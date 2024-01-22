<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Symfony\Component\Process\Process; 
use Symfony\Component\Process\Exception\ProcessFailedException;
use DateTime;
use DB;
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
        $Dias=collect();
        for($i=0; $i<5;$i++){
            $date=new DateTime('01-01-2024');
            $date->modify('+ '.($dias+$i).' days'); 
            $recados=DB::table('recados')->whereDate('created_at','=',$date->format('Y-m-d'))->get();
            if($user >0 ){
                $recados->toQuery()->where('user_id',$user)->get();
            }
            $Dias->add(array(
                "dia" => $i+1,
                "fecha" =>$date,
                "recados" => $recadostoQuery()->where('status',2)->get()->count(),
                "contestadora" => $recadostoQuery()->where('status',2)->get()->count(),
                "no contesta" => $recadostoQuery()->where('status',2)->get()->count(),
                "enc2014" => $recadostoQuery()->where('status',2)->get()->count(),
                "enc2020" => $recadostoQuery()->where('status',2)->get()->count(),
            ));
        }
        dd($inicio->format('Y-m-d'),$Dias,$Dias->sum('recados'));

        return view('reports.semanal');
       }
}
