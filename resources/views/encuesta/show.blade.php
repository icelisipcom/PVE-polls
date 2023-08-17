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
      value="{{sprintf('%02d',$Encuesta->yernac).'-'.sprintf('%02d',$Encuesta->mesnac).'-'.$Encuesta->dianac}}"
      min="1950-01-01" max="2001-12-31">
    
    
      <h2 class="reactivo">2.-Genero </h2>             <!--   -------FECHA DE NACIMIENTO-->
    <select class="select" id= "2_genero"  name="nar7" >
            
            <option value=1 @if($Encuesta->nar7==1) selected @endif>Femenino</option>
            <option value=2 @if($Encuesta->nar7==2) selected @endif>Masculino</option>
           </select> 
           <h2 class="reactivo">3.- Estado civil:</h2>
           
            <select class="select"  id="3_ESTADO_CIVIL" name="nar8" onchange="bloquear(nar8,[1],[nar11div])" > 
            <option value="" selected></option>
			<option value=1  @if($Encuesta->nar8==1) selected @endif>Soltero(a)</option>
			<option value=2 @if($Encuesta->nar8==2) selected @endif>Casado(a)</option>
			<option value=3 @if($Encuesta->nar8==3) selected @endif>Divorciado(a)</option>
			<option value=4 @if($Encuesta->nar8==4) selected @endif>Unión Libre</option>
			<option value=5 @if($Encuesta->nar8==5) selected @endif>Viudo(a)</option>
             </select>
             <h2 class="reactivo"> 4.- ¿Tiene hijos?</h2>
         
         <select class="select" id="Tiene hijos" name="nar9"  onchange="bloquear(nar9,[2],[nar9adiv])" >
         <option value="" selected></option>
        <option value='1' @if($Encuesta->nar9==1) selected @endif>Sí</option>
        <option value='2'@if($Encuesta->nar9==2) selected @endif>No</option> 
</select>
<div name = "nar9adiv" id="nar9adiv">
a).- ¿Cuántos?:<input class="texto" type="text"  id="Cuantos hijos" name="nar10" size="2" maxlength="2" value="{{$Encuesta->nar10}}"> 
</div>
<h2 class="reactivo">5.-  Teléfono de casa</h2> 
 <INPUT type="text" class="texto"   id="5_TEL_CASA" size="12" maxlength="15"  name="telcasa" value="{{$Encuesta->telcasa}}">

 <h2 class="reactivo">5a.-  Teléfono celular</h2>
 <INPUT type="text" class="texto" id="5_TEL_CEL" name="TELCEL"  size="15" maxlength="15" value="{{$Encuesta->TELCEL}}"  >
    
<h2 class="reactivo">6.-Teléfono  del trabajo: </h2>
<INPUT type="text" class="texto"  id="6_TEL_TRABAJO"   size="12" maxlength="13"  name="teltra" value="{{$Encuesta->teltra}}">

Extensión: 
 <INPUT type="text" class="texto" id="EXTENSION" size="5" maxlength="5" name="exttra"  value="{{$Encuesta->exttra}}" >

<h2 class="reactivo">7.- ¿Tiene correo electrónico?</h2>  

<select class="select" id="7_Tiene_correo" name="ncrcc"  onchange="bloquear(ncrcc,[2],[correo])" >
<option value="" selected></option>
        <option @if(!is_null($Encuesta->nar1_a)) selected @endif value='1'>Sí</option>
        <option value='2' @if(is_null($Encuesta->nar1_a)) selected @endif >No</option> 
</select>
<div name="correo" id="correo">
7a).-Cúal es su correo : 

