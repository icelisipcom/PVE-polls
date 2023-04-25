<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\respuestas2;
class HomeController extends Controller
{
    
    public function index()
    {
        $encuestas=respuestas2::all();
        return view('home',compact('encuestas'));
    }
}
