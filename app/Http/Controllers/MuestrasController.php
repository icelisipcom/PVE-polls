<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MuestrasController extends Controller
{
  public function index(){
    return view('muestras.index');
  }
}
