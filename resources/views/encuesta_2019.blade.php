@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        
    <h1 class="text-black-50"></h1>
        <h1 class="text-white-50">Estado del Estudio 2019</h1>
        <div class="col-6 col-sm-12 table-responsive">
                <table class="table table-striped text-xl" id="myTable">
                    <thead>
                       
                        <tr class="text-center">
                            
                            <th>Plantel</th>
                            <th >Carrera</th>
                            <th>Telefonicas</th>
                            <th>Internet</th>
                            <th>Total</th>
                            <th >Requeridas</th>
                            <th >Faltan</th>
                            <th> </th>
                            
                        </tr>
                    </thead>
                    <tbody>
                      

                        @foreach($carreras  as $c)
                        <tr class="text-center" @if( $c->requeridas_5 - $encuestas19->where('plantel','=',$c->clave_plantel)->where('carrera','=',$c->clave_carrera)->count()<=0)
                         
                           @if($encuestas19->where('plantel','=',$c->clave_plantel)->where('carrera','=',$c->clave_carrera)->whereNotNull('aplica')->count()>=$c->requeridas_5/2 )
                           style="color:#22B14C" 
                           @else
                           style="color:#bdb706" 
                           @endif
                         @else style="color:#b0a46f" 
                         @endif>
                        
                         <td> {{$c->plantel}}</td>
                         <td> {{$c->carrera}}</td>
                         <td> {{$encuestas19->where('plantel','=',$c->clave_plantel)->where('carrera','=',$c->clave_carrera)->whereNotNull('aplica')->count()}}</td>
                         <td> {{$encuestas19->where('plantel','=',$c->clave_plantel)->where('carrera','=',$c->clave_carrera)->whereNull('aplica')->count()}}</td>
                         <td> {{$encuestas19->where('plantel','=',$c->clave_plantel)->where('carrera','=',$c->clave_carrera)->count()}}</td>
                         <td> {{$c->requeridas_5}}</td>
                         <td> {{$c->requeridas_5 - $encuestas19->where('plantel','=',$c->clave_plantel)->where('carrera','=',$c->clave_carrera)->count()}}</td>
                         <td><a href="{{route('muestras.show',$c->id)}}" ><button class="btn"style="background-color:{{Auth::user()->color}} ; color:white;"><i class="fas fa-eye"></i> Ver muestra</button></a></td>
                        </tr>
                       
                        @endforeach
                    </tbody>
                </table>
        </div>
        
    </div>
@endsection

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