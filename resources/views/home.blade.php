@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="text-black-50">Estado del Estudio 2019</h1>
        <div class="col-6 col-sm-12 table-responsive">
                <table class="table  table-striped text-xs font-medium">
                    <thead>
                        <tr class="text-center">
                            <th>Total de Encuestas realziadas</th>
                            <th>FECHA captura</th>
                            <th>carrera</th>
                            <th>plantel </th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                {{$encuestas->count()}}
                            </td>
                        </tr>
                    </tbody>
                </table>
        </div>
    </div>
@endsection
