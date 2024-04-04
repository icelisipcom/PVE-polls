<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Reactivo;

class ReactivosController extends Controller
{
  public function index(){
  $Reactivos=Reactivo::all();
  return view('admin.reactivos.index',compact('Reactivos'));
  }
  public function edit( $id){
 $Reactivo=Reactivo::find($id);
//  dd($Reactivo);
 return view('admin.reactivos.edit',compact('Reactivo'));
  }
  public function create(){

  }
  public function store(){

  }
  public function delete(){

  }
  public function update(Request $request,$id){
        $Reactivo=Reactivo::find($id);
        $Reactivo->update($request->except(['_token', '_method']));
        $Reactivo->save();
        return redirect()->route('reactivos.index');
  }
}
