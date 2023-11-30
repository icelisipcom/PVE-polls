@extends('layouts.app')

@section('content')

<div class="container-fluid"  background="{{asset('img/Fondo2.jpg')}}">
    <div style="padding:30px;">
    <h1 class="text-white-50">  </h1>
        <h1 class="text-white-50"> </h1>
    </div>
    <div class="col-6 col-lg-12 table-responsive">
        <table class="table text-xl " id="myTable" style="table-layout:fixed;">
          <thead>
            <tr>
            <th>Nombre</th>
            <th>Num. Cuenta</th>
            <th>Telefono <br> Trabajo</th>
            <th>Telefono <br> Casa</th>
            <th>Correo</th>
            <th> </th>
          </tr>
          </thead>
          <tbody>
            @foreach($muestra as $e)
            <tr>
                <td>{{$e->nombre}} {{$e->PATERNO}} {{$e->materno}}</td>
                <td>{{$e->CUENTA}} </td>
                <td>{{$e->TELTRA}} </td>
                <td>{{$e->TELCASA}} </td>
                <td style="word-wrap:break-word;">{{$e->NAR1_A}} </td>
                <td><a href="{{route('encuestas.show_14',$e->REGISTRO)}}"> <button class="btn" style="background-color:{{Auth::user()->color}} ; color:white;">Hacer encuesta </button></a></td>
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