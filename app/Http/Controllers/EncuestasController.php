<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EncuestasController extends Controller
{

    public function show($id){
        return view('encuestas.show');

}
}
