@extends('layouts.app')

@section('content')

<div class="container-fluid"  background="{{asset('img/Fondo2.jpg')}}">
    <div style="padding:30px;">
    <h1 class="text-white-50">
                 @if($Encuesta)
                 COMPLETAR ENCUESTA @else
                 HACER NUEVA ENCUESTA @endif </h1>
        <h1 class="text-white-50"> </h1>
        <div >
        
        <table class="table text-xl">
          <TR>
            <td>Egresad@: </td>
            <td> {{$Egresado->nombre}} {{$Egresado->paterno}} {{$Egresado->materno}} </td>
          </TR>
          <tr>
            <td>Promedio:</td> <td>{{$Egresado->promedio}}</td>
          </tr>
          <tr><td>Carrera:</td><td> {{$Carrera}}</td> </tr>
          <tr><td>Plantel:</td><td> {{$Plantel}}</td> </tr>
        </table>
        <br>
        @if($Encuesta)
        Numeros de telefono ingresados en la encuesta:
        {{$Encuesta->TELCEL}}
        {{$Encuesta->telcasa}}
        {{$Encuesta->teltra}}
        {{$Encuesta->nar1_a}}
        @endif
        </div>
    </div>
   <!-- aqui se va a mostrar la encuesta -->
    <div> <nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#" onClick="unhide('A')" id='Abtn'> <p id='Atxt'>Seccion A</p></a>
  <a class="navbar-brand" href="#" onClick="unhide('B')" id='Bbtn'><p id='Btxt'>Seccion B</p></a>
  <a class="navbar-brand" href="#" onClick="unhide('C')" id='Cbtn'><p id='Ctxt'>Seccion C</p></a>
  <a class="navbar-brand" href="#" onClick="unhide('D')" id='Dbtn'><p id='Dtxt'>Seccion D</p></a>
  <a class="navbar-brand" href="#" onClick="unhide('E')" id='Ebtn'><p id='Etxt'>Seccion E</p></a>
  <a class="navbar-brand" href="#" onClick="unhide('F')" id='Fbtn'><p id='Ftxt'>Seccion F</p></a>
  <a class="navbar-brand" href="#" onClick="unhide('G')" id='Gbtn'><p id='Gtxt'>Seccion G</p></a>
</nav></div>
    <div class='Scroll'> 
      <div class='col' id='A'>
      <h1 class="seccion">DATOS PERSONALES</h1>
    <hr>
    <h2 class="reactivo">1.-Fecha de Nacimiento </h2>             <!--   -------FECHA DE NACIMIENTO-->
    
    <input class="fecha" type="date" id="start" name="fechaNac"
      value="1980-07-22"
      min="1950-01-01" max="2001-12-31">
    
    
      <h2 class="reactivo">2.-Genero </h2>             <!--   -------FECHA DE NACIMIENTO-->
    <select class="select" id= "2_genero"  name="nar7" >
            <option value="" selected="selected"></option>
            <option value=1>Femenino</option>
            <option value=2>Masculino</option>
           </select> 
           <h2 class="reactivo">3.- Estado civil:</h2>
           
            <select class="select"  id="3_ESTADO_CIVIL" name="nar8" onchange="bloquear(nar8,[1],[nar11div])" > 
            <option value="" selected></option>
			<option value=1>Soltero(a)</option>
			<option value=2>Casado(a)</option>
			<option value=3>Divorciado(a)</option>
			<option value=4>Unión Libre</option>
			<option value=5>Viudo(a)</option>
             </select>
             <h2 class="reactivo"> 4.- ¿Tiene hijos?</h2>
         
         <select class="select" id="Tiene hijos" name="nar9"  onchange="bloquear(nar9,[2],[nar9adiv])" >
         <option value="" selected></option>
        <option value='1'>Sí</option>
        <option value='2'>No</option> 
</select>
<div name = "nar9adiv" id="nar9adiv">
a).- ¿Cuántos?:<input class="texto" type="text"  id="Cuantos hijos" name="nar10" size="2" maxlength="2" > 
</div>
<h2 class="reactivo">5.-  Teléfono de casa</h2> 
 <INPUT type="text" class="texto"   id="5_TEL_CASA" size="12" maxlength="15"  name="telcasa" value="{{$Encuesta->telcasa}}">

 <h2 class="reactivo">5a.-  Teléfono celular</h2>
 <INPUT type="text" class="texto" id="5_TEL_CEL" name="TELCEL"  size="15" maxlength="15" value="{{$Encuesta->TELCEL}}"  >
    
