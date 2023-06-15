<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function rep_individual()
       {
           $caminoalpoder=public_path();
           $process = new Process(['python3',$caminoalpoder.'/reporte_individual.py']);
           $process->run();
           if (!$process->isSuccessful()) {
               throw new ProcessFailedException($process);
           }
           $data = $process->getOutput();
           
               return response()->download(public_path('storage/reporte_individual.xlsx'));
          
       }
}