<INPUT type="text" class="texto"  id="7a)_CORREO" name="nar1_a" size="39" maxlength="39" value="{{$Encuesta->nar1_a}}"  >
</div>
  <div name="nar11div" id="nar11div">

    <h2 class="reactivo"> 8.- Nivel de estudios de su esposo(a)</h2>
 
      <select class="select" id="8_ESTUDIOS_ESPOS@" name="nar11"    >
     <option value=""></option>
      <option value=1 @if($Encuesta->nar11==1) selected @endif >Sin instrucción</option>
      <option value=2 @if($Encuesta->nar11==2) selected @endif >Primaria</option;n>
      <option value=3 @if($Encuesta->nar11==3) selected @endif >Carrera técnica o comercial después de primaria</option>
      <option value=4 @if($Encuesta->nar11==4) selected @endif >Secundaria</option>
      <option value=5 @if($Encuesta->nar11==5) selected @endif >Escuela Normal</option>
      <option value=6 @if($Encuesta->nar11==6) selected @endif >Carrera técnica o comercial después de secundaria</option>
      <option value=7 @if($Encuesta->nar11==7) selected @endif >Bachillerato o vocacional</option>
      <option value=8 @if($Encuesta->nar11==8) selected @endif >Esc. Normal Superior</option>
      <option value=9 @if($Encuesta->nar11==9) selected @endif >Carrera técnica o com. después de bachillerato</option>
      <option value=10 @if($Encuesta->nar11==10) selected @endif >Licenciatura</option>
      <option value=11 @if($Encuesta->nar11==11) selected @endif >Posgrado</option>
      <option value=12 @if($Encuesta->nar11==12) selected @endif >Lo desconoce</option>
      <option value=13  @if($Encuesta->nar11==13) selected @endif >Otro (Especifíque)</option>
    </select>
Otra:<input type="text" class="texto"   ID="OTRA11" name="nar11a" size="50" maxlength="50" @if(strlen($Encuesta->nar11a)>2) value="{{$Encuesta->nar11a}}" @else value=" " @endif > 


  
<h2 class="reactivo">9.-Ocupación de su esposo(a)</h2>


<select class="select" id="9_OCUPACIÓN ESPOSA" name="nar14" onchange=esposo(a14) >
       <option value="" ></option>
<option value=28 @if($Encuesta->nar14==28) selected @endif >Artesanos y obrero</option>
<option value=25 @if($Encuesta->nar14==25) selected @endif >Comerciante, empleado en comercios y agente de ventas</option>
<option value=41 @if($Encuesta->nar14==41) selected @endif >Conductores de maquinaria móvil terrestre, aérea, marítima, de vías ferreras</option>
<option value=21 @if($Encuesta->nar14==21) selected @endif >Funcionario y directivo</option>
<option value=35 @if($Encuesta->nar14==35) selected @endif >Finado</option>
<option value=34 @if($Encuesta->nar14==34) selected @endif >Jubilado</option>
<option value=33 @if($Encuesta->nar14==33) selected @endif >Labores del Hogar</option>
<option value=22 @if($Encuesta->nar14==22) selected @endif >Mando medio</option>
<option value=29 @if($Encuesta->nar14==29) selected @endif >Obreros especializados</option>
<option value=16 @if($Encuesta->nar14==16) selected @endif >Profesionista</option>
<option value=39 @if($Encuesta->nar14==39) selected @endif >Profesor Enseñanza Superior</option>
<option value=17 @if($Encuesta->nar14==17) selected @endif >Profesor Enseñanza Media Superior</option>
<option value=18 @if($Encuesta->nar14==18) selected @endif >Profesor Enseñanza Media</option>
<option value=19 @if($Encuesta->nar14==19) selected @endif >Profesor Enseñanza Básica</option>
<option value=20 @if($Encuesta->nar14==20) selected @endif >Trabajador del arte, espectáculos y deportes</option>
<option value=23 @if($Encuesta->nar14==23) selected @endif >Técnico</option>
<option value=24 @if($Encuesta->nar14==24) selected @endif >Trabajador de apoyo actividades administrativas</option>
<option value=27 @if($Encuesta->nar14==27) selected @endif >Trabajadores en actividades agricolas, ganaderias, silvícolas y de caza y pesca</option>
<option value=30 @if($Encuesta->nar14==30) selected @endif >Trabajador en servicios personales</option>
<option value=31 @if($Encuesta->nar14==31) selected @endif >Trabajador en servicios doméstico</option>
<option value=32 @if($Encuesta->nar14==32) selected @endif >Trabajador de servicios vigilancia y protección y fuerzas armadas</option>
<option value=26 @if($Encuesta->nar14==26) selected @endif >Vendedores ambulantes</option>
<option value=36 @if($Encuesta->nar14==36) selected @endif >No trabaja</option>
<option value=37 @if($Encuesta->nar14==37) selected @endif >No lo sabe</option>
<option value=38 @if($Encuesta->nar14==38) selected @endif >Otra(Especifíque)</option>
    </select>
