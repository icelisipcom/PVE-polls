@extends('layouts.app')

@section('content')
<script>
  console.log('script jalando ¿?');
  $(document).ready(function() {
    $('#myTable').DataTable();
} );
 </script>
<div class="container-fluid"  background="{{asset('img/Fondo2.jpg')}}">
    <div style="padding:30px;">
    <h1 class="text-white-50">  </h1>
        <h1 class="text-white-50"> </h1>
    </div>
    <div class="padding-conteiner" style="padding: 30px">
        <table class="table text-lg font-large" id='myTable'>
          <thead>
            <tr>
            <th>Nombre</th>
            <th>Num. Cuenta</th>
            <th>Telefono</th>
            <th>Correp</th></tr>
          </thead>
          <tbody>
            @foreach($Egresados as $e)
            <tr>
                <td>{{$e->nombre}} {{$e->paterno}} {{$e->materno}}</td>
                <td>{{$e->cuenta}} </td>
                <td>{{$e->telefono}} </td>
                <td>{{$e->correo}} </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
</div>
@endsection 