<h2 class="reactivo">6.-Teléfono  del trabajo: </h2>
<INPUT type="text" class="texto"  id="6_TEL_TRABAJO"   size="12" maxlength="13"  name="teltra" value="{{$Encuesta->teltra}}">

Extensión: 
 <INPUT type="text" class="texto" id="EXTENSION" size="5" maxlength="5" name="exttra"   >

<h2 class="reactivo">7.- ¿Tiene correo electrónico?</h2>  

<select class="select" id="7_Tiene_correo" name="ncrcc"  onchange="bloquear(ncrcc,[2],[correo])" >
<option value="" selected></option>
        <option value='1'>Sí</option>
        <option value='2'>No</option> 
</select>
<div name="correo" id="correo">
7a).-Cúal es su correo : 

<INPUT type="text" class="texto"  id="7a)_CORREO" name="nar1_a" size="39" maxlength="39"  >
</div>
  <div name="nar11div" id="nar11div">

    <h2 class="reactivo"> 8.- Nivel de estudios de su esposo(a)</h2>
 
      <select class="select" id="8_ESTUDIOS_ESPOS@" name="nar11"    >
     <option value="" selected></option>
      <option value=1>Sin instrucción</option>
      <option value=2>Primaria</option;n>
      <option value=3>Carrera técnica o comercial después de primaria</option>
      <option value=4>Secundaria</option>
      <option value=5>Escuela Normal</option>
      <option value=6>Carrera técnica o comercial después de secundaria</option>
       <option value=7>Bachillerato o vocacional</option>
      <option value=8>Esc. Normal Superior</option>
     <option value=9>Carrera técnica o com. después de bachillerato</option>
     <option value=10>Licenciatura</option>
     <option value=11>Posgrado</option>
     <option value=12>Lo desconoce</option>
     <option value=13>Otro (Especifíque)</option>
    </select>
Otra:<input type="text" class="texto"   ID="OTRA11" name="nar11a" size="50" maxlength="50" value=" " > 


  
<h2 class="reactivo">9.-Ocupación de su esposo(a)</h2>


<select class="select" id="9_OCUPACIÓN ESPOSA" name="nar14" onchange=esposo(a14) >
       <option value="" selected></option>
<option value=28>Artesanos y obrero</option>
<option value=25>Comerciante, empleado en comercios y agente de ventas</option>
<option value=41>Conductores de maquinaria móvil terrestre, aérea, marítima, de vías ferreras</option>
<option value=21>Funcionario y directivo</option>
<option value=35>Finado</option>
<option value=34>Jubilado</option>
<option value=33>Labores del Hogar</option>
<option value=22>Mando medio</option>
<option value=29>Obreros especializados</option>
<option value=16>Profesionista</option>
<option value=39>Profesor Enseñanza Superior</option>
<option value=17>Profesor Enseñanza Media Superior</option>
<option value=18>Profesor Enseñanza Media</option>
<option value=19>Profesor Enseñanza Básica</option>
<option value=20>Trabajador del arte, espectáculos y deportes</option>
<option value=23>Técnico</option>
<option value=24>Trabajador de apoyo actividades administrativas</option>
<option value=27>Trabajadores en actividades agricolas, ganaderias, silvícolas y de caza y pesca</option>
<option value=30>Trabajador en servicios personales</option>
<option value=31>Trabajador en servicios doméstico</option>
<option value=32>Trabajador de servicios vigilancia y protección y fuerzas armadas</option>
<option value=26>Vendedores ambulantes</option>
<option value=36>No trabaja</option>
<option value=37>No lo sabe</option>
<option value=38>Otra(Especifíque)</option>
    </select>
(Especifíque)
Otra:<input type="text" class="texto" ID="9_OTRA" name="nar14otra" size="80" maxlength="80" value=" " > 
 
  </div>
<h2 class="reactivo"> Cuál es o era en caso de haber fallecido el: </h2>
<h2 class="reactivo"> 10.- Nivel de estudios de su madre  </h2>
        
       <select class="select" id="10_ESTUDIOS_MADRE" name="nar12"  onchange="bloquear(nar11,[1,2,3,4,5,6,7,8,9,11,12,13],[narx])" >
       <option value="1" selected></option>
       <option value=1>Sin instrución</option>
       <option value=2>Primaria</option;n>
       <option value=3>Carrera técnica o comercial después de primaria</option>
       <option value=4>Secundaria</option>
       <option value=5>Escuela Normal</option>
       <option value=6>Carrera técnica o comercial después de secundaria</option>
       <option value=7>Bachillerato o vocacional</option>
       <option value=8>Esc. Normal Superior</option>
       <option value=9>Carrera técnica o comercial después de bachillerato</option>
       <option value=10>Licenciatura</option>
       <option value=11>Posgrado</option>
       <option value=12>Lo desconoce</option>
       <option value=13>Otro </option>
    </select>