(Especifíque)
Otra:<input type="text" class="texto" ID="9_OTRA" name="nar14otra" size="80" maxlength="80" @if(strlen($Encuesta->nar14otra)>2) value="{{$Encuesta->nar14otra}}" @else value=" " @endif > 
 
  </div>
<h2 class="reactivo"> Cuál es o era en caso de haber fallecido el: </h2>
<h2 class="reactivo"> 10.- Nivel de estudios de su madre  </h2>
        
       <select class="select" id="10_ESTUDIOS_MADRE" name="nar12"  onchange="bloquear(nar11,[1,2,3,4,5,6,7,8,9,11,12,13],[narx])" >
       <option value=""></option>
      <option value=1 @if($Encuesta->nar12==1) selected @endif >Sin instrucción</option>
      <option value=2 @if($Encuesta->nar12==2) selected @endif >Primaria</option;n>
      <option value=3 @if($Encuesta->nar12==3) selected @endif >Carrera técnica o comercial después de primaria</option>
      <option value=4 @if($Encuesta->nar12==4) selected @endif >Secundaria</option>
      <option value=5 @if($Encuesta->nar12==5) selected @endif >Escuela Normal</option>
      <option value=6 @if($Encuesta->nar12==6) selected @endif >Carrera técnica o comercial después de secundaria</option>
      <option value=7 @if($Encuesta->nar12==7) selected @endif >Bachillerato o vocacional</option>
      <option value=8 @if($Encuesta->nar12==8) selected @endif >Esc. Normal Superior</option>
      <option value=9 @if($Encuesta->nar12==9) selected @endif >Carrera técnica o com. después de bachillerato</option>
      <option value=10 @if($Encuesta->nar12==10) selected @endif >Licenciatura</option>
      <option value=11 @if($Encuesta->nar12==11) selected @endif >Posgrado</option>
      <option value=12 @if($Encuesta->nar12==12) selected @endif >Lo desconoce</option>
      <option value=13  @if($Encuesta->nar12==13) selected @endif >Otro (Especifíque)</option>
    
    </select>

10a).-¿Si su madre es profesionista 
      cursó sus estudios en la UNAM?
      <select class="select" id="10a_ESTUDIOS UNAM MADRE" name="nrx"  >
       <option value="" ></option>
       <option value=1 @if($Encuesta->nrx==1) selected @endif >SI</option>
       <option value=2 @if($Encuesta->nrx==2) selected @endif >No</option;n>
    </select>


    <h2 class="reactivo">11.- La ocupación de su madre (cuando cursaba la carrera )</h2>   

  <select class="select" id="11_OCUPACIÓN MADRE" name="nar15"  onchange="bloquear(nar11,[1,2,3,4,5,6,7,8,9,11,10,12],[nar])" >
  <option value="" ></option>
