@extends('layouts.app')

@section('content')

<div class="container-fluid"  background="{{asset('img/Fondo2.jpg')}}">
    <div style="padding:30px;">
     <div class='row'>
      <div class='col'><h1 class="text-white-25" style="font-color: white; font-weight: bold;">{{$Carrera->carrera}}  </h1> 
    <h1 class="text-white-25" style="font-color: white">{{$Carrera->plantel}}  </h1> 
    </div>
      <div class='col'></div>
      <div class='col'>
        <table>
          <thead> 
            <tr> 
              <th>Codigos</th>
            </tr>         
          </thead>
          <tbody>
            @foreach($Codigos as $c)
            <tr>
            <td style="background-color:{{$c->color_rgb}}"> {{$c->description}}</td>
            </tr> @endforeach
          </tbody>
        </table>
      </div>
     </div>
    </div>
    <div class="col-6 col-sm-12 table-responsive">
        <table class="table text-sm " id="myTable" style="table-layout:fixed; font-size:50%">
          <thead>
            <tr>
            <th>Nombre</th>
            <th>Paterno </th>
            <th>Materno</th>
            <th>Num. Cuenta</th>
            
            <th>llamadas</th>
            <th>status</th>
            <th> </th>
          </tr>
          </thead>
          <tbody>
            @foreach($muestra as $e)
            <tr style="background-color: {{$e->color_rgb}}; ">
                <td>{{$e->nombre}} </td>
                <td> {{$e->paterno}} </td>
                <td> {{$e->materno}}</td>
                
                <td>{{$e->cuenta}} </td>
               <td>{{$e->llamadas}} </td>
               <td> {{$e->description}}</td>
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
    $('#myTable').DataTable(
      @if(Auth::user()->id==10)
      {paging: false}
      @endif
    );
} );
 </script>
@endpush