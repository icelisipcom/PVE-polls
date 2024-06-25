
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
            <div class="row link-card"> 
                <div class="col">
                 Actualizacion 2014 internet
                </div>
                <div class="col">
                 <a href="https://www.pveaju.unam.mx/encuesta/01/act_14/encuesta_actualizacion.php">https://www.pveaju.unam.mx/encuesta/01/act_14/encuesta_actualizacion.php</a>
                </div>
            </div>
            <br>
            <div class="row link-card"> 
                <div class="col">
                 Actualizacion 2014 Telefonica
                </div>
                <div class="col">
                 <a href="https://www.pveaju.unam.mx/encuesta/01/act_14/tel_act1_6.php">https://www.pveaju.unam.mx/encuesta/01/act_14/tel_act1_6.php</a>
                </div>
            </div>
            <br>
            <div class="row link-card"> 
                <div class="col">
                 Página del seguimiento
                </div>
                <div class="col">
                 <a href="https://www.pveaju.unam.mx/encuesta/01/seguimiento2024/">https://www.pveaju.unam.mx/encuesta/01/seguimiento2024/</a>
                </div>
            </div>

            <a href="https://encuestas.pveaju.unam.mx/encuesta_generacion/2020">
            <div class="row link-card" > 
                <div class="col title">
                 Encuesta por Internet Gen 2020
                </div>
                <div class="col link">
                 https://encuestas.pveaju.unam.mx/encuesta_generacion/2020
                </div>
            </div></a>
            <div class="row link-card"> 
                <div class="col">
                 Encuesta por Internet Todas la carreras y generaciones
                </div>
                <div class="col">
                 <a href="https://encuestas.pveaju.unam.mx/encuesta_generacion/general">https://encuestas.pveaju.unam.mx/encuesta_generacion/general</a>
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
    .link-card{
        padding: 2.9vw; 
        background-color: #002B7A;
        border-radius: 2.3vw 4.2vw;
        border-color: white;
        margin: 2.3vw;
        color:white;
        font-size: 2.0vw;
        width: auto;
    }
    .link-card:hover {
	background-color: #05307f;
	transform: translateY(-3px);
	transition: 0.2s all ease;
}
    .link{
        padding: 0.5vw;
        color:#FAFAFA;

    }
</style>
@endpush

