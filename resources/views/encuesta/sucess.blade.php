@extends('layouts.app')

@section('content')
<div class="container-fluid"  background="{{asset('img/Fondo2.jpg')}}">
    <div class="padding div" style="padding:30px;">
    <h1 class="text-white-50">Hola  {{Auth::user()->name }} {{Auth::user()->emojis }}</h1>
        <h1 class="text-white-50"> Deseas Enviar un aviso de privacidad?</h1>
    </div>
    <center >
    <br><br>
       <h1>
        Encuesta guardada con exito
       </h1>

       <button>Descargar uwu</button>
   </center>
    </div>
@endsection
