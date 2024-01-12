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
            <th>Telefono <br> Casa</th>
            <th>llamadas</th>
            <th> </th>
          </tr>
          </thead>
          <tbody>
            @foreach($muestra as $e)
            <tr style="background-color: {{$e->color}};">
                <td>{{$e->nombre}} {{$e->PATERNO}} {{$e->materno}}</td>
                <td>{{$e->cuenta}} </td>
                <td>{{$e->telefono}} </td>
               <td>{{$e->llamadas}} </td>
                <td><a href="{{route('llamar_20',$e->cuenta)}}"> <button class="btn" style="background-color:{{Auth::user()->color}} ; color:white; margin: 0.1vw"> <i class="fa fa-phone" aria-hidden="true"> </i> &nbsp; LLAMAR </button></a>
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