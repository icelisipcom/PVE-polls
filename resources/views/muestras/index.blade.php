@extends('layouts.app')

@section('content')
<div class="container-fluid"  background="{{asset('img/Fondo2.jpg')}}">
    <div style="padding:30px;">
    <h1 class="text-white-50">  Estas son tus muestras {{Auth::user()->name }} </h1>
        <h1 class="text-white-50"> </h1>
        
    </div>
    Aqui se mostraran las muestras.... un dia
    </div>
@endsection
 