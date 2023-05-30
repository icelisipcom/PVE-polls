@extends('layouts.app')

@section('content')
    <div class="container-fluid" style="background-color: transparent;">
        
    <h1 class="text-black-50">Binenvenid@!!  {{Auth::user()->name }} {{Auth::user()->emojis }}</h1>
        <h1 class="text-black-50"></h1>
        
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