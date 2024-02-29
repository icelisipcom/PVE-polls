@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div style="padding:30px;">
    <h1 class="text-white-50">Bienvenid@!!  {{Auth::user()->name }} {{Auth::user()->emojis }}</h1>
    <div>-----------------------------------------
        <br><br><br> 
    <a href="{{ route('report','reporte_individual')}}"  > <button class="btn" style="background-color:{{Auth::user()->color}} ; color:white;">
    <i class="fas fa-file-excel"></i> &nbsp; &nbsp; Reporte Individual 2019
    </button></a>
    
    <a href="{{ route('report','reporte_individual_act2014')}}"  > <button class="btn" style="background-color:{{Auth::user()->color}} ; color:white;">
    <i class="fas fa-file-excel"></i> &nbsp; &nbsp; Reporte Individual 2014
    </button></a>
    
    <a href="{{ route('report','correos_inconclusas')}}"  > <button class="btn" style="background-color:{{Auth::user()->color}} ; color:white;">
    <i class="fas fa-file-excel"></i> &nbsp; &nbsp; Correos par encuestas inconclusas
    </button></a>
    </div>

<br>
</div>
<div style="color : black; background-color:rgba(250,250,250,0.57);">
        <div class="col"> 
            <div class="row"> 
                <div class="col stat-card" >
                    <div class="row"> Total encuestas 2020:  </div>
                    <div class="row  data-card"> {{$total20}} </div>
                </div>
                <div class="col stat-card" >
                    <div class="row"> Total encuestas 2014:  </div>
                    <div class="row  data-card"> {{$total14}}  </div>
                </div>
            </div>
            {!! $aplica_chart->container() !!}
        </div>

</div>
        

<script src="{{ $chart->cdn() }}"></script>
{!! $chart->script() !!}


    <script src="{{ $aplica_chart->cdn() }}"></script>
   <div style='color: black'>
    {!! $aplica_chart->script() !!}
    </div>
@endsection

@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
<style>
    .stat-card{
        padding: 2.9vw;
        background-color: #002B7A;
        border-radius: 2.3vw 4.2vw;
        margin: 2.3vw;
        color:white;
        font-size: 2.5vw;
        width: 1px;

    }
    .data-card{
        padding: 0.5vw;
        background-color: #a67e0e;
        border-radius: 1.3vw;
        color:white;
        margin: 0.5vw;
        font-size: 5.1vw;
        width:40%;
        font-weight: bold;


    }
</style>
@endpush

@push('js')
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
<script>
 
  console.log('script jalando ¿?');
  $(document).ready(function() {
    $('#myTable').DataTable();
} );
 </script>

 @endpush