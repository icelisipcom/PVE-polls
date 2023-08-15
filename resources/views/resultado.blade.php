@extends('layouts.app')

@section('content')
<div class="container-fluid"  background="{{asset('img/Fondo2.jpg')}}">
    <div class="padding div" style="padding:30px;">
    <h1 class="text-white-50">Hola  {{Auth::user()->name }} {{Auth::user()->emojis }}</h1>
        <h1 class="text-white-50"> ¿Deseas buscar un numero de cuenta?</h1>
    </div>
    <center >
        @if($encuestas19->count()>0)
        <h1>
            ENCUESTA 2019
        </h1>
        <div class="col-6 col-sm-12 table-responsive">
                <table class="table  text-xl">
        <thead>
            <tr>
            <th>Egresado</th>
            <th>Aplicador</th>
            <th>Fecha</th>
            <th>Carrera</th>
            <th>Plantel</th>
            <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($encuestas19 as $e)
            <tr style="color:#b0a46f" >
                <td>{{  $e->nombre}}   {{  $e->paterno}}  {{  $e->materno }}  </td>
                <td> @if($e->aplica ){{$e->aplica}} @else INTERNET @endif </td>
                <td>{{$e->fec_capt}}</td>
                <td>{{$e->nbr3}}</td>
                <td>{{$e->nbr2}}</td>
                <td>@if($e->ngr11f>=0) Completa @else Incompleta @endif</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    @else
    No hay encuestas 2019 para mostrar unu
    @endif

    @if($encuestas14->count()>0)
        <h1>
            ENCUESTA ACTUALIZACION 2014
        </h1>
        <div class="col-6 col-sm-12 table-responsive">
                <table class="table  text-xl">
        <thead>
            <tr>
            <th>Egresado</th>
            <th>Aplicador</th>
            <th>Carrera</th>
            <th>Plantel</th>
            </tr>
        </thead>
        <tbody>
            @foreach($encuestas14 as $e)
            <tr style="color:#b0a46f" >
                <td>{{  $e->nombre}}  {{  $e->PATERNO}}  {{  $e->materno }}   </td>
                <td> @if($e->APLICA ){{$e->APLICA}} @else INTERNET @endif </td>
                <td>{{$e->carrera}}</td>     
                <td>{{$e->plantel}}</td> 
            
            </tr> 
            @endforeach
        </tbody>
    </table>
    </div>
    @else
    <br>
    No hay encuestas 2014 para mostrar unu
    @endif
   </center>
    </div>
@endsection
