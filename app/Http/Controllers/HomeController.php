<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\respuestas2;
use DB;
class HomeController extends Controller
{
    
    public function index()
    {
        
        $encuestas=DB::table('respuestas2')
        ->whereNotNull('ngr11f')
        ->get();
        $Telefonicas=$encuestas->whereNotNull('aplica')->count();
        return view('home',compact('encuestas','Telefonicas'));
    }
}
