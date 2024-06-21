
@extends('layouts.app')

@section('content')
<div class="container-fluid"  background="{{asset('img/Fondo2.jpg')}}">
    <div class="padding div" style="padding:30px;">
    <h1 class="text-white-50">Hola  {{Auth::user()->name }} {{Auth::user()->emojis }}</h1>
        <h1 class="text-white-50"> Links Actualizados al</h1>
    </div>
    <center >
   
<div style="color : black; background-color:rgba(250,250,250,0.57); font-size:1.5vw">
        <div class="col" style="padding:7.5vw;"> 
            <div class="row"> 
                <div class="col">
                 Actualizacion 2014 internet
                </div>
                <div class="col">
                 <a href="https://www.pveaju.unam.mx/encuesta/01/act_14/encuesta_actualizacion.php">https://www.pveaju.unam.mx/encuesta/01/act_14/encuesta_actualizacion.php</a>
                </div>
            </div>
            <br>
            <div class="row"> 
                <div class="col">
                 Actualizacion 2014 Telefonica
                </div>
                <div class="col">
                 <a href="https://www.pveaju.unam.mx/encuesta/01/act_14/tel_act1_6.php">https://www.pveaju.unam.mx/encuesta/01/act_14/tel_act1_6.php</a>
                </div>
            </div>
            <br>
            <div class="row"> 
                <div class="col">
                 Página del seguimiento
                </div>
                <div class="col">
                 <a href="https://www.pveaju.unam.mx/encuesta/01/seguimiento2024/">https://www.pveaju.unam.mx/encuesta/01/seguimiento2024/</a>
                </div>
            </div>
        </div>
</div>

   </center>
    </div>
@endsection


@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
<style>
    .stat-card{
        padding: 2.9vw;
        background-color: #002B7A;
        border-radius: 2.3vw 4.2vw;
        margin: 2.3vw;
        color:white;
        font-size: 2.0vw;
        width: auto;

    }
    .data-card{
        padding: 0.5vw;
        background-color: #a67e0e;
        border-radius: 1.3vw;
        color:white;
        margin-right:10.4vw;
        font-size: 4.6vw;
        width:60%;
        font-wight: bold;


    }
</style>
@endpush