<option value=28 @if($Encuesta->nar15==28) selected @endif >Artesanos y obrero</option>
<option value=25 @if($Encuesta->nar15==25) selected @endif >Comerciante, empleado en comercios y agente de ventas</option>
<option value=41 @if($Encuesta->nar15==41) selected @endif >Conductores de maquinaria móvil terrestre, aérea, marítima, de vías ferreras</option>
<option value=21 @if($Encuesta->nar15==21) selected @endif >Funcionario y directivo</option>
<option value=35 @if($Encuesta->nar15==35) selected @endif >Finado</option>
<option value=34 @if($Encuesta->nar15==34) selected @endif >Jubilado</option>
<option value=33 @if($Encuesta->nar15==33) selected @endif >Labores del Hogar</option>
<option value=22 @if($Encuesta->nar15==22) selected @endif >Mando medio</option>
<option value=29 @if($Encuesta->nar15==29) selected @endif >Obreros especializados</option>
<option value=16 @if($Encuesta->nar15==16) selected @endif >Profesionista</option>
<option value=39 @if($Encuesta->nar15==39) selected @endif >Profesor Enseñanza Superior</option>
<option value=17 @if($Encuesta->nar15==17) selected @endif >Profesor Enseñanza Media Superior</option>
<option value=18 @if($Encuesta->nar15==18) selected @endif >Profesor Enseñanza Media</option>
<option value=19 @if($Encuesta->nar15==19) selected @endif >Profesor Enseñanza Básica</option>
<option value=20 @if($Encuesta->nar15==20) selected @endif >Trabajador del arte, espectáculos y deportes</option>
<option value=23 @if($Encuesta->nar15==23) selected @endif >Técnico</option>
<option value=24 @if($Encuesta->nar15==24) selected @endif >Trabajador de apoyo actividades administrativas</option>
<option value=27 @if($Encuesta->nar15==27) selected @endif >Trabajadores en actividades agricolas, ganaderias, silvícolas y de caza y pesca</option>
<option value=30 @if($Encuesta->nar15==30) selected @endif >Trabajador en servicios personales</option>
<option value=31 @if($Encuesta->nar15==31) selected @endif >Trabajador en servicios doméstico</option>
<option value=32 @if($Encuesta->nar15==32) selected @endif >Trabajador de servicios vigilancia y protección y fuerzas armadas</option>
<option value=26 @if($Encuesta->nar15==26) selected @endif >Vendedores ambulantes</option>
<option value=36 @if($Encuesta->nar15==36) selected @endif >No trabaja</option>
<option value=37 @if($Encuesta->nar15==37) selected @endif >No lo sabe</option>
<option value=38 @if($Encuesta->nar15==38) selected @endif >Otra(Especifíque)</option>
</select>
<br>(Especifíque)
Otra:
<input type="text" class="texto" ID="11_OTRA_M" name="nar15otra" size="80" maxlength="80"  @if(strlen($Encuesta->nar15otra)>2) value="{{$Encuesta->nar15otra}}" @else value=" " @endif  > 

<h2 class="reactivo">12.- Nivel de estudios de su padre  </h2>
        
       <select class="select" id="12_ESTUDIOS PADRE" name="nar13"  onchange=estupa(a13)  >
       <option value=""></option>
      <option value=1 @if($Encuesta->nar13==1) selected @endif >Sin instrucción</option>
      <option value=2 @if($Encuesta->nar13==2) selected @endif >Primaria</option;n>
      <option value=3 @if($Encuesta->nar13==3) selected @endif >Carrera técnica o comercial después de primaria</option>
      <option value=4 @if($Encuesta->nar13==4) selected @endif >Secundaria</option>
      <option value=5 @if($Encuesta->nar13==5) selected @endif >Escuela Normal</option>
      <option value=6 @if($Encuesta->nar13==6) selected @endif >Carrera técnica o comercial después de secundaria</option>
      <option value=7 @if($Encuesta->nar13==7) selected @endif >Bachillerato o vocacional</option>
      <option value=8 @if($Encuesta->nar13==8) selected @endif >Esc. Normal Superior</option>
      <option value=9 @if($Encuesta->nar13==9) selected @endif >Carrera técnica o com. después de bachillerato</option>
      <option value=10 @if($Encuesta->nar13==10) selected @endif >Licenciatura</option>
      <option value=11 @if($Encuesta->nar13==11) selected @endif >Posgrado</option>
      <option value=12 @if($Encuesta->nar13==12) selected @endif >Lo desconoce</option>
      <option value=13  @if($Encuesta->nar13==13) selected @endif >Otro (Especifíque)</option>
    
</select>

