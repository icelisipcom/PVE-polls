@extends('layouts.app')

@section('content')
    <div class="container-fluid" style="background-color: transparent;">
        
    <h1 class="text-black-50">Hola  {{Auth::user()->name }} {{Auth::user()->emojis }}</h1>
        <h1 class="text-black-50"> Deseas Envair un aviso de privacidad?</h1>
        <center >
        <form action="{{ route('enviar_aviso')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input  width="50%" type="email" class="form-control" name="correo" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre del Egresado</label>
    <input  width="50%" type="text" name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <button type="submit" class="btn btn-primary">  <i class="fas fa-paper-plane"></i> Enviar</button>
 
  </form>
   </center>
    </div>
@endsection
 