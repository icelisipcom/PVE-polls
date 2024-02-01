@extends('layouts.app')

@section('content')
<div class="container-fluid"  background="{{asset('img/Fondo2.jpg')}}">
    <div class="padding div" style="padding:30px;">
    <h1 class="text-white-50">Editar Telefono para {{$Egresado->nombre }} </h1>
        <h1 class="text-white-50"></h1>
    </div>
    <center >
    <br><br>
        <form action="{{ route('actualizar_telefono',[$Telefono->id,$Egresado->carrera,$encuesta])}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
    <label for="exampleInputEmail1">Telefono</label>
    <input  style="width:50%" type="text" class="form-control" value="{{$Telefono->telefono}}" name="telefono" aria-describedby="emailHelp" >
   </div>
   
  <br>
  <button type="submit" style="color:rgb({{Auth::user()->color}})" class="btn btn-primary btn-lg">  <i class="fas fa-store"></i> Guardar</button>
 
  </form>
   </center>
    </div>
@endsection
