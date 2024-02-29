@extends('layouts.fast')

@section('content')

<div class="container-fluid"  background="{{asset('img/Fondo2.jpg')}}">
    <h1  class="encabezado">{{$Reactivo->description}} </h1>
    <div class="reactive-square">
    <form action="{{ route('fast.store',[$Encuesta->registro,$Reactivo->clave,$type]) }}" method="POST" enctype="multipart/form-data" id='forma_sagrada' name='forma'>
@csrf
    @if($Reactivo->type=='option')
    <select name="respuesta" id="">
        @foreach($Options as $o)
<option value="{{$o->clave}}"> {{$o->descripcion}}</option>
        @endforeach
    </select>
    <br>
    @include('fast.components.button')
    @endif

    @if($Reactivo->type=='number')
    <input type="number" name="respuesta">
    <br>
    @include('fast.components.button')
    @endif

</form>
</div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
@stop
