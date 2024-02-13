@extends('layouts.app')

@section('content')

<div class="container-fluid" >
  <div id="tabla" style="print-color-adjust: exact;">
    <div style="padding:30px;" >
    <h1 class="text-white-35" style="font-family: 'Montserrat', sans-serif;
font-weight: 400; padding: 0.2vw" >REPORTE SEMANA {{$semana}} </h1> 
     <h2 class="text-white-35" style="font-family: 'Montserrat', sans-serif;
font-weight: 300; padding: 0.2vw">
Del {{$inicio->format('d-m-Y')}} al {{$fin->format('d-m-Y')}}
     </h2>
    </div>
    <div class="col-6 col-lg-12 table-responsive">
        <table class="my-table" style="font-family: 'Montserrat', sans-serif;
font-weight: 100; padding: 0.2vw">
          <thead>
            <tr>
            <th style="width: 12%"> &nbsp; &nbsp; Fecha &nbsp; &nbsp;</th>
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
            @foreach($Dias as $dia)
            <tr>
              <td> {{$dia->fecha}}  </td>
              <td>{{$dia->recados}} </td>
              <td>{{$dia->contestadora}} </td>
              <td>{{$dia->no_contesta}} </td>
              <td>{{$dia->enc2014}} </td>
              <td>{{$dia->enc2020}} </td>
              <td>{{$dia->enc_inconclusas}} </td>
              <td>{{$dia->correos}} </td>
              <td>{{$dia->equivocados}} </td>
              <td>{{$dia->no_existe}} </td>
              <td>{{$dia->llamadas}} </td>
              <td>{{$dia->internet}} </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <br><br>
        <table  class="my-table" style="font-family: 'Montserrat', sans-serif;
font-weight: 100; padding: 0.2vw"> 
          <tr>
            <th colspan="{{$Cuentas->count()}}">Numeros de Cuenta  </th>
          </tr>
          <tr>
            @foreach($Cuentas as $c)
            <td> {{$c->cuenta}}   &nbsp; &nbsp;</td>
            @endforeach
            
          </tr>
          <tr>
            <th colspan="{{$Cuentas14->count()}}">Numeros de Cuenta 2014 </th>
          </tr>
          
            
            @for($i =1;$i<=ceil($Cuentas14->count()/12);$i++)
           <tr>
            @foreach($Cuentas14->slice(12*($i-1),12) as $c)
            <td> {{$c->CUENTA}}   &nbsp; &nbsp;</td>
            @endforeach
            </tr>
            @endfor
          
        </table>
       <br>
       <table>
        <tr>
          <td> 
            <!-- tabla facultades 2020 -->
            <table  class="my-table" style="font-family: 'Montserrat', sans-serif;
font-weight: 100; padding: 0.2vw"> 
          <tr>
            <th >FACULTADES 2020</th>
            
          </tr>
         
            @foreach($Planteles as $p)
            <tr>
            <td> {{$p}}   &nbsp; &nbsp;</td></tr>
            @endforeach
          
        </table>
            <!-- fin de tabla fac2020 -->
          </td>
          <td>
            <!-- tabla facultades 2014 -->
            <table  class="my-table" style="font-family: 'Montserrat', sans-serif;
font-weight: 100; padding: 0.2vw"> 
          <tr>
            <th >FACULTADES 2014</th>
            
          </tr>
         
            @foreach($Planteles14 as $p)
            <tr>
            <td> {{$p}}   &nbsp; &nbsp;</td></tr>
            @endforeach
          
        </table>
            <!-- fin tabla 14 -->
          </td>
        </tr>
       </table>
       
    </div>
    </div>
    <input type="button" value="click"
                    onclick="printDiv()"> 
</div>
@stop

@push('css')
<link href="https://fonts.googleapis.com/css?family=Montserrat:400" rel="stylesheet">
<style>
  table{
  th{
    background-color: rgb(23, 30, 92); !important}
  td{
    color: black;
    background-color: rgb(240, 240, 240);
  }}
    
</style>

@endpush

@push('js')
<script> 
        function printDiv() { 
            var divContents = document.getElementById("tabla").innerHTML; 
            var a = window.open('', '', 'height=500, width=1200'); 
            a.document.write("<head> <link rel='stylesheet' href='report_style.css' type='text/css' media='print'/> ");  
            a.document.write("<style> table{ th{ background-color: rgb(23, 30, 92); color: white;  padding:0.2vw; } td{color: rgba(0,0,0,1); text-align: center; font-weight: bolder;size: 2.5vw;} }</style> </head>");  
            a.document.write('<html>'); 
            a.document.write('<body > <h1> PVEAJU <br>'); 
            a.document.write(divContents); 
            a.document.write('</body></html>'); 
            a.document.close(); 
            a.print(); 
        } 
    </script> 
@endpush

@push('css')
<link href="https://fonts.googleapis.com/css?family=Montserrat:300" rel="stylesheet">

@endpush