12a).-¿Si su padre es profesionista 
cursó sus estudios en la UNAM?
      <select class="select" id="12_ESTUDIOS UNAM PADRE" name="nrxx"  >
       <option value=""></option>
       <option value=1 @if($Encuesta->nrxx==1) selected @endif >SI</option>
       <option value=2  @if($Encuesta->nrxx==2) selected @endif >No</option;n>
    </select>
  
    <h2 class="reactivo">13.- La ocupación de su padre (cuando cursaba la carrera )</h2> 
    

 <select class="select" id="13_OCUPACION PADRE" name="nar16"  onchange="bloquear(nar16,[1,2,3,4,5,6,7,8,9,11,12,10],[nar16otra])">
 <option value="" ></option>
<option value=28 @if($Encuesta->nar16==28) selected @endif >Artesanos y obrero</option>
<option value=25 @if($Encuesta->nar16==25) selected @endif >Comerciante, empleado en comercios y agente de ventas</option>
<option value=41 @if($Encuesta->nar16==41) selected @endif >Conductores de maquinaria móvil terrestre, aérea, marítima, de vías ferreras</option>
<option value=21 @if($Encuesta->nar16==21) selected @endif >Funcionario y directivo</option>
<option value=35 @if($Encuesta->nar16==35) selected @endif >Finado</option>
<option value=34 @if($Encuesta->nar16==34) selected @endif >Jubilado</option>
<option value=33 @if($Encuesta->nar16==33) selected @endif >Labores del Hogar</option>
<option value=22 @if($Encuesta->nar16==22) selected @endif >Mando medio</option>
<option value=29 @if($Encuesta->nar16==29) selected @endif >Obreros especializados</option>
<option value=16 @if($Encuesta->nar16==16) selected @endif >Profesionista</option>
<option value=39 @if($Encuesta->nar16==39) selected @endif >Profesor Enseñanza Superior</option>
<option value=17 @if($Encuesta->nar16==17) selected @endif >Profesor Enseñanza Media Superior</option>
<option value=18 @if($Encuesta->nar16==18) selected @endif >Profesor Enseñanza Media</option>
<option value=19 @if($Encuesta->nar16==19) selected @endif >Profesor Enseñanza Básica</option>
<option value=20 @if($Encuesta->nar16==20) selected @endif >Trabajador del arte, espectáculos y deportes</option>
<option value=23 @if($Encuesta->nar16==23) selected @endif >Técnico</option>
<option value=24 @if($Encuesta->nar16==24) selected @endif >Trabajador de apoyo actividades administrativas</option>
<option value=27 @if($Encuesta->nar16==27) selected @endif >Trabajadores en actividades agricolas, ganaderias, silvícolas y de caza y pesca</option>
<option value=30 @if($Encuesta->nar16==30) selected @endif >Trabajador en servicios personales</option>
<option value=31 @if($Encuesta->nar16==31) selected @endif >Trabajador en servicios doméstico</option>
<option value=32 @if($Encuesta->nar16==32) selected @endif >Trabajador de servicios vigilancia y protección y fuerzas armadas</option>
<option value=26 @if($Encuesta->nar16==26) selected @endif >Vendedores ambulantes</option>
<option value=36 @if($Encuesta->nar16==36) selected @endif >No trabaja</option>
<option value=37 @if($Encuesta->nar16==37) selected @endif >No lo sabe</option>
<option value=38 @if($Encuesta->nar16==38) selected @endif >Otra(Especifíque)</option>

