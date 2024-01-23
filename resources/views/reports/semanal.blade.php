@extends('layouts.app')

@section('content')

<div class="container-fluid"  style="background-color: #E6E6FA;">
    <div style="padding:30px;">
    <h1 class="text-white-35" style="font-color: white">REPORTE SEMANAL   </h1> 
     
    </div>
    <div class="col-6 col-lg-12 table-responsive">
        <table >
          <thead>
            <tr>
            <th>Fecha</th>
            <th>Recados </th>
            <th>Contestadora</th>
            <th>No contesta</th>
            <th>Enc. 2014</th>
            <th>Enc 2020</th>
            <th>Encuestas Inconclusas</th>
            <th>Correos enviados</th>
            <th>Equivocados</th>
            <th>No existe</th>
            <th>Llamadas</th>
            <th>Revisadas hechas en internet</th>
          </tr>
          </thead>
          <tbody>
            <tr></tr>
          </tbody>
        </table>
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
<style>
   .content-wrapper  {
  background: url("{{asset('img/blank.png')}}") 50% 0 no-repeat fixed  !important;
    
  background-color: #FFFFFF  !important;
}
body  {
  background: url("{{asset('img/blank.png')}}") 50% 0 no-repeat fixed  !important;
    
  background-color: #FFFFFF  !important;
}
</style>
@stop

@push('js')

@endpush