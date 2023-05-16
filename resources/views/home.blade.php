@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="text-black-50">You are logged in!</h1>
        <div class="col-6 col-sm-12 table-responsive">
                <table class="table  table-striped text-lg font-medium">
                    <thead>
                        <tr class="text-center">
                            <th>Plantel</th>
                            <th>Carrera</th>
                            <th>encuestas Realizadas</th>
                            <th>uwu</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($carreras  as $c)
                        <tr class="text-center">
                         <td> {{$c->plantel}}</td>
                         <td> {{$c->carrera}}</td>
                         <td> {{$encuestas19->where('plantel','=',$c->clave_plantel)->where('carrera','=',$c->clave_carrera)->count()}}</td>
                         
                         <td> </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
@endsection
