@extends('layouts.app')

@section('content')
<div class="container-fluid"  background="{{asset('img/Fondo2.jpg')}}">
    <div class="padding div">
        <h1 class="text-white-50">Hola  {{Auth::user()->name }} {{Auth::user()->emojis }}</h1>
        <h1 class="text-white-50"> ¿Deseas buscar un numero de cuenta?</h1>
    </div>
    <center >
    @if($encuestas20->count()>0)

    <h1>
        ENCUESTA 2020
    </h1>
    
    <div class="col-6 col-sm-12 table-responsive">
        <table class="table  text-xl" id="myTable2">
            <thead>
                <tr>
                <th>Egresado</th>
                <th>Cuenta</th>
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
                <tr>
                    <td>{{  $e->nombre}}   {{  $e->paterno}}  {{  $e->materno }}  </td>
                    <td>{{$e->cuenta}}</td>
                    <td> @if($e->aplica ){{$e->aplica}} @else INTERNET @endif </td>
                    <td>{{$e->updated_at}}</td>
                    <td>{{$e->carrera}}</td>
                    <td>{{$e->plantel}}</td>
                    <td>@if($e->completed != 1) Inompleta @else Completa @endif</td>
                    <td>@if($e->completed != 1)  
                        <a href="{{ route('llamar_20',$e->cuenta)}}">
                            <button class="btn" style="background-color:{{Auth::user()->color}} ; color:white;">
                                <i class="fas fa-edit  "></i> Completar
                            </button>
                        </a>@endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @else
        No hay encuestas 2020 para mostrar unu, 
    @endif
    
    @if($egresados->count() > 0) 
    <h1>Egresados</h1>
    <h3>¿Deseas hacer una nueva encuesta? </h3>
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
                <tr>
                    <td>{{$eg->nombre}}  {{  $eg->paterno}}  {{  $eg->materno }}   </td>
                    <td> {{$eg->cuenta}} </td>
                    <td> </td>
                    <td>{{$eg->nombre_carrera}}</td>     
                    <td>{{$eg->nombre_plantel}}</td> 
                    <td>
                        @if($eg->muestra==3 && in_array( $eg->status,[null,0,3,4,5,6,7,8,9,6,11,12], true))
                        <a href="{{route('llamar_20',$eg->cuenta)}}">
                            <button class="btn">
                                <i class="fa fa-phone" aria-hidden="true"> </i> &nbsp; LLAMAR 
                            </button>
                        </a>
                        @endif
                        @if($eg->anio_egreso==2019 | $eg->anio_egreso==2020)
                        <a href="{{route('invitacion19',$eg->id)}}">
                            <button class="btn">
                                <i class="fa fa-mail" aria-hidden="true"> </i> &nbsp; Enviar por correo
                            </button>
                        </a>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @else
        No hay egresados que mostrar

    @endif
    
    

    @if($encuestas14->count()>0)
    <h1>
        ENCUESTA ACTUALIZACION 2014
    </h1>
    <div class="col-6 col-sm-12 table-responsive">
        <table class="table  text-xl" id="myTable3">
            <thead>
                <tr>
                <th>Egresado</th>
                <th>Cuenta</th>
                <th>Aplicador</th>
                <th>fecha</th>
                <th>Carrera</th>
                <th>Plantel</th>
                </tr>
            </thead>
            <tbody>
                @foreach($encuestas14 as $e)
                <tr>
                    <td>{{  $e->nombre}}  {{  $e->paterno}}  {{  $e->materno }}   </td>
                    <td>{{$e->cuenta}}</td>
                    <td> @if($e->aplica ){{$e->aplica}} @else INTERNET @endif </td>
                    <td>{{$e->updated_at}}</td>
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
                <tr >
                    <td>{{  $eg14->nombre}}  {{  $eg14->paterno}}  {{  $eg14->materno }}   </td>
                    <td> {{$eg14->cuenta}} </td>
                    <td> </td>
                    <td>{{$eg14->carrera}}</td>     
                    <td>{{$eg14->plantel}}</td> 
                    <td>
                        <a href="{{route('encuestas.show_14',$eg14->registro)}}">
                            <button class="btn">Hacer encuesta </button>
                        </a>
                    </td>
                    <td>
                        <a href="{{route('invitacion14',$eg14->registro)}}">
                            <button class="btn">Enviar correo </button>
                        </a>
                    </td>
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
    $(document).ready(function() {
        $('#myTable').DataTable();
        $('#myTable2').DataTable();
        $('#myTable3').DataTable();
    } );
</script>
@endpush