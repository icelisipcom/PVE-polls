@extends('layouts.app')

@section('content')

<div class="container-fluid"  background="{{asset('img/Fondo2.jpg')}}">
    <div style="padding:30px;">
     <div class='row'>
      <div class='col'><h1 class="text-white-25" style="font-color: white; font-weight: bold;">  @if($carrera>0) {{$Carrera->carrera}} @endif </h1> 
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
       <table class="table text-lg" id="myTable">
          <thead >
            <tr >
            <th >Nombre</th>
            <th>Paterno </th>
            <th>Materno</th>
            <th>Num. Cuenta</th>
            @if($carrera==0)
            <th> Carrera</th>
            @endif
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
                @if($carrera==0)
            <td> {{$e->name_carrera}} </td>
            @endif
               <td>{{$e->llamadas}} </td>
               <td @if($e->description=='') class='focoso' @endif> {{$e->description}}</td>
                <td> 
                
                <a href="{{route('llamar_20',$e->cuenta)}}"> <button class="btn" style="background-color:{{Auth::user()->color}} ; color:white; margin: 0.1vw"> <i class="fa fa-phone" aria-hidden="true"> </i> &nbsp; LLAMAR </button></a>
              
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
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
@stop

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />


<style>
  thead tr:first-child th {
    position: sticky;
    z-index: 12;
    top: 0;
    background: white;
}
</style>
@stop

@push('js')
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
<script>
 
  console.log('script jalando ¿?');
  $(document).ready(function() {
    $('#myTable').DataTable({
      
      sorting: [[5, 'desc'],[1, 'asc']],
      fixedHeader: true,
      paging: false,
      responsive: true
    });
} );

document.getElementById('myTable').style.cssText += 'position: sticky; z-index: 1; top:0;';
 </script>

 
@endpush