@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="text-black-50">Estado del Estudio 2019</h1>
        <div class="col-6 col-sm-12 table-responsive">
                <table class="table  table-striped text-xs font-medium">
                    <thead>
                        <tr class="text-center">
                            <th>Encuestador</th>
                            <th>FECHA captura</th>
                            <th>carrera</th>
                            <th>plantel </th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($encuestas as $e)
                        <tr>
                         <td> {{$e->aplica}}</td>
                         <td> {{$e->fec_capt}}</td>
                         <td> {{$e->nbr2}}</td>
                         
                         <td> {{$e->nbr3}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
@endsection
