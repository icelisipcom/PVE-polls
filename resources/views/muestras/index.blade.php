@extends('layouts.app')

@section('content')
<div class="container-fluid"  background="{{asset('img/Fondo2.jpg')}}">
    <div class="padding div" style="padding:30px;">
    <h1 class="text-white-50">Hola  {{Auth::user()->name }} {{Auth::user()->emojis }}</h1>
        <h1 class="text-white-50"> Estas son tus muestras:</h1>
    </div>
    <center >
  <a href="{{route('muestras20.index')}}">
    <button class='btn mybutton' >
       <br><br>ENCUESTA DE SEGUIMIENTO 2020 <br><br><br>
    </button></a>
  <a href="{{route('muestras14.index')}}">
    <button class='btn mybutton' >
       <br><br>ENCUESTA DE ACTUALIZACION 2014 <br><br><br>
    </button></a>
  </center>


    </div>
    @endsection

    @push('css')
  <style>
    
    .mybutton{
      background-color:{{Auth::user()->color}}; 
      color:white; 
      font-size:40px;
      transition-duration: 0.4s;
      width:35%; 
      height: 75%;
      

    }
    
    .mybutton:hover{
      background-color:#ffffff ; 
      color:{{Auth::user()->color}} ; 
    }
    </style>
    
    @endpush