@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        
    <h1 class="text-black-50">Binenvenid@!!  {{Auth::user()->name }}🥳🥳🥳🥳</h1>
        <h1 class="text-black-50">Estado del Estudio 2019</h1>
        <div class="col-6 col-sm-12 table-responsive">
                <table class="table  table-striped text-lg font-medium" id="tabla">
                    <thead>
                        <tr class="text-center">
                            
                            <th>Plantel</th>
                            <th>Carrera</th>
                            <th>Realizadas</th>
                            
                            
                            <th>Requeridas</th>
                            <th>Faltan</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                      

                        @foreach($carreras  as $c)
                        <tr class="text-center" @if( $c->requeridas_5 - $encuestas19->where('plantel','=',$c->clave_plantel)->where('carrera','=',$c->clave_carrera)->count()<=0) style="color:#22B14C" @endif>
                        
                         <td> {{$c->plantel}}</td>
                         <td> {{$c->carrera}}</td>
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