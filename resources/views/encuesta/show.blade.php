@extends('layouts.app')

@section('content')

<div class="container-fluid"  background="{{asset('img/Fondo2.jpg')}}">
    <div style="padding:30px;">
    <h1 class="text-white-50">
                 @if($Encuesta)
                 COMPLETAR ENCUESTA @else
                 HACER NUEVA ENCUESTA @endif </h1>
        <h1 class="text-white-50"> </h1>
        <div >
        
        <table class="table text-xl">
          <TR>
            <td>Egresad@: </td>
            <td> {{$Egresado->nombre}} {{$Egresado->paterno}} {{$Egresado->materno}} </td>
          </TR>
          <tr>
            <td>Promedio:</td> <td>{{$Egresado->promedio}}</td>
          </tr>
          <tr><td>Carrera:</td><td> {{$Carrera}}</td> </tr>
          <tr><td>Plantel:</td><td> {{$Plantel}}</td> </tr>
        </table>
        <br>
        @if($Encuesta)
        Numeros de telefono ingresados en la encuesta:
        {{$Encuesta->telcel}}
        {{$Encuesta->telcasa}}
        {{$Encuesta->teltra}}
        @endif
        </div>
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