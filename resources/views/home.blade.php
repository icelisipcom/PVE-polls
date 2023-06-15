@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div style="padding:30px;">
    <h1 class="text-white-50">Bienvenid@!!  {{Auth::user()->name }} {{Auth::user()->emojis }}</h1>
    <div>-----------------------------------------
    <a href="{{ route('reporte')}}"  > <button class="btn btn-green">
    <i class="fa-solid fa-file-excel"></i>&nbsp;Reporte Individual
    </button></a>
    </div>
<br>
</div>
        
        {!! $chart->container() !!}
        {!! $aplica_chart->container() !!}


<script src="{{ $chart->cdn() }}"></script>
{!! $chart->script() !!}


    <script src="{{ $aplica_chart->cdn() }}"></script>
    {!! $aplica_chart->script() !!}
    
    </div>
@endsection
 @section('js')
 <script>
    $(document).ready(function() {
$('#tabla').dataTable();
} );
 </script>
 @stop