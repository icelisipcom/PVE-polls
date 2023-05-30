@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        
    <h1 class="text-black-50"></h1>
        <h1 class="text-black-50">Estado del Estudio 2019</h1>
        <div class="col-6 col-sm-12 table-responsive">
                <table class="table  table-striped text-lg font-medium" id="tabla">
                    <thead>
                        <tr class="text-center">
                            <th> </th>
                            <th></th>
                            <th colspan="3">Realizadas</th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr class="text-center">
                            
                            <th rowspan="2">Plantel</th>
                            <th rowspan="2">Carrera</th>
                            <th>Telefonicas</th>
                            <th>Internet</th>
                            <th>Total</th>
                            <th rowspan="2" >Requeridas</th>
                            <th rowspan="2">Faltan</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                      

                        @foreach($carreras  as $c)
                        <tr class="text-center" @if( $c->requeridas_5 - $encuestas19->where('plantel','=',$c->clave_plantel)->where('carrera','=',$c->clave_carrera)->count()<=0) style="color:#22B14C" @endif>
                        
                         <td> {{$c->plantel}}</td>
                         <td> {{$c->carrera}}</td>
                         <td> {{$encuestas19->where('plantel','=',$c->clave_plantel)->where('carrera','=',$c->clave_carrera)->whereNotNull('aplica')->count()}}</td>
                         <td> {{$encuestas19->where('plantel','=',$c->clave_plantel)->where('carrera','=',$c->clave_carrera)->whereNull('aplica')->count()}}</td>
                         <td> {{$encuestas19->where('plantel','=',$c->clave_plantel)->where('carrera','=',$c->clave_carrera)->count()}}</td>
                         <td> {{$c->requeridas_5}}</td>
                         <td> {{$c->requeridas_5 - $encuestas19->where('plantel','=',$c->clave_plantel)->where('carrera','=',$c->clave_carrera)->count()}}</td>
                         
                         
                         <td> </td>
                        </tr>
                       
                        @endforeach
                    </tbody>
                </table>
        </div>
        
    </div>
@endsection
 @section('js')
 <script>
    $(document).ready(function() {
$('#tabla').dataTable();
} );
 </script>
 @stop