10a).-¿Si su madre es profesionista 
      cursó sus estudios en la UNAM?
      <select class="select" id="10a_ESTUDIOS UNAM MADRE" name="nrx"  >
       <option value="" selected></option>
       <option value=1>SI</option>
       <option value=2>No</option;n>
    </select>
    <h2 class="reactivo">11.- La ocupación de su madre (cuando cursaba la carrera )</h2>   

  <select class="select" id="11_OCUPACIÓN MADRE" name="nar15"  onchange="bloquear(nar11,[1,2,3,4,5,6,7,8,9,11,10,12],[nar])" >
 <option value="" selected></option>
<option value=28>Artesanos y obrero</option>
<option value=25>Comerciante, empleado en comercios y agente de ventas</option>
<option value=41>Conductores de maquinaria móvil terrestre, aérea, marítima, de vías ferreras</option>
<option value=21>Funcionario y directivo</option>
<option value=35>Finado</option>
<option value=34>Jubilado</option>
<option value=33>Labores del Hogar</option>
<option value=22>Mando medio</option>
<option value=29>Obreros especializados</option>
<option value=16>Profesionista</option>
<option value=39>Profesor Enseñanza Superior</option>
<option value=17>Profesor Enseñanza Media Superior</option>
<option value=18>Profesor Enseñanza Media</option>
<option value=19>Profesor Enseñanza Básica</option>
<option value=20>Trabajador del arte, espectáculos y deportes</option>
<option value=23>Técnico</option>
<option value=24>Trabajador de apoyo actividades administrativas</option>
<option value=27>Trabajadores en actividades agricolas, ganaderias, silvícolas y de caza y pesca</option>
<option value=30>Trabajador en servicios personales</option>
<option value=31>Trabajador en servicios doméstico</option>
<option value=32>Trabajador de servicios vigilancia y protección y fuerzas armadas</option>
<option value=26>Vendedores ambulantes</option>
<option value=36>No trabaja</option>
<option value=37>No lo sabe</option>
<option value=38>Otra(Especifíque)</option>
    </select>
<br>(Especifíque)
Otra:
<input type="text" class="texto" ID="11_OTRA_M" name="nar15otra" size="80" maxlength="80" value=" " > 

<h2 class="reactivo">12.- Nivel de estudios de su padre  </h2>
        
       <select class="select" id="12_ESTUDIOS PADRE" name="nar13"  onchange=estupa(a13)  >
        <option value="" selected></option>
       <option value=1>Sin instrución</option>
       <option value=2>Primaria</option;n>
       <option value=3>Carrera técnica o comercial después de primaria</option>
       <option value=4>Secundaria</option>
       <option value=5>Escuela Normal</option>
       <option value=6>Carrera técnica o comercial después de secundaria</option>
       <option value=7>Bachillerato o vocacional</option>
       <option value=8>Esc. Normal Superior</option>
       <option value=9>Carrera técnica o comercial después de bachillerato</option>
       <option value=10>Licenciatura</option>
       <option value=11>Posgrado</option>
       <option value=12>Lo desconoce</option>
       <option value=13>Otro</option>
</select>

12a).-¿Si su padre es profesionista 
cursó sus estudios en la UNAM?
      <select class="select" id="12_ESTUDIOS UNAM PADRE" name="nrxx"  >
       <option value="" selected></option>
       <option value=1>SI</option>
       <option value=2>No</option;n>
    </select>
  
    <h2 class="reactivo">13.- La ocupación de su padre (cuando cursaba la carrera )</h2> 
    

 <select class="select" id="13_OCUPACION PADRE" name="nar16"  onchange="bloquear(nar16,[1,2,3,4,5,6,7,8,9,11,12,10],[nar16otra])">