</select>
<br>(Especifíque)
Otra:<input  type="text" class="texto" ID="13_OTRA" name="nar16otra" size="80" maxlength="80"  @if(strlen($Encuesta->nar16otra)>2) value="{{$Encuesta->nar16otra}}" @else value=" " @endif >   

      </div>
      <div class='col' id='B'>
      <h2 class="reactivo">14).-¿Tipo de bachillerato que cursó?   </h2>
    
    <select class="select" id="14_bachillerato" name="nbr1" >
 <option value="" selected></option>
            <option value=1>CCH</option>
            <option value=2>ENP</option>
            <option value=3>BACH_PUB.</option>
            <option value=4>BACH_PRIV.</option>
            <option value=5>Sin BACH.</option>
                         </select>
    <h2 class="reactivo">15).- ¿Tiene una segunda Licenciatura?</h2>
 
      
 <select class="select" id= "15_SEGUNDA CARRERA"  name="ner20"  onchange=bloqueo20(e20) >
   <option selected="selected" value="">
   <option value=1>No </option>
   <option value=2>Si, la estoy cursando</option>
   <option value=3>Si, ya la concluí</option>
    </select>
 <h2 class="reactivo">15a).- ¿Cuál? </h2>
 <INPUT class="texto" ID="15a_cuál" NAME="ner20txt" TYPE=TEXT SIZE=35 MAXLENGTH=35>
 
 <h2 class="reactivo">15b).¿La ejerce?  </h2>
   <select class="select" id="15b_La ejerce" name="ner20a" >
   <option selected="selected" value="">
   <option value=1>No</option>
   <option value=2>Si</option>
    </select>
 <h2 class="reactivo">16).-¿Bajo qué sistema de enseñanza realizó sus estudios de licenciatura? </h2>
 
 <select class="select" id="16_Sistema" name="nar1" >
 <option value="" selected="selected"></option>
 <option value=1>Abierto</option>
 <option value=2>A distancia</option>
 <option value=3>Presencial</option>
 </select>
 
 </TD>
  </TR>
 
  <TR>
 <TD width='55%'>
 
     <h2 class="reactivo">17).-¿Durante sus estudios de bachillerato fue becario?    </h2>
   
 
 <select class="select" id="17_BECA BACHILLERATO" name="nar2"  onchange=bloqueoab(a2)  >
 <option value="" selected></option>
 <option value=1>No</option>
 <option value=2>Sí, del Programa de Fundación UNAM</option>
 <option value=3>Sí, de otro programa</option>
 </select>
 
 <h2 class="reactivo">18).- ¿Durante sus estudios de licenciatura fue becario?   </h2>
 
 <select class="select" id="18_BECA LICENCIATURA" name="nar3"  onchange=bloqueoab(a3) >
 <option value="" selected></option>
    <option value=1>No</option>
    <option value=2>Sí, del Programa de Fundación UNAM</option>
                 <option value=3>Sí, del Programa de Alta Exigencia Académica</option >
    <option value=4>Sí, de otro programa</option>
               </select>
 <br>
 
 
 <B><center> En qué medida la beca o becas que recibió contribuyeron a apoyar:</center></B>
 
 <h2 class="reactivo">19).- Su desempeño académico </h2>
 
 
 
   <select class="select" id="19_APOYO BECA" name="nar4" >
 <option value="" selected></option>
 <option value=1>Muchisimo</option>
 <option value=2>Mucho</option>
 <option value=3>Regular</option>
 <option value=4>Poco</option>
 <option value=5>Nada</option>
 </select>
 
 
 <br>
 <h2 class="reactivo">20).- La conclusión de sus estudios </h2>
 
 &nbsp;   <select class="select" id="20_APOYO ESTUDIOS" name="nar5" >
 <option value="" selected></option>
 <option value=1>Muchisimo</option>
 <option value=2>Mucho</option>
 <option value=3>Regular</option>
 <option value=4>Poco</option>
 <option value=5>Nada</option>
   </select>
 
 

      </div>

      <div class='col' id='C'>
      <h2 class="reactivo">  21.- ¿Actualmente está trabajando? </h2> 
 
    
 <select class="select" id="21_Trabajando" name="ncr1"  onchange='seccionc2(c1)'>
<option selected  value="">Seleccione...</option>
<option value=1>Sí (permanente)</option>
<option value=2>Sí (eventual)</option>
<option value=3>No (Sin buscar trabajo), (pase a la 42)</option>
<option value=4>No (En búsqueda de trabajo), (pase a la 42)</option>
<option value=5>Residente (Médico) (conteste  la 2)</option>
<option value=6>Nunca ha trabajado, (pase a la 42 y despues a la 63)</option>
</select>
 <h2 class="reactivo"> 22.- Nombre de la empresa o institución donde trabaja </h2>
 <INPUT type="text" class="texto" id="22_empresa" name="ncr2" value=" " size="110" maxlength="110"  >
    
    <h2 class="reactivo"> 22a.-Estado donde se ubica </h2> 


