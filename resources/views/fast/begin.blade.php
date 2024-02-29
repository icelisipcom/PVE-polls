

@extends('layouts.fast')

@section('content')

<div class="container-fluid" >
    <h1 class="encabezado">BIENVENIDO A LA ENCUESTA DE EGRESADOS DEL PVEAJU </h1>

<div class="reactive-square">
        <h2 class="indication"> Ingresa tu numero de cuenta</h2>
        <form action="{{ route('fast.check') }}" method="POST" enctype="multipart/form-data" id='forma_sagrada' name='forma'>
@csrf
    <input type="number" name='cuenta'>

<button> Empezar </button>
    </form>
</div>
   


</div>
@stop

@section('css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
@stop

@push('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

@endpush