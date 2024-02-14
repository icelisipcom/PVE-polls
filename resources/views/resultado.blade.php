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
                <table class="table  text-xl" id="myTable2">
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
            <tr @if(is_null($e->ngr11f )) style="color:#b0a46f"  @else style="background-color:rgba(92, 191, 98,0.75)" @endif>
                <td>{{  $e->nombre}}   {{  $e->paterno}}  {{  $e->materno }}  </td>
                <td> @if($e->aplica ){{$e->aplica}} @else INTERNET @endif </td>
                <td>{{$e->fec_capt}}</td>
                <td>{{$e->nbr3}}</td>
                <td>{{$e->nbr2}}</td>
                <td> @if(is_null($e->ngr11f ))Inompleta @else Completa @endif</td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    @else <p>No hay encuestas 2019 para mostrar</p>
    <br>
        @endif
        @if($encuestas20->count()>0)
        <h1>
            ENCUESTA 2020
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
            <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($encuestas20 as $e)
            <tr style="color:#b0a46f" >
                <td>{{  $e->nombre}}   {{  $e->paterno}}  {{  $e->materno }}  </td>
                <td> @if($e->aplica ){{$e->aplica}} @else INTERNET @endif </td>
                <td>{{$e->fec_capt}}</td>
                <td>{{$e->nbr3}}</td>
                <td>{{$e->nbr2}}</td>
                <td>@if($e->completed != 1) Inompleta @else Completa @endif</td>
                <td>@if($e->completed != 1)  <a href="{{ route('edit_20',[ $e->registro,'SEARCH'])}}"> <button class="btn" style="background-color:{{Auth::user()->color}} ; color:white;">
                                            <i class="fas fa-edit  "></i> Completar</button>
                                        </a>@endif</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    @else
    No hay encuestas 2020 para mostrar unu, @if($egresados->count() > 0) deseas hacer una nueva encuesta¿?
    <div class="col-6 col-sm-12 table-responsive">
                <table class="table  text-xl" id="myTable">
        <thead>
            <tr>
            <th>Egresado</th>
            <th>cuenta</th>
            <th> </th>
            <th>Carrera</th>
            <th>Plantel</th>
            <th></th>
            </tr>
        </thead>
        <tbody>
          @foreach($egresados as $eg)
            <tr style="color:#b0a46f" >
                <td>{{$eg->nombre}}  {{  $eg->paterno}}  {{  $eg->materno }}   </td>
                <td> {{$eg->cuenta}} </td>
                <td> </td>
                <td>{{$eg->carrera}}</td>     
                <td>{{$eg->plantel}}</td> 
                <td>@if($eg->muestra==3 && in_array( $eg->status,[null,0,3,4,5,6,7], true))
                <a href="{{route('llamar_20',$eg->cuenta)}}"> <button class="btn" style="background-color:{{Auth::user()->color}} ; color:white; margin: 0.1vw"> <i class="fa fa-phone" aria-hidden="true"> </i> &nbsp; LLAMAR </button></a>
                @endif
                </td>
            
            </tr> 
           @endforeach
        </tbody>
    </table>
    </div>
       
       @endif
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
            <th>fecha</th>
            <th>Carrera</th>
            <th>Plantel</th>
            </tr>
        </thead>
        <tbody>
            @foreach($encuestas14 as $e)
            <tr style="color:#b0a46f" >
                <td>{{  $e->nombre}}  {{  $e->PATERNO}}  {{  $e->materno }}   </td>
                <td> @if($e->APLICA ){{$e->APLICA}} @else INTERNET @endif </td>
                <td>{{$e->FEC_CAPT}}</td>
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
     @if($eg14) 
    deseas hacer una nueva encuesta¿?
    <div class="col-6 col-sm-12 table-responsive">
                <table class="table  text-xl">
        <thead>
            <tr>
            <th>Egresado</th>
            <th>cuenta</th>
            <th> </th>
            <th>Carrera</th>
            <th>Plantel</th>
            <th></th>
            <th></th>
            </tr>
        </thead>
        <tbody>
          
            <tr style="color:#b0a46f" >
                <td>{{  $eg14->nombre}}  {{  $eg14->PATERNO}}  {{  $eg14->materno }}   </td>
                <td> {{$eg14->CUENTA}} </td>
                <td> </td>
                <td>{{$eg14->carrera}}</td>     
                <td>{{$eg14->plantel}}</td> 
                <td><a href="{{route('encuestas.show_14',$eg14->REGISTRO)}}"> <button class="btn" style="background-color:{{Auth::user()->color}} ; color:white;">Hacer encuesta </button></a></td>
                <td><a href="{{route('invitacion14',$eg14->REGISTRO)}}"> <button class="btn" style="background-color:{{Auth::user()->color}} ; color:white;">Enviar correo </button></a></td>
            
            </tr> 
           
        </tbody>
    </table>
    </div>
    
    @endif
    @endif
   </center>
    </div>
@endsection

@push('js')
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
<script>
 
  console.log('script jalando ¿?');
  $(document).ready(function() {
    $('#myTable').DataTable();
} );
$(document).ready(function() {
    $('#myTable2').DataTable();
} );
 </script>
@endpush