<select class="select" id="22a Estado"  name="ncr2a" > 
<option selected  value=""></option>
<option value=1>CDMX</option>
<option value=2>EXTRANJERO</option>
<option value=3>Aguascalientes</option>
<option value=4>Baja California</option>
<option value=5>Baja California Sur</option>
<option value=6>Campeche</option>
<option value=7>Chiapas</option>
<option value=8>Chihuahua</option>
<option value=9>Coahuila</option>
<option value=10>Colima</option>
<option value=11>Durango</option>
<option value=12>Guanajuato</option>
<option value=13>Guerrero</option>
<option value=14>Hidalgo</option>
<option value=15>Jalisco</option>
<option value=16>Estado de México</option>
<option value=17>Michoacán</option>
<option value=18>Morelos</option>
<option value=19>Nayarit</option>
<option value=20>Nuevo León</option>
<option value=21>Oaxaca</option>
<option value=22>Puebla</option>
<option value=23>Querétaro</option>
<option value=24>Quintana Roo</option>
<option value=25>San Luis Potosí</option>
<option value=26>Sinaloa</option>
<option value=27>Sonora</option>
<option value=28>Tabasco</option>
<option value=29>Tamaulipas</option>
<option value=30>Tlaxcala</option>
<option value=31>Veracruz</option>
<option value=32>Yucatán</option>
<option value=33>Zacatecas</option>
</select>

<h2 class="reactivo"> 23.- La empresa o institución donde trabaja es: 
</h2>


<select class="select" id="Pregunta 23"  name="ncr3" > 
<option selected  value=""></option>
<option value=1>Pública</option>
<option value=2>Privada</option>
<option value=3>Social</option>
</select>
<h2 class="reactivo">  24.- ¿En qué sector se ubica? </h2>


<select class="select" id="Pregunta 24" name="ncr4"   onchange=sector(c4)>
<option selected="selected" value="">
<option value=1> Agricultura, ganadería, aprovechamiento forestal, caza y pesca</option>
<option value=19>Asociaciones y agrupaciones</option>
<option value=20>Actividades de gobierno, organismos internacionales y extraterritoriales</option>
<option value=4>Construcción</option>
<option value=6>Comercio al por mayor</option>
<option value=7>Comercio al por menor</option> 
<option value=13>Dirección de corporativos y empresas</option>
<option value=23>Editorial</option>
<option value=3>Electricidad, agua y suministro de gas</option>
<option value=5>Industrias manufactureras o de la transformación</option>
<option value=9>Información en medios masivos</option>
<option value=2>Minería</option>
<option value=10>Servicios financieros y de seguros</option>
<option value=11>Servicio inmobiliario y de alquiler de bienes muebles e intangibles</option>
<option value=12>Servicios profesionales, científicos y técnicos</option>
<option value=14>Servicios de apoyo a los negocios, manejo de desecho y servicios de remediación</option>
<option value=15>Servicios de salud</option>
<option value=16>Servicios educativos</option>
<option value=17>Servicios de esparcimiento, cultural, deportivos y otros centros recreativos</option>
<option value=18>Servicios de alojamiento temporal, de preparación de alimentos y bebidas (hotel, restaurant, bar) </option>
<option value=8>Transporte, correos y almacenamiento</option>
<option value=22>Telecomunicaciones </option>
<option value=21>Otro (Especifíque)</option>
</select><br>

<h2 class="reactivo">  </h2>

24a).- Otra:<input type="text" class="texto" ID="24_OTRA" name="ncr4a" size="65" maxlength="65" value=" " > 
<h2 class="reactivo"> 25.-Aproximadamente, ¿cuántas personas laboran en la empresa?  </h2>

<select class="select" id="Pregunta 25" name="ncr5"  >
  <option selected="selected" value="">
  <option value=1> Hasta 15 empleados</option>
  <option value=2>Entre 16 y 100 empleados </option>
  <option value=3>Entre 101 y 250 empleados</option>
  <option value=4>Más de 251 empleados</option>