<option selected="selected" value="">
<option value=28>Artesanos y obrero</option>
<option value=25>Comerciante, empleado en comercios y agente de ventas</option>
<option value=41>Conductores de maquinaria móvil terrestre, aérea, marítima, de vías ferreras</option>
<option value=21>Funcionario y directivo</option>
<option value=35>Finado</option>
<option value=34>Jubilado</option>
<option value=33>Labores del Hogar</option>
<option value=22>Mando medio</option>
<option value=29>Obreros especializados</option>
<option value=16>Profesionista</option>
<option value=39>Profesor Enseñanza Superior</option>
<option value=17>Profesor Enseñanza Media Superior</option>
<option value=18>Profesor Enseñanza Media</option>
<option value=19>Profesor Enseñanza Básica</option>
<option value=20>Trabajador del arte, espectáculos y deportes</option>
<option value=23>Técnico</option>
<option value=24>Trabajador de apoyo actividades administrativas</option>
<option value=27>Trabajadores en actividades agricolas, ganaderias, silvícolas y de caza y pesca</option>
<option value=30>Trabajador en servicios personales</option>
<option value=31>Trabajador en servicios doméstico</option>
<option value=32>Trabajador de servicios vigilancia y protección y fuerzas armadas</option>
<option value=26>Vendedores ambulantes</option>
<option value=36>No trabaja</option>
<option value=37>No lo sabe</option>
<option value=38>Otra(Especifíque)</option>
</select>
<br>(Especifíque)
Otra:<input  type="text" class="texto" ID="13_OTRA" name="nar16otra" size="80" maxlength="80" value=" ">   


      </div>
      <div class='col' id='B'>
        <br> pregunta xb
        <input type="text">
        <br> pregunta xb
        <input type="text">
        <br> pregunta xb
        <input type="text">
        <br> pregunta xb
        <input type="text">
        <br> pregunta xb
        <input type="text">
        <br> pregunta xb
        <input type="text">
        <br> pregunta xb
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">

      </div>

      <div class='col' id='C'>
        <br> pregunta xb
        <input type="text">
        <br> pregunta xb
        <input type="text">
        <br> pregunta xb
        <input type="text">
        <br> pregunta xb
        <input type="text">
        <br> pregunta xb
        <input type="text">
        <br> pregunta xb
        <input type="text">
        <br> pregunta xb
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">

      </div>

      <div class='col' id='D'>
        <br> pregunta xb
        <input type="text">
        <br> pregunta xb
        <input type="text">
        <br> pregunta xb
        <input type="text">
        <br> pregunta xb
        <input type="text">
        <br> pregunta xb
        <input type="text">
        <br> pregunta xb
        <input type="text">
        <br> pregunta xb
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">

      </div>

      <div class='col' id='E'>
        <br> pregunta xb
        <input type="text">
        <br> pregunta xb
        <input type="text">
        <br> pregunta xb
        <input type="text">
        <br> pregunta xb
        <input type="text">
        <br> pregunta xb
        <input type="text">
        <br> pregunta xb
        <input type="text">
        <br> pregunta xb
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">

      </div>

      <div class='col' id='F'>
        <br> pregunta xb
        <input type="text">
        <br> pregunta xb
        <input type="text">
        <br> pregunta xb
        <input type="text">
        <br> pregunta xb
        <input type="text">
        <br> pregunta xb
        <input type="text">
        <br> pregunta xb
        <input type="text">
        <br> pregunta xb
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">
      </div>

      <div class='col' id='G'>
        <br> pregunta xb
        <input type="text">
        <br> pregunta xb
        <input type="text">
        <br> pregunta xb
        <input type="text">
        <br> pregunta xb
        <input type="text">
        <br> pregunta xb
        <input type="text">
        <br> pregunta xb
        <input type="text">
        <br> pregunta xb
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">
        <br> pregunta x
        <input type="text">

      </div>
    </div>
   
    
</div>
@stop

@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
<style>
  .Scroll {
  height:600px;
  overflow-y: scroll;
}
.texto{
  color:{{Auth::user()->color}}
}
.fecha{
  color:{{Auth::user()->color}}
}
.select{
  color:{{Auth::user()->color}}
}
</style>
@endpush

@push('js')
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
<script>
  function hide_all(){
    sections=['A','B','C','D','E','F','G'];
   for (let i = 0; i < sections.length; i++) {
     console.log(sections[i])   
     document.getElementById(sections[i]).style.display='none';
     document.getElementById(sections[i]+'btn').style.backgroundColor="#ffffff";
     document.getElementById(sections[i]+'txt').style.color="rgb(23,23,23)";
    }
  
  }
  function unhide(sec){
    hide_all();
    document.getElementById(sec).style.display='block';
    document.getElementById(sec+'btn').style.backgroundColor="{{Auth::user()->color}}";
    console.log(document.getElementById(sec+'btn').style.color)
    document.getElementById(sec+'txt').style.color="white";
  }
  unhide('A');

 </script>
@endpush