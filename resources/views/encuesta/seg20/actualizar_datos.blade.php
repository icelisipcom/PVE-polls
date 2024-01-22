@extends('layouts.app')

@section('content')

<div class="container-fluid"  background="{{asset('img/Fondo2.jpg')}}">
    <div style="padding:30px;">
    <h1 class="text-white-50"> DATOS DE CONTACTO PARA EL EGRESADO </h1>
        <h1 class="text-white-50">{{$Egresado->nombre}} {{$Egresado->paterno}} {{$Egresado->materno}}   </h1>
    </div>
    <div class="col-6 col-lg-12 table-responsive">
    <div class="col-sm-12 text-right">
            
                <a href="{{ route('agregar_correo',[$Egresado->cuenta,$Egresado->carrera])}}">
                  <button class="btn" style="background-color:{{Auth::user()->color}} ; color:white; margin: 0.1vw"> <i class="fas fa-plus-circle"></i>&nbsp; Nuevo Correo </button>
                    
                </a>
                
            </div>
        <table class="table text-xl " id="myTable" style="table-layout:fixed;">
          <thead>
            <tr>
            
            <th>Num. Cuenta</th>
            <th style="width:30%; word-wrap: break-word">Correo</th>
            <th>status</th>
            <th> </th>
            <th></th>
          </tr>
          </thead>
          <tbody>
            @foreach($Correos as $c)
            <tr >
                
                <td>{{$c->cuenta}} </td>
                <td style="width:40%; word-wrap: break-word">{{$c->correo}} </td>
               <td>{{$c->status}} </td>
                <td><a href="{{route('editar_correo',[$c->id,$Egresado->carrera])}}"> <button class="btn" style="background-color:{{Auth::user()->color}} ; color:white; margin: 0.1vw"> <i class="fa fa-edit" aria-hidden="true"> </i> &nbsp; EDITAR </button></a>
              </td>
              <td><a href="{{route('comenzar_encuesta_2020',[$c->id,$Egresado->cuenta,$Egresado->carrera])}}"> <button class="btn" style="background-color:{{Auth::user()->color}} ; color:white; margin: 0.1vw"> <i class="fas fa-paper-plane" aria-hidden="true"> </i> &nbsp; ENVIAR AVISO <br> Y ENCUESTAR</button></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
@stop

@push('js')
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
<script>
 
  console.log('script jalando ¿?');
  $(document).ready(function() {
    $('#myTable').DataTable();
} );
 </script>
@endpush