</select>

<h2 class="reactivo"> 26.- ¿Cuál es su condición en el trabajo? </h2>

<select class="select" id="Pregunta 26"  name="ncr6"  onchange="bloqueo6(c6)" >
    <option selected="selected" value="">
    <option value=1>Autoempleo</option>
    <option value=4>Empleado </option>
    <option value=5>Otro (Especifíque)</option></select>
    
    <h2 class="reactivo"> 26a.-¿Tipo de autoempleo? </h2>
<select class="select" id="Pregunta 26a" name="ncr6a"  >
<option selected="selected" value="">
<option value=2>Propietario</option>
    <option value=3>Profesional independiente</option>
</select>
<br>
 Otra:<input type="text" class="texto" ID="26_OTRA2" name="ncr6_a" size="65" maxlength="65" value=" " > 

 <h2 class="reactivo">  27.- ¿Cuál es su puesto? </h2>


 <INPUT type="text" class="texto" id="Pregunta 27" name="ncr7a" value="" size="110" maxlength="110"  >

<h2 class="reactivo">28.- ¿Requiere tener título profesional para el puesto que ocupa? </h2>


<select class="select" id="Pregunta 28" name="ncr7b"  >
    <option selected="selected" value="">
    <option value=1>Sí</option>
    <option value=2>No</option> </select>

    <h2 class="reactivo"> 29.- En su trabajo,¿tiene personal a su cargo? </h2>

<select class="select" id="Pregunta 29" name="ncr8"  onchange=bloqueo(c8) >
    <option selected="selected" value="">
    <option value=1>Sí</option>
    <option value=2>No</option> </select>
    
    <h2 class="reactivo"> 30.- ¿Cuántas personas trabajan con usted? </h2>


<select class="select" id="Pregunta 30" name="ncr9"  >
    <option selected="selected" value="">
    <option value=1>1 a 5 </option>
    <option value=2>6 a 10</option> 
    <option value=3>11 a 20</option> 
    <option value=4>21 a 30</option> 
    <option value=5>31 o más</option> 
</select>

<h2 class="reactivo">  31.- ¿Su trabajo es de tiempo completo?</h2> 
<select class="select" id="Pregunta 31" name="ncr10"  >
    <option selected="selected" value="">
    <option value=1>Sí</option>
    <option value=2>No</option> </select>

    <h2 class="reactivo"> 32.- ¿Qué tanto está relacionado su trabajo actual con su profesión? </h2> 

<select class="select" id="Pregunta 32" name="ncr11"   onchange=bloqueo11(c11) >
  <option selected="selected" value="">
  <option value=1>Muy relacionado</option>
  <option value=2>Medianamente relacionado</option> 
  <option value=3>No está relacionado</option> 
</select>
<h2 class="reactivo">  33.- ¿Que actividades realiza? </h2>

</TD>
<TD>

Especifique:
<INPUT type="text" class="texto" id="Pregunta 33" name="ncr12a" value=" " size="110" maxlength="110"  >

<h2 class="reactivo"> 34.- ¿Si su trabajo no está relacionado con su carrera
         es porque usted asílo decidió? </h2>

<select class="select" id="Pregunta 34" name="ncr15"  >
<option selected="selected" value="">
    <option value=1>Sí</OPTION>
    <option value=2>No</OPTION> 
</select>

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

 <script>
  function bloquear(reactivo,options,reactivosPorCerrar){

console.log( reactivo.id);
var val=document.getElementById(reactivo.id);
console.log (val.value);
for (i = 0; i < options.length; i++) {
    console.log(options[i]);
    if(val.value==options[i]){
        console.log("opcion")
        reactivosPorCerrar.forEach(ocultar);
        }else{
            reactivosPorCerrar.forEach(visibilizar);
        }
  } 

}


function ocultar(item){
document.getElementById(item.id).hidden="hidden";

}

function visibilizar(item){
document.getElementById(item.id).hidden="";
}
 </script>
@endpush