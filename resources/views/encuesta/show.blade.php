@extends('layouts.app')

@section('content')

<div class="container-fluid"  background="{{asset('img/Fondo2.jpg')}}" id='cuerpo' style="scroll-behavior: smooth;">


<div style="padding:30px;" id='datos'>
    <h1 class="text-white-50">
                 @if(!is_null($Encuesta->cuenta))
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
</nav>
</div>
<form action="">

<a href="#">
<div class="fixed">
<button class="btn fixed"  type="submit" style="background-color:{{Auth::user()->color}} ; color:white;">
    <i class="fas fa-save fa-lg"></i> &nbsp; Guardar
  </button>
</div></a>
    <div class='Scroll'> 
     
    
      <div class='col' id='A'>
      <h1 class="seccion">DATOS PERSONALES</h1>
    <hr>
    <h2 class="reactivo">1.-Fecha de Nacimiento </h2>             <!--   -------FECHA DE NACIMIENTO-->
    
    <input class="fecha" type="date" id="start" name="fechaNac"
      value="{{sprintf('%02d',$Encuesta->yernac).'-'.sprintf('%02d',$Encuesta->mesnac).'-'.$Encuesta->dianac}}"
      min="1950-01-01" max="2001-12-31">
    
    
      <h2 class="reactivo">2.-Genero </h2>             <!--   -------FECHA DE NACIMIENTO-->
    <select class="select" id= "nar7"  name="nar7" >
            <option value=""></option>
            <option value=1 @if($Encuesta->nar7==1) selected @endif>Femenino</option>
            <option value=2 @if($Encuesta->nar7==2) selected @endif>Masculino</option>
           </select> 
           <h2 class="reactivo">3.- Estado civil:</h2>
           
            <select class="select"  id="nar8" name="nar8" onchange="bloquear('nar8',[1],[nar11div])" > 
            <option value="" selected></option>
			<option value=1  @if($Encuesta->nar8==1) selected @endif>Soltero(a)</option>
			<option value=2 @if($Encuesta->nar8==2) selected @endif>Casado(a)</option>
			<option value=3 @if($Encuesta->nar8==3) selected @endif>Divorciado(a)</option>
			<option value=4 @if($Encuesta->nar8==4) selected @endif>Unión Libre</option>
			<option value=5 @if($Encuesta->nar8==5) selected @endif>Viudo(a)</option>
             </select>
             <h2 class="reactivo"> 4.- ¿Tiene hijos?</h2>
         
         <select class="select" id="nar9" name="nar9"  onchange="bloquear('nar9',[2],[nar9adiv])" >
         <option value="" selected></option>
        <option value='1' @if($Encuesta->nar9==1) selected @endif>Sí</option>
        <option value='2'@if($Encuesta->nar9==2) selected @endif>No</option> 
</select>
<div name = "nar9adiv" id="nar9adiv">
a).- ¿Cuántos?:<input class="texto" type="text"  id="nar10" name="nar10" size="2" maxlength="2" value="{{$Encuesta->nar10}}"> 
</div>
<h2 class="reactivo">5.-  Teléfono de casa</h2> 
 <INPUT type="text" class="texto"   id="telcasa" size="12" maxlength="15"  name="telcasa" value="{{$Encuesta->telcasa}}">

 <h2 class="reactivo">5a.-  Teléfono celular</h2>
 <INPUT type="text" class="texto" id="telcel" name="TELCEL"  size="15" maxlength="15" value="{{$Encuesta->TELCEL}}"  >
    
<h2 class="reactivo">6.-Teléfono  del trabajo: </h2>
<INPUT type="text" class="texto"  id="teltra"   size="12" maxlength="13"  name="teltra" value="{{$Encuesta->teltra}}">

Extensión: 
 <INPUT type="text" class="texto" id="exttra" size="5" maxlength="5" name="exttra"  value="{{$Encuesta->exttra}}" >

<h2 class="reactivo">7.- ¿Tiene correo electrónico?</h2>  

<select class="select" id="ncrcc" name="ncrcc"  onchange="bloquear('ncrcc',[2],[correo])" >
<option value="" ></option>
        <option  selected  value='1'>Sí</option>
        <option value='2'  >No</option> 
</select>
<div name="correo" id="correo">
7a).-Cúal es su correo : 

<INPUT type="text" class="texto"  id="nar1_a" name="nar1_a" size="39" maxlength="39" value="{{$Encuesta->nar1_a}}"  >
</div>
  <div name="nar11div" id="nar11div">

    <h2 class="reactivo"> 8.- Nivel de estudios de su esposo(a)</h2>
 
      <select class="select" id="nar11" name="nar11"    onchange="bloquear('nar11',[1,2,3,4,5,6,7,8,9,10,11,12],[nar11a])"  >
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
Otra:<input type="text" class="texto"   id="nar11a" name="nar11a" size="50" maxlength="50" @if(strlen($Encuesta->nar11a)>2) value="{{$Encuesta->nar11a}}" @else value=" " @endif > 


  
<h2 class="reactivo">9.-Ocupación de su esposo(a)</h2>

<select class="select" id="nar14" name="nar14" onchange="bloquear('nar14',[1,2,3,4,5,6,7,8,9,10,11,12],[nar14otra])"  >
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
Otra:<input type="text" class="texto" ID="nar14otra" name="nar14otra" size="80" maxlength="80" @if(strlen($Encuesta->nar14otra)>2) value="{{$Encuesta->nar14otra}}" @else value=" " @endif > 
 
  </div>
<h2 class="reactivo"> Cuál es o era en caso de haber fallecido el: </h2>
<h2 class="reactivo"> 10.- Nivel de estudios de su madre  </h2>
        
       <select class="select" id="nar12" name="nar12"  onchange="bloquear('nar12',[1,2,3,4,5,6,7,8,9,12,13],[nrx])" >
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
      <select class="select" id="nrx" name="nrx"  >
       <option value="" ></option>
       <option value=1 @if($Encuesta->nrx==1) selected @endif >SI</option>
       <option value=2 @if($Encuesta->nrx==2) selected @endif >No</option;n>
    </select>


    <h2 class="reactivo">11.- La ocupación de su madre (cuando cursaba la carrera )</h2>   

  <select class="select" id="nar115" name="nar15"  onchange="bloquear('nar15',[1,2,3,4,5,6,7,8,9,11,10,12],[nar15otra])" >
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
<input type="text" class="texto" ID="nar15otra" name="nar15otra" size="80" maxlength="80"  @if(strlen($Encuesta->nar15otra)>2) value="{{$Encuesta->nar15otra}}" @else value=" " @endif  > 

<h2 class="reactivo">12.- Nivel de estudios de su padre  </h2>
        
       <select class="select" id="nar13" name="nar13"   onchange="bloquear('nar13',[1,2,3,4,5,6,7,8,9,12,13],[nrxx])" >
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
      <select class="select" id="nrxx" name="nrxx"  >
       <option value=""></option>
       <option value=1 @if($Encuesta->nrxx==1) selected @endif >SI</option>
       <option value=2  @if($Encuesta->nrxx==2) selected @endif >No</option;n>
    </select>
  
    <h2 class="reactivo">13.- La ocupación de su padre (cuando cursaba la carrera )</h2> 
    

 <select class="select" id="nar16" name="nar16"  onchange="bloquear('nar16',[1,2,3,4,5,6,7,8,9,11,12,10],[nar16otra])">
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
Otra:<input  type="text" class="texto" ID="nar16otra" name="nar16otra" size="80" maxlength="80"  @if(strlen($Encuesta->nar16otra)>2) value="{{$Encuesta->nar16otra}}" @else value=" " @endif >   

      </div>
      <div class='col' id='B'>
      <h2 class="reactivo">14).-¿Tipo de bachillerato que cursó?   </h2>
    
    <select class="select" id="nbr1" name="nbr1" >
 <option value="" selected></option>
            <option value=1>CCH</option>
            <option value=2>ENP</option>
            <option value=3>BACH_PUB.</option>
            <option value=4>BACH_PRIV.</option>
            <option value=5>Sin BACH.</option>
                         </select>
    <h2 class="reactivo">15).- ¿Tiene una segunda Licenciatura?</h2>
 
      
 <select class="select" id= "ner20"  name="ner20"  onchange=bloqueo20(e20) >
   <option selected="selected" value="">
   <option value=1>No </option>
   <option value=2>Si, la estoy cursando</option>
   <option value=3>Si, ya la concluí</option>
    </select>
 <h2 class="reactivo">15a).- ¿Cuál? </h2>
 <INPUT class="texto" ID="ner20txt" NAME="ner20txt" TYPE=TEXT SIZE=35 MAXLENGTH=35>
 
 <h2 class="reactivo">15b).¿La ejerce?  </h2>
   <select class="select" id="ner20a" name="ner20a" >
   <option selected="selected" value="">
   <option value=1>No</option>
   <option value=2>Si</option>
    </select>
 <h2 class="reactivo">16).-¿Bajo qué sistema de enseñanza realizó sus estudios de licenciatura? </h2>
 
 <select class="select" id="nar1" name="nar1" >
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
   
 
 <select class="select" id="nar2" name="nar2"  onchange=bloqueoab(a2)  >
 <option value="" selected></option>
 <option value=1>No</option>
 <option value=2>Sí, del Programa de Fundación UNAM</option>
 <option value=3>Sí, de otro programa</option>
 </select>
 
 <h2 class="reactivo">18).- ¿Durante sus estudios de licenciatura fue becario?   </h2>
 
 <select class="select" id="nar3" name="nar3"  onchange=bloqueoab(a3) >
 <option value="" selected></option>
    <option value=1>No</option>
    <option value=2>Sí, del Programa de Fundación UNAM</option>
                 <option value=3>Sí, del Programa de Alta Exigencia Académica</option >
    <option value=4>Sí, de otro programa</option>
               </select>
 <br>
 
 
 <B><center> En qué medida la beca o becas que recibió contribuyeron a apoyar:</center></B>
 
 <h2 class="reactivo">19).- Su desempeño académico </h2>
 
 
 
   <select class="select" id="nar4" name="nar4" >
 <option value="" selected></option>
 <option value=1>Muchisimo</option>
 <option value=2>Mucho</option>
 <option value=3>Regular</option>
 <option value=4>Poco</option>
 <option value=5>Nada</option>
 </select>
 
 
 <br>
 <h2 class="reactivo">20).- La conclusión de sus estudios </h2>
 
 &nbsp;   <select class="select" id="nar5" name="nar5" >
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
 
    
 <select class="select" id="ncr1" name="ncr1"  onchange='seccionc2(c1)'>
<option selected  value="">Seleccione...</option>
<option value=1>Sí (permanente)</option>
<option value=2>Sí (eventual)</option>
<option value=3>No (Sin buscar trabajo), (pase a la 42)</option>
<option value=4>No (En búsqueda de trabajo), (pase a la 42)</option>
<option value=5>Residente (Médico) (conteste  la 2)</option>
<option value=6>Nunca ha trabajado, (pase a la 42 y despues a la 63)</option>
</select>
 <h2 class="reactivo"> 22.- Nombre de la empresa o institución donde trabaja </h2>
 <INPUT type="text" class="texto" id="ncr2" name="ncr2" value=" " size="110" maxlength="110"  >
    
    <h2 class="reactivo"> 22a.-Estado donde se ubica </h2> 


<select class="select" id="ncr2a"  name="ncr2a" > 
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


<select class="select" id="ncr3"  name="ncr3" > 
<option selected  value=""></option>
<option value=1>Pública</option>
<option value=2>Privada</option>
<option value=3>Social</option>
</select>
<h2 class="reactivo">  24.- ¿En qué sector se ubica? </h2>


<select class="select" id="ncr4" name="ncr4"   onchange=sector(c4)>
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

24a).- Otra:<input type="text" class="texto" ID="ncr4a" name="ncr4a" size="65" maxlength="65" value=" " > 
<h2 class="reactivo"> 25.-Aproximadamente, ¿cuántas personas laboran en la empresa?  </h2>

<select class="select" id="ncr5" name="ncr5"  >
  <option selected="selected" value="">
  <option value=1> Hasta 15 empleados</option>
  <option value=2>Entre 16 y 100 empleados </option>
  <option value=3>Entre 101 y 250 empleados</option>
  <option value=4>Más de 251 empleados</option>
</select>

<h2 class="reactivo"> 26.- ¿Cuál es su condición en el trabajo? </h2>

<select class="select" id="ncr6"  name="ncr6"  onchange="bloqueo6(c6)" >
    <option selected="selected" value="">
    <option value=1>Autoempleo</option>
    <option value=4>Empleado </option>
    <option value=5>Otro (Especifíque)</option></select>
    
    <h2 class="reactivo"> 26a.-¿Tipo de autoempleo? </h2>
<select class="select" id="ncr6a" name="ncr6a"  >
<option selected="selected" value="">
<option value=2>Propietario</option>
    <option value=3>Profesional independiente</option>
</select>
<br>
 Otra:<input type="text" class="texto" ID="ncr6_a" name="ncr6_a" size="65" maxlength="65" value=" " > 

 <h2 class="reactivo">  27.- ¿Cuál es su puesto? </h2>


 <INPUT type="text" class="texto" id="ncr7a" name="ncr7a" value="" size="110" maxlength="110"  >

<h2 class="reactivo">28.- ¿Requiere tener título profesional para el puesto que ocupa? </h2>


<select class="select" id="ncr7b" name="ncr7b"  >
    <option selected="selected" value="">
    <option value=1>Sí</option>
    <option value=2>No</option> </select>

    <h2 class="reactivo"> 29.- En su trabajo,¿tiene personal a su cargo? </h2>

<select class="select" id="ncr8" name="ncr8"  onchange=bloqueo(c8) >
    <option selected="selected" value="">
    <option value=1>Sí</option>
    <option value=2>No</option> </select>
    
    <h2 class="reactivo"> 30.- ¿Cuántas personas trabajan con usted? </h2>


<select class="select" id="ncr9" name="ncr9"  >
    <option selected="selected" value="">
    <option value=1>1 a 5 </option>
    <option value=2>6 a 10</option> 
    <option value=3>11 a 20</option> 
    <option value=4>21 a 30</option> 
    <option value=5>31 o más</option> 
</select>

<h2 class="reactivo">  31.- ¿Su trabajo es de tiempo completo?</h2> 
<select class="select" id="ncr10" name="ncr10"  >
    <option selected="selected" value="">
    <option value=1>Sí</option>
    <option value=2>No</option> </select>

    <h2 class="reactivo"> 32.- ¿Qué tanto está relacionado su trabajo actual con su profesión? </h2> 

<select class="select" id="ncr11" name="ncr11"   onchange=bloqueo11(c11) >
  <option selected="selected" value="">
  <option value=1>Muy relacionado</option>
  <option value=2>Medianamente relacionado</option> 
  <option value=3>No está relacionado</option> 
</select>
<h2 class="reactivo">  33.- ¿Que actividades realiza? </h2>

</TD>
<TD>

Especifique:
<INPUT type="text" class="texto" id="ncr12a" name="ncr12a" value=" " size="110" maxlength="110"  >

<h2 class="reactivo"> 34.- ¿Si su trabajo no está relacionado con su carrera
         es porque usted asílo decidió? </h2>

<select class="select" id="ncr15" name="ncr15"  >
<option selected="selected" value="">
    <option value=1>Sí</OPTION>
    <option value=2>No</OPTION> 
</select>

      </div>

      <div class='col' id='D'>
       
    <h2 class="reactivo">44.- ¿Comó fue su transición de la universidad al mercado laboral, en terminos de encontrar un trabajo relacionado con su campo profesional?    </h2>


<select class="select" id="ndr1" name="ndr1" onchange=dificil(d1) >
           <option  value="" selected></option>
        <option value=1>Muy fácil</option>
        <option value=2>Fácil</option> 
        <option value=3>Medianamente</option> 
        <option value=4>Difícil</option> 
        <option value=5>Muy difícil</option> 
        <option value=6>No he buscado un trabajo relacionado con mi carrera (Pase 61)</option> 
        <option value=7>No he encontrado un trabajo relacionado con mi carrera (Pase 61)</option> 
</select>



<h2 class="reactivo"> 45.- ¿Cómo encontró su primer  trabajo  en  su  campo profesional?   </h2>
<select class="select" id="ndr2" name="ndr2" onChange="bloqueod2(d2)">
<option selected="selected" value="">
<option value=6>Aviso en el periódico</option>
<option value=9>Autoempleo (Pase a la 57)</option>
<option value=1>En la bolsa de trabajo de la UNAM</option>
<option value=2>En otra bolsa de trabajo</option>
<option value=8>Por relaciones en el servicio social</option>
<option value=10>Integración a un negocio familiar (Pase a la 57)</option>
<option value=11>Iniciativa propia</option>
<option value=7>Relaciones laborales previas</option>
<option value=3>Recomendado por amigos</option>
<option value=4>Recomendado por parientes</option>
<option value=5>Recomendado por un profesor</option>
<option value=12>Internet (especifíque)</option>
<option value=13>Prácticas profesionales (especifíque)</option>
<option value=14>Ofrecimiento directo (especifíque)</option>
<option value=16>Anuncio</option>
<option value=17>Convocatoria o Examen de selecci&oacuten</option>
<option value=15>Otra forma (especifíque)</option>
          </select>
<br>Especifíque:
<INPUT id="ndr2a" class="texto"  NAME="ndr2a"  TYPE=TEXT SIZE="60" MAXLENGTH="60" >


  <h2 class="reactivo">  ¿Qué tan importantes fueron cada uno de los siguientes factores para su contratación, en su primer trabajo?  </h2>


<h2 class="reactivo">    46).- El prestigio de la UNAM </h2>
  

	<select class="select" id="ndr3" name="ndr3" >
        <option selected="selected" value="">
        <option value=1>Muy importante</option>
        <option value=2>Importante</option> 
        <option value=3>Medianamente importante</option> 
        <option value=4>Poco importante</option> 
        <option value=5>Nada importante </option> 
        </select>

        <h2 class="reactivo">  47).- Su comportamiento en la entrevista y/o en los exámenes de selección  </h2>
	<select class="select" id="ndr8" name="ndr8" >
        <option selected="selected" value="">
        <option value=1>Muy importante</option>
        <option value=2>Importante</option> 
        <option value=3>Medianamente importante</option> 
        <option value=4>Poco importante</option> 
        <option value=5>Nada importante </option> 
        </select>

        <h2 class="reactivo">   	48.- Sus conocimientos sobre la carrera </h2>

	<select class="select" id="ndr4" name="ndr4" >
        <option selected="selected" value="">
        <option value=1>Muy importante</option>
        <option value=2>Importante</option> 
        <option value=3>Medianamente importante</option> 
        <option value=4>Poco importante</option> 
        <option value=5>Nada importante </option> 
        </select>

        <h2 class="reactivo">    49.- Recomendaciones</h2>


	<select class="select" id="ndr9" name="ndr9" >
        <option selected="selected" value="">
        <option value=1>Muy importante</option>
        <option value=2>Importante</option> 
        <option value=3>Medianamente importante</option> 
        <option value=4>Poco importante</option> 
        <option value=5>Nada importante </option> 
        </select>

  <h2 class="reactivo"> 50.- Sus conocimientos sobre computación   </h2>
	<select class="select" id="ndr5" name="ndr5" >
        <option selected="selected" value="">
        <option value=1>Muy importante</option>
        <option value=2>Importante</option> 
        <option value=3>Medianamente importante</option> 
        <option value=4>Poco importante</option> 
        <option value=5>Nada importante </option> 
        </select>

  <h2 class="reactivo">  51.- Su género (sexo)  </h2>
	<select class="select" id="ndr10" name="ndr10" >
        <option selected="selected" value="">
        <option value=1>Muy importante</option>
        <option value=2>Importante</option> 
        <option value=3>Medianamente importante</option> 
        <option value=4>Poco importante</option> 
        <option value=5>Nada importante </option> 
        </select>

        <h2 class="reactivo"> 52.- Su  dominio  del inglés   </h2>
	<select class="select" id="ndr6" name="ndr6" >
        <option selected="selected" value="">
        <option value=1>Muy importante</option>
        <option value=2>Importante</option> 
        <option value=3>Medianamente importante</option> 
        <option value=4>Poco importante</option> 
        <option value=5>Nada importante </option> 
        </select>
 

        <h2 class="reactivo"> 53.- Su edad  </h2>
	<select class="select" id="ndr11" name="ndr11" >
        <option selected="selected" value="">
        <option value=1>Muy importante</option>
        <option value=2>Importante</option> 
        <option value=3>Medianamente importante</option> 
        <option value=4>Poco importante</option> 
        <option value=5>Nada importante </option> 
        </select>


        <h2 class="reactivo">  	54.- Su dominio de otro idioma  </h2>
	<select class="select" id="ndr7" name="ndr7" >
        <option selected="selected" value="">
        <option value=1>Muy importante</option>
        <option value=2>Importante</option> 
        <option value=3>Medianamente importante</option> 
        <option value=4>Poco importante</option> 
        <option value=5>Nada importante </option> 
        </select>


        <h2 class="reactivo">   55.- Su estado civil       </h2>
	<select class="select" id="ndr12" name="ndr12" >
        <option selected="selected" value="">
        <option value=1>Muy importante</option>
        <option value=2>Importante</option> 
        <option value=3>Medianamente importante</option> 
        <option value=4>Poco importante</option> 
        <option value=5>Nada importante </option> 
        </select>



        <h2 class="reactivo">  55.1 - Cercania al domicilio.  </h2>
	<select class="select" id="ndr12a" name="ndr12a" >
        <option selected="selected" value="">
        <option value=1>Muy importante</option>
        <option value=2>Importante</option> 
        <option value=3>Medianamente importante</option> 
        <option value=4>Poco importante</option> 
        <option value=5>Nada importante </option> 
        </select>


        <h2 class="reactivo">55.2 - Experiencia profesional    </h2>
	<select class="select" id="ndr12b" name="ndr12b" >
        <option selected="selected" value="">
        <option value=1>Muy importante</option>
        <option value=2>Importante</option> 
        <option value=3>Medianamente importante</option> 
        <option value=4>Poco importante</option> 
        <option value=5>Nada importante </option> 
        </select>

        <h2 class="reactivo"> 55.3 - Título profesional.   </h2>
	<select class="select" id="ndr12c" name="ndr12c" >
        <option selected="selected" value="">
        <option value=1>Muy importante</option>
        <option value=2>Importante</option> 
        <option value=3>Medianamente importante</option> 
        <option value=4>Poco importante</option> 
        <option value=5>Nada importante </option> 
        </select>

  <h2 class="reactivo">  56.- Otro factor para su contratación, ¿Cuál? </h2>

<INPUT id="Pregunta 56" class="ndr13a"  NAME="ndr13a" value=" " TYPE=TEXT SIZE="60" MAXLENGTH="60" >

  <h2 class="reactivo">  57.- ¿Cuándo encontró su primer trabajo relacionado con su campo profesional?  </h2>
<select class="select" id="ndr14" name="ndr14"  onchange='bloqueod14(d14)'>
<option selected="selected" value="">
   <option value=1>Desde que estaba estudiando (Pase a la 58)</option>
   <option value=2>Después de egresar de la carrera </option>
   <option value=3>En el momento que terminó </option>
  </select>

  <h2 class="reactivo">   58.- ¿rCuánto tiempo después  de  egresar  de  la licenciatura obtuvo su primer trabajo? </h2>
<select class="select" id="nd15" name="nd15" >
<option selected="selected" value="">
   <option value=1>6 meses o menos</option>
   <option value=2>de 6 meses a un año </option>
   <option value=3> más de un año</option>
  </select>

  <h2 class="reactivo"> 59.- ¿Actualmente sigue laborando en el mismo trabajo?</h2>
<select class="select" id="ndr16" name="ndr16" >
<option selected="selected" value="">
   <option value=1>Sí</option>
   <option value=2>No</option>
  </select>

  <h2 class="reactivo"> 60.- ¿Cuántos trabajos ha tenido desde que egresó de la licenciatura? </h2>
<select class="select" id="ndr17" name="ndr17" >
<option selected="selected" value="">
   <option value=1>Uno</option>
   <option value=2>Dos </option>
   <option value=3>De tres a seis</option>
 <option value=4>Más de seis</option>
 <option value=5>Ninguno</option>
 </select>




 <h2 class="reactivo">  Desde su inserción al campo laboral a la fecha, considera que su situación, con relación a el:</h2>

 <h2 class="reactivo">61).- Puesto que ocupa    </h2>
<select class="select" id="ndr18" name="ndr18">
        <option selected="selected" value="">
<option value=1>Mejoró</option>
<option value=2>Es la misma</option>
<option value=3>Empeoró</option>
    </select>

    <h2 class="reactivo">62).- Salario    </h2> 
<select class="select" id="ndr19" name="ndr19" >
        <option selected="selected" value="">
<option value=1>Mejoró</option>
<option value=2>Es la misma</option>
<option value=3>Empeoró</option>
          </select>

      </div>

      <div class='col' id='E'>
       
      <h1 class="seccion">SECCION E1</h1>
    <h2 class="reactivo">  </h2>
    63.- ¿Desde que egresó de la licenciatura ha realizado actividades formales de actualización en su campo profesional?
    (cursos, diplomados,seminarios, etc.)
         <select class="select" id="ner1" name="ner1"  onchange=bloqueos1(e1) > 
        <option  value="" selected></option>
       <option value=1>Sí</option>
       <option value=2>No (pase a la 72)</option>
         </select>

         <h2 class="reactivo">  </h2>z
    64.- ¿Cada cuando lo realiza?-----------
          <select class="select" id="ner2" name="ner2"  >
          <option value=""></option>
       <option value=1>Cada seis meses</option>
       <option value=2>Cada año</option>
       <option value=3>Cada dos o tres años</option>
       <option value=4>Continuamente</option>
        </select>
  
        <h2 class="reactivo">  </h2>
    a).-¿Para su actualización ha requerido el idioma Inglés o algún otro idioma?
         <select class="select" id="ner1a" name="ner1a"  > 
        <option  value="" selected></option>
       <option value=1>Sí</option>
       <option value=2>No </option>
         </select>
    
         <h2 class="reactivo">  </h2>
    <b>¿Dónde las ha realizado?</b>
    
    <h2 class="reactivo">  </h2>
    65.- En la UNAM
    <select class="select" id="ner3"  name="ner3" >
    <option value="" selected="selected"></option>
        <option value=1>Sí</option>
       <option value=2>No</option>
       </select>

       <h2 class="reactivo">  </h2>
    66.- En otra institución pública
    <select class="select" id="ner4" name="ner4" >
    <option value="" selected="selected"></option>
        <option value=1>Sí</option>
       <option value=2>No</option>
       </select>
    
       <h2 class="reactivo">  </h2>
67.- En otra institución privada
    <select class="select" id="ner5" name="ner5" >
    <option value="" selected="selected"></option>
        <option value=1>Sí</option>
       <option value=2>No</option>
       </select>

       <h2 class="reactivo">  </h2>
    68.-En la empresa o institución en la que trabaja
    <select class="select" id="ner6" name="ner6" >
    <option value="" selected="selected"></option>
    <option value=1>Sí</option>
    <option value=2>No</option>
    </select>

    <h2 class="reactivo">  </h2>
    69.-En una asociación
    <select class="select" id="ner7" name="ner7" >
    <option value="" selected="selected"></option>
    <option value=1>Sí</option>
    <option value=2>No</option>
    </select>
   
    <h2 class="reactivo">  </h2>
    70.-En Internet
    <select class="select" id="ner7int" name="ner7int" >
    <option value="" selected="selected"></option>
    <option value=1>Sí</option>
    <option value=2>No</option>
    </select>
  
    <h2 class="reactivo">  </h2>
    71.-Otro lugar
    <h2 class="reactivo">  </h2>
    71a).-¿Cúal?
    <INPUT id="ner7a" NAME="ner7a" TYPE=TEXT class="texto"  value=" " SIZE=60 MAXLENGTH=60 >
      
      <h2 class="reactivo">  </h2>
    <B>Ha realizado estudios de:</B> <BR>
    
    72.- <B>¿Posgrado?</B>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <select class="select" id="ner8" name="ner8"  onchange=bloqueos8(e8) >
       <option selected="selected" value="">
       <option value=1>Sí</option>
       <option value=2>No (pase a 82 o 77)</option >
    </select>
   
    <h2 class="reactivo">  </h2>
    72a).-¿Qué tan relacionados están los estudios de posgrado que realiza y su carrera?
    <select class="select" id="ner9" name="ner9" >
       <option selected="selected" value="">
       <option value=1>Muy relacionados</option>
       <option value=2>Medianamente relacionados</option>
     <option value=3>Poco o nada relacionados</option>
    </select>
 
    
    <h2 class="reactivo">  </h2>
    73.- <B>¿Especialización?</B>
    <select class="select" id="ner10" name="ner10"  onchange=bloqueos10(e10) >
    <option selected="selected" value="">
    <option value=1>Sí</option>
       <option value=2>No</option>
      </select>


    <h2 class="reactivo">  </h2>
    ¿Cuál? <INPUT   id="ner10a" name="ner10a" TYPE=TEXT class="texto"  value=" " SIZE=60 MAXLENGTH=60 >
   
    <h2 class="reactivo">  </h2>
    <TD width=30%>73a).- ¿Ya se graduó?
    <select class="select" id="ner11" name="ner11" >
    <option selected="selected" value="">
      <option value=1>Sí</option>
       <option value=2>No</option>
      </select>
    
      <h2 class="reactivo">  </h2>
    74.- ¿En dónde los hizo?
    <select class="select" id="ner12" name="ner12" >
    <option selected="selected" value="">
       <option value=1>En la UNAM</option>
       <option value=2>En otra institución pública</option>
       <option value=3>En otra institución privada</option>
       <option value=4>En el extranjero</option>
      </select>
   
      <h2 class="reactivo">  </h2>
    75.- <b>¿Maestría?</b>
    <select class="select" id="ner13" name="ner13"  onchange=bloqueos13(e13) >
    <option selected="selected" value="">
        <option value=1>Sí</option>
       <option value=2>No</option>
     </select>
  
     <h2 class="reactivo">  </h2>
    75a).- ¿Ya se graduó?
    <select class="select" id="ner14" name="ner14" >
    <option selected="selected" value="">
      <option value=1>Sí</option>
       <option value=2>No</option>
      </select>
   
      <h2 class="reactivo">  </h2>
    76.- ¿En dónde los hizo?
    <select class="select" id="ner15"  name="ner15" >
    <option selected="selected" value="">
       <option value=1>En la UNAM</option>
       <option value=2>En otra institución pública</option>
       <option value=3>En otra institución privada</option>
       <option value=4>En el extranjero</option>
      </select>
    
 
    
      <h2 class="reactivo">  </h2>
    77.-¿Subespecialización? (solo médicos)
    <select class="select" id="ner12a" name="ner12a"   onchange=bloqueos15(e12a)>
    <option value=0>-</option>
      <option value=1>Sí</option>
    <option value=2>No</option>
      </select>
    
      <h2 class="reactivo">  </h2>
    77a).-¿En que área? 
    <INPUT   id="ner12b" name="ner12b" TYPE=TEXT  class="texto" value=" " SIZE=60 MAXLENGTH=60 >
    
 
      <h2 class="reactivo">  </h2>
    78.-¿Ha realizado estudios de Doctorado?
    <select class="select" id="ner16" name="ner16"  onchange=bloqueo16(e16) >
     <option selected="selected" value="">
        <option value=1>Sí</option>
       <option value=2>No (Pase a la 81)</option>
     </select>
   
     <h2 class="reactivo">  </h2>
    79.- ¿Ya se graduó?
    <select class="select" id="ner17" name="ner17" >
    <option selected="selected" value="">
      <option value=1>Sí</option>
       <option value=2>No</option>
      </select>
   
      <h2 class="reactivo">  </h2>
    80).- ¿En dónde los hizo?-
    <select class="select" id="ner18" name="ner18" >
    <option selected="selected" value="">
       <option value=1>En la UNAM</option>
       <option value=2>En otra institución pública</option>
       <option value=3>En otra institución privada</option>
       <option value=4>En el extranjero</option>
      </select>
    
  
    
      <h2 class="reactivo">  </h2>
    <BR>81.-¿Cuál es la razón más importante por la que realiza(ó) estos estudios (posgrado y/o especialidad y/o doctorado)?
         <select class="select" id="ner19" name="ner19"  > 
       <option selected="selected" value="">
       <option value=1>Interés por la investigación</option>
       <option value=2>Inteés en profundizar en la disciplina</option>
       <option value=3>Quería cambiar de campo</option>
       <option value=4>Falta de oportunidades de empleo en la carrera</option>
       <option value=5>Incrementar ingresos</option>
       <option value=6>Alcanzar un nivel más alto en el trabajo</option>
       <option value=7>Otra</option>
         </select>
      </div>

      <div class='col' id='F'>
       
    <h2 class="reactivo">  </h2>
<BR>81.- ¿Cuál es la razón más importante por la que realiza(ó) estos estudios (posgrado y/o especialidad y/o doctorado)?
    <select class="select" id="ner19" name="ner19"  > 
  <option selected="selected" value="">
  <option value=1>Interés por la investigación</option>
  <option value=2>Interés en profundizar en la disciplina</option>
  <option value=3>Queréa cambiar de campo</option>
  <option value=4>Falta de oportunidades de empleo en la carrera</option>
  <option value=5>Incrementar ingresos</option>
  <option value=6>Alcanzar un nivel más alto en el trabajo</option>
  <option value=7>Otra</option>
    </select>
 
    <h2 class="reactivo">  </h2>
82.-La carrera que estudió 
<select class="select" id="nfr"  name="nfr"  onchange=bloqueof(f)>
 <option selected="selected" value=""></option>
   <option value=1>La eligió </option>
  <option value=2>Se la asignaron (Pase a la 84)</option>
  </select>


  <h2 class="reactivo">  </h2>
83. ¿Cuál  fue la razón más importante por la que usted eligió su carrera?
<select class="select" id="nfr1"  name="nfr1"  onchange=bloqueof(f)>
<option value="" selected="selected"></option>
<option value=1>El prestigio de la profesión</option>
<option value=2>Sus  habilidades  y  fortalezas   académicas</option>
<option value=3>Opinión de amistades y/o familiares</option>
<option value=4>Perspectivas de trabajo</option>
<option value=5>Perspectivas de ingresos altos</option>
<option value=6>Su género (sexo)</option>
<option value=7>Facilidad para ingresar a esa carrera</option>
<option value=8>El tipo de actividades profesionales</option>
<option value=9>Contribuir al desarrollo del país</option>
<option value=10>Contribuir al  desarrollo de la ciencia o cultura</option>
<option value=11>Otro</option>
  </select>

  <h2 class="reactivo">  </h2>
<BR>84.- ¿Durante sus estudios de bachillerato  se le proporcionó orientación vocacional?
<select class="select" id="nfr2" name="nfr2" >
<option selected="selected" value="">
 <option value=1>Sí, y me fue útil</option>
 <option value=2>Sí, y me fue medio útil</option>
 <option value=3>Sí, pero no fue  útil</option>
<option value=4>No </option>
 </select>

 <h2 class="reactivo">  </h2>
85.- Tomando en cuenta sus experiencias posteriores a la conclusión de la licenciatura
¿volvería   a elegir la misma carrera?
<select class="select" id="nfr3" name="nfr3"  onchange=bloqueo13(f3) >
<option selected="selected" value="">
  <option value=1>Sí (pase a la 86)</option>
  <option value=2>No, una relacionada</option>
  <option value=3>No, una totalmente diferente</option>
   </select>
<br>

<h2 class="reactivo">  </h2>
85a).- ¿Por qué no la elegiría?
  <select class="select" id="Pregunta 85a"  name="nfr4"> 
  <option selected="selected" value="">
  <option value=1>Esta carrera no fue mi primera opción</option>
  <option value=2>No ha podido encontrar trabajo en este campo</option>
  <option value=3>No está satisfecho(a) con su trabajo</option>
  <option value=4>No está satisfecho(a) con el salario que percibe en su  actual trabajo</option>
  <option value=5>Un cambio en sus intereses</option>
  <option value=6>En la carrera no adquirió las habilidades prácticas  necesarias para el trabajo</option>
  <option value=7>Otra</option>
  </select>
  
  <h2 class="reactivo">  </h2>
     86.- ¿Volvería a estudiar en la UNAM?
    <select class="select" id="Pregunta 86" name="nfr15"  onchange=bloque15(f15)>
    <option selected="selected" value="">
    <option value=1>Sí (pasa a la 87)</option>
    <option value=2>No</option>
   </select> 
   
   <h2 class="reactivo">  </h2>
   86a).- ¿Por qué?
<INPUT  id="Pregunta 86a" type="text" class="texto" value=" " name="nfr15a" size="35" maxlength="35" >

  <h2 class="reactivo">  </h2>
 87).- ¿Recomendaría su escuela o facultad?
   <select class="select" id="Pregunta 87" name="nfr16"  onchange=bloque16(f16)>
     <option value="" selected="selected"></option>
     <option value=1>Sí (pasa a la 88)</option>
     <option value=2>No</option>
    </select>

    <h2 class="reactivo">  </h2>
87a).- ¿Por qué?
<INPUT id="Pregunta 87a" Type='Text' name="nfr16a" size='35' maxlength='35 ' >

  <h2 class="reactivo">  </h2>
88).-¿En qué porcentaje los programas de las asignaturas que curs&oacute estaban actualizados?
<select class="select" id="Pregunta 88"  name="nfr7" >
<option value="" selected="selected"></option>
  <option value=1>100%</option>
  <option value=2>75%</option>
  <option value=3>50%</option>
  <option value=4>25%</option>
  <option value=5>0%</option>
  </select></TD>
  
  
  <h2 class="reactivo">  </h2>
89.-¿El plan de estudios que cursó debería?
<select class="select" id="Pregunta 89" name="nfr8"  )>
<option value="" selected="selected"></option>
   <option value=1>Permanecer igual</option>
  <option value=2>Modificarse</option>
  <option value=3>Reestructurarse completamente</option>
  </select> </TD>

  <h2 class="reactivo">  </h2>
90.- ¿Considera qué su formación teórica  fue adecuada?
<select class="select" id="Pregunta 90" name="nfr9" >
  <option selected="selected" value="">
  <option value=1>Totalmente de acuerdo</option>
  <option value=2>De acuerdo</option>
  <option value=3>Medianamente de acuerdo</option>
  <option value=4>En desacuerdo</option>
  <option value=5>Totalmente en desacuerdo</option>
</select>

<h2 class="reactivo">  </h2>
91.- ¿Considera qué  su   formación   práctica   fue adecuada?
<select class="select" id="Pregunta 91" name="nfr10" >
     <option selected="selected" value="">
 <option value=1>Totalmente de acuerdo</option>
  <option value=2>De acuerdo</option>
  <option value=3>Medianamente de acuerdo</option>
  <option value=4>En desacuerdo</option>
  <option value=5>Totalmente en desacuerdo</option>
</select>

<h2 class="reactivo">  </h2>
92.- ¿Considera qué faltaron temas importantes en el plan de estudios que usted cursó?
<select class="select" id="Pregunta 92" name="nfr11"  onchange=bloque11(f11)>
 <option value="" selected="selected"></option>
 <option value=1>Sí</option>
 <option value=2>No (Pasar a 93)</option>
 </select>


 <h2 class="reactivo">  </h2>
92a).- ¿Cúales?
<INPUT type="text" class="texto" id="Pregunta 92a" name="nfr11a" size="70" maxlength="75" >

  <h2 class="reactivo">  </h2>
93.- ¿Con qué calidad se impartía la enseñanza?
<select class="select" id="Pregunta 93" name="nfr12" >
<option selected="selected" value="">
 <option value=1>Excelente</option>
  <option value=2>Buena</option>
  <option value=3>Regular</option>
  <option value=4>Mala</option>
  <option value=5>Deficiente</option>
 </select>


 <h2 class="reactivo">  </h2>
94.-¿Con qué frecuencia interactuó con sus profesores  dentro  del aula?

<select class="select" id="Pregunta 94" name="nfr13" >
<option selected="selected" value="">
 <option value=1>Muy frecuentemente</option>
 <option value=2>Frecuentemente</option>
 <option value=3>Esporádicamente</option>
 <option value=4>Casi nunca</option>
 <option value=5>Nunca</option>
 </select>


<h2 class="reactivo">  </h2>
95.-¿Con qué frecuencia interactuó con sus profesores  fuera del aula?
<select class="select" id="Pregunta 95" name="nfr22" >
 <option selected="selected" value="">
 <option value=1>Muy frecuentemente</option>
 <option value=2>Frecuentemente</option>
 <option value=3>Esporádicamente</option>
 <option value=4>Casi nunca</option>
 <option value=5>Nunca</option>
 </select>

 <h2 class="reactivo">  </h2>
96.- ¿Durante sus estudios profesionales recibió o percibió que 
otros estudiantes recibieran algún tipo de 
discriminación? 
   
<select class="select" id="Pregunta 96" name="nfr23a"   onchange=bloqueo23(f23a)>
<option selected="selected" value="">
 <option value=1>Sí (Especifíque)</option>
 <option value=2>No (Pase a la 98)</option>
  </select>
    </TD>
</TR>
<TR>
  <TD> 
97.-Especifíque:----
<select class="select" id="Pregunta 97" name="nfr23"  >
<option selected="selected" value="">
 <option value=1>Sexo</option>
 <option value=2>Nivel socioeconómico </option>
 <option value=3>Apariencia física </option>
 <option value=4>Religión </option>
 <option value=5>Posición política </option>
 <option value=6>Otra  </option>
  </select>
    </TD>     
<TD>
97a) Otra-
<INPUT id="Pregunta 97a" name="nfr24" TYPE=TEXT  class="texto" alue=" " SIZE=50 MAXLENGTH=80 >
</TD>
</TR>

<TR >
<TD WIDTH=60%>
98.- ¿Cómo considera que fue la carga de trabajo durante sus estudios profesionales?
<BR> (exámenes, tareas, proyectos,etc)
    </TD>
    <TD>
<select class="select" id="Pregunta 98" name="nfr25" > 
  <option selected="selected" value="">
  <option value=1>Muy alta</option>
  <option value=2>Alta</option>
  <option value=3>Media</option>
  <option value=4>Baja</option>
  <option value=5>Muy baja o nula</option>

  </select>
   </TD>


</TR>

 <TR >
<TD >
99.- ¿Cómo  fue  su  desempeño  como  estudiante durante sus estudios profesionales?
    </TD>
    <TD>
 <select class="select" id="Pregunta 99"  name="nfr26" >
     <option selected="selected" value="">
  <option value=1>Excelente</option>
  <option value=2>Bueno</option>
  <option value=3>Regular</option>
  <option value=4>Malo</option>
  <option value=5>Deficiente</option>
   </select>
    </TD>
</TR>
<TR>
  <TD> 
100.- ¿Ya se tituló?
    </TD>
    <TD>
   <select class="select" id="Pregunta 100"  name="nfr27"  onchange=bloqueo27(f27) >
     <option value=1 selected="selected"></option>
     <option value=1>Sí</option>
     <option value=2>No</option>
     <OPTION VALUE=3>No, estoy en trámite</OPTION>
    </select>

101.- ¿Cuánto tiempo después de egresar se tituló?

<select class="select" id="Pregunta 101" name="nfr28" >
<option value="" selected="selected"></option>
  <option value=1>Durante el primer año después de egresar</option>
  <option value=2>Dos años después de egresar</option>
  <option value=3>Tres años o más después de egresar</option>
</select>


<h2 class="reactivo">  </h2>
102.- ¿Cuál es el motivo más importante por el que no se ha titulado?
     <select class="select" id="Pregunta 102"  name="nfr29"  onchange=bloqueo29(f29)>
<option value="" selected="selected"></option>
   <option value=1>Trámites  engorrosos y difíciles</option>
  <option value=2>No he tenido tiempo por estar trabajando</option>
  <option value=3>No he tenido tiempo por obligaciones familiares</option>
  <option value=4>No he podido concluir la tesis</option>
  <option value=5>No he hecho la tesis</option>
  <option value=6>No me interesa hacerlo</option>
  <option value=7>No, por estar estudiando</option>
  <option value=10>No acreditar el o los idiomas</option>
  <option value=11>Economicas</option>
  <option value=12>Esperar la convocatoria para diplomados o examen de conocimientos</option>
  <option value=13>Problemas con el asesor</option>
  <option value=14>No ha realizado el servicio social</option>
  <option value=15>Cursando el diplomado o alguna otra modalidad de titulación</option>
  <option value=16>Motivos de salud</option>
  <option value=8>No deseo contestar</option>
  <option value=9>Otra (especifíque)</option>
  </select> 
  <h2 class="reactivo">  </h2>
102a).- Otra (especifíque):
<INPUT  id="Pregunta 102a" name="nfr29a" TYPE=TEXT  class="texto"  SIZE=47 MAXLENGTH=47 > 

  <h2 class="reactivo">  </h2>
103.- ¿Ya realizó el servicio social?
 <select class="select" id="Pregunta 103" name="nfr30"  onchange=bloqueo30(f30)>
  <option selected="selected" value="">
  <option value=1>Sí</option>
  <option value=2>No</option>
</select>

<h2 class="reactivo">  </h2>
104.- ¿En  qué  grado  estaban  relacionadas  con  su carrera las actividades que llevó a cabo durante el 
servicio social?
<select class="select" id="Pregunta 104" name="nfr31" >
     <option selected="selected" value="">
 <option value=1>Muy relacionadas</option>
  <option value=2>Relacionadas</option>
  <option value=3>Medianamente relacionadas</option>
  <option value=4>Poco relacionadas</option>
  <option value=5>Nada relacionadas</option>
</select>

<h2 class="reactivo">  </h2>
105.- ¿Las funciones qué realizó en su servicio social, se traducían en beneficios para la sociedad?
<select class="select" id="Pregunta 105" name="nfr32" >
<option selected="selected" value="">
 <option value=1>Sí</option>
  <option value=2>No</option>
 </select></TD>

 <h2 class="reactivo">  </h2>
106.- ¿En qué medida está satisfecho con su formación profesional?
<select class="select" id="Pregunta 106" name="nfr33" >
<option selected="selected" value="">
 <option value=1>Muy satisfecho(a)</option>
 <option value=2>Satisfecho(a)</option>
 <option value=3>Medianamente satisfecho(a)</option>
 <option value=4>Poco satisfecho(a)</option>
 <option value=5>Nada satisfecho(a)</option>
 </select>
      </div>

      <div class='col' id='G'>
       
    <h2 class="reactivo">Tiene computadora en:  </h2>
110).- Su casa
    <select class="select" id="Pregunta 110" name="ngr4" >
    <option selected="selected" value="">
 <option value=1>Sí</option>
 <option value=2>No</option>
  </select>

  <h2 class="reactivo">  </h2>
111).- Su trabajo
  <select class="select" id="Pregunta 111" name="ngr5" >
    <option value="" selected="selected"></option>
    <option value=1>Sí</option>
    <option value=2>No</option>
    <option value=3>Sin trabajo</option>
       </select>
   </select>

   <h2 class="reactivo">  </h2>
112).- ¿Incrementó y/o adquirió habilidades para la computación durante sus estudios de licenciatura?

<select class="select" id="Pregunta 112" name="ngr6"   onchange=bloq6(g6)>
    <option selected="selected" value="">
    <option value=1>No</option>
    <option value=2>Sí, en la UNAM </option>
    <option value=3>Sí, en instituciones externas (distinta) a la UNAM </option>
    <option value=4>Sí, por autoaprendizaje </option>
   </select>

   <h2 class="reactivo">  </h2>
Habilidades para la computación

<h2 class="reactivo">  </h2>
¿Cuánto las incrementó y/o adquirió 
<br>durante sus estudios de licenciatura?
<h2 class="reactivo">  </h2>
¿Han  sido  necesarias  para  
su desempeño laboral?
  <h2 class="reactivo">  </h2>
&nbsp;a).- Procesadores de texto
113a).-     <select class="select" id="Pregunta 113a" name="ngr6a" >
       <option value="" selected="selected"></option>
        <option value=1>Muy alto</option>
        <option value=2>Alto</option>
        <option value=3>Medio</option>
        <option value=4>Bajo</option>
        <option value=5>Nulo</option>
             </select>

             <h2 class="reactivo">  </h2>
114a).-
  <select class="select" id="Pregunta 114a" name="ngr7a" >
    <option value="" selected="selected"></option>
    <option value=11>Sí</option>
    <option value=12>No</option>
       </select>


       b).- Diseño

113b).-     
      <select class="select" id="Pregunta 113b" name="ngr6b" >
       <option value="" selected="selected"></option>
        <option value=1>Muy alto</option>
        <option value=2>Alto</option>
        <option value=3>Medio</option>
        <option value=4>Bajo</option>
        <option value=5>Nulo</option>
             </select>


   114b).-
  <select class="select" id="Pregunta 114b" name="ngr7b" >
    <option value="" selected="selected"></option>
    <option value=11>Sí</option>
    <option value=12>No</option>
       </select>

       <h2 class="reactivo">  </h2>
       c).- Programación
 
113c).-    
      <select class="select" id="Pregunta 113c" name="ngr6c" >
       <option value="" selected="selected"></option>
        <option value=1>Muy alto</option>
        <option value=2>Alto</option>
        <option value=3>Medio</option>
        <option value=4>Bajo</option>
        <option value=5>Nulo</option>
             </select>
             <h2 class="reactivo">  </h2>


  
114c).-
<select class="select" id="Pregunta 114c" name="ngr7c" >
    <option value="" selected="selected"></option>
    <option value=11>Sí</option>
    <option value=12>No</option>
  </select>


  d).- Software especializado
      <select class="select" id="Pregunta 113d" name="ngr6d" >
       <option value="" selected="selected"></option>
        <option value=1>Muy alto</option>
        <option value=2>Alto</option>
        <option value=3>Medio</option>
        <option value=4>Bajo</option>
        <option value=5>Nulo</option>
             </select>

             <h2 class="reactivo">  </h2>
114d).-
<select class="select" id="Pregunta 114d" name="ngr7d" >
    <option value="" selected="selected"></option>
    <option value=11>Sí</option>
    <option value=12>No</option>
  </select>


  <h2 class="reactivo">  </h2>
  e).- Internet y/o correo electrónico
113e).-
      <select class="select" id="Pregunta 113e" name="ngr6e" >
       <option value="" selected="selected"></option>
        <option value=1>Muy alto</option>
        <option value=2>Alto</option>
        <option value=3>Medio</option>
        <option value=4>Bajo</option>
        <option value=5>Nulo</option>
             </select>
</TD>

114e).-
<select class="select" id="Pregunta 114e" name="ngr7e" >
    <option value="" selected="selected"></option>
    <option value=11>Sí</option>
    <option value=12>No</option>
  </select>

  <h2 class="reactivo">  </h2>
f).- Base de datos<BR>
113f).- 
      <select class="select" id="Pregunta 113f" name="ngr6f" >
       <option value="" selected="selected"></option>
        <option value=1>Muy alto</option>
        <option value=2>Alto</option>
        <option value=3>Medio</option>
        <option value=4>Bajo</option>
        <option value=5>Nulo</option>
             </select>


114f).-
<select class="select" id="Pregunta 114f" name="ngr7f" >
    <option value="" selected="selected"></option>
    <option value=11>Sí</option>
    <option value=12>No</option>
  </select>


  <h2 class="reactivo">  </h2>
g).-Hoja de cálculo

113g).-
   <select class="select" id="Pregunta 113g" name="ngr6g" >
       <option value="" selected="selected"></option>
        <option value=1>Muy alto</option>
        <option value=2>Alto</option>
        <option value=3>Medio</option>
        <option value=4>Bajo</option>
        <option value=5>Nulo</option>
             </select>

114g).-
<select class="select" id="Pregunta 114g" name="ngr7g" >
    <option value="" selected="selected"></option>
    <option value=11>Sí</option>
    <option value=12>No</option>
  </select>
  <h1 class="seccion">HABILIDADES</h1>

<h2 class="reactivo">  </h2>   
A continuación le pedimos que nos indique para cada una de las siguientes habilidades, si las desarrolló o fortaleció durante su formación profesional en la UNAM y que tan necesarias son para su trabajo..


<h2 class="reactivo">  </h2>
Cuánto las desarrolló durante su formación profesional?
<h2 class="reactivo">  </h2>
Muchísimo<-------------------> Nada 

<h2 class="reactivo">  </h2>
¿Qué tan necesario es para 
su desempeño laboral?

Mucho  -------------------- Nada 

<h2 class="reactivo">  </h2>
120).- Expresar verbalmente  opiniones o ideas en forma clara y precisa
<select class="select" id="Pregunta 120a"  name="ngr14">
<option value="" selected="selected"></option>
  <option value=1>Muchísimo</option>
  <option value=2>Mucho</option>
  <option value=3>Regular</option>
  <option value=4>Poco</option>
  <option value=5>Nada</option>
 </select>



b).-
<select class="select" id="Pregunta 120b"  name="ngr15">
<option value="" selected="selected"></option>
  <option value=1>Muchísimo</option>
  <option value=2>Mucho</option>
  <option value=3>Regular</option>
  <option value=4>Poco</option>
  <option value=5>Nada</option>
 </select>


<h2 class="reactivo">  </h2>
<BR>121).- Expresar por escrito  opiniones o ideas en forma clara y precisa </TD>

a).-<select class="select" id="Pregunta 121a"  name="ngr16">
<option value="" selected="selected"></option>
  <option value=1>Muchísimo</option>
  <option value=2>Mucho</option>
  <option value=3>Regular</option>
  <option value=4>Poco</option>
  <option value=5>Nada</option>
 </select>


b).-<select class="select" id="Pregunta 121b"  name="ngr17">
<option value="" selected="selected"></option>
  <option value=1>Muchísimo</option>
  <option value=2>Mucho</option>
  <option value=3>Regular</option>
  <option value=4>Poco</option>
  <option value=5>Nada</option>
 </select>

 <h2 class="reactivo">  </h2>
122).-Analizar ideas críticamente</TD>
a).- 
<select class="select" id="Pregunta 122a"  name="ngr18">
<option value="" selected="selected"></option>
  <option value=1>Muchísimo</option>
  <option value=2>Mucho</option>
  <option value=3>Regular</option>
  <option value=4>Poco</option>
  <option value=5>Nada</option>
 </select>


b).- <select class="select" id="Pregunta 122b"  name="ngr19">
<option value="" selected="selected"></option>
  <option value=1>Muchísimo</option>
  <option value=2>Mucho</option>
  <option value=3>Regular</option>
  <option value=4>Poco</option>
  <option value=5>Nada</option>
 </select>

 <h2 class="reactivo">  </h2>
 123).- Aprender en forma independiente</TD>
a).- <select class="select" id="Pregunta 123a"  name="ngr20">
<option value="" selected="selected"></option>
  <option value=1>Muchísimo</option>
  <option value=2>Mucho</option>
  <option value=3>Regular</option>
  <option value=4>Poco</option>
  <option value=5>Nada</option>
 </select>

b).- <select class="select" id="Pregunta 123b"  name="ngr21">
<option value="" selected="selected"></option>
  <option value=1>Muchísimo</option>
  <option value=2>Mucho</option>
  <option value=3>Regular</option>
  <option value=4>Poco</option>
  <option value=5>Nada</option>
 </select>

 <h2 class="reactivo">  </h2>
 124).-Actuar en el ámbito laboral conforme a la ética profesional</TD>
a).-<select class="select" id="Pregunta 124a"  name="ngr22">
<option value="" selected="selected"></option>
  <option value=1>Muchísimo</option>
  <option value=2>Mucho</option>
  <option value=3>Regular</option>
  <option value=4>Poco</option>
  <option value=5>Nada</option>
 </select>

b).-<select class="select" id="Pregunta 124a"  name="ngr23">
<option value="" selected="selected"></option>
  <option value=1>Muchísimo</option>
  <option value=2>Mucho</option>
  <option value=3>Regular</option>
  <option value=4>Poco</option>
  <option value=5>Nada</option>
 </select>

<h2 class="reactivo">  </h2>
25).-Resolver problemasa).-
<select class="select" id="Pregunta 125a"  name="ngr24">
<option value="" selected="selected"></option>
  <option value=1>Muchísimo</option>
  <option value=2>Mucho</option>
  <option value=3>Regular</option>
  <option value=4>Poco</option>
  <option value=5>Nada</option>
 </select>


b).-
<select class="select" id="Pregunta 125b"  name="ngr25">
<option value="" selected="selected"></option>
  <option value=1>Muchísimo</option>
  <option value=2>Mucho</option>
  <option value=3>Regular</option>
  <option value=4>Poco</option>
  <option value=5>Nada</option>
 </select>

 <h2 class="reactivo">  </h2>
 26).-Desarrollo una  actitud de liderazgo
a).- <select class="select" id="Pregunta 126a"  name="ngr26">
<option value="" selected="selected"></option>
  <option value=1>Muchísimo</option>
  <option value=2>Mucho</option>
  <option value=3>Regular</option>
  <option value=4>Poco</option>
  <option value=5>Nada</option>
 </select>



b).-<select class="select" id="Pregunta 126b"  name="ngr27">
<option value="" selected="selected"></option>
  <option value=1>Muchísimo</option>
  <option value=2>Mucho</option>
  <option value=3>Regular</option>
  <option value=4>Poco</option>
  <option value=5>Nada</option>
 </select>
 <h2 class="reactivo">  </h2>


 <h2 class="reactivo">  </h2>
127).-Usar modelos y/o métodos matemáticos para analizar datos

a).-  <select class="select" id="Pregunta 127a"  name="ngr28">
<option value="" selected="selected"></option>
  <option value=1>Muchísimo</option>
  <option value=2>Mucho</option>
  <option value=3>Regular</option>
  <option value=4>Poco</option>
  <option value=5>Nada</option>
 </select>

b).-<select class="select" id="Pregunta 127b"  name="ngr29">
<option value="" selected="selected"></option>
  <option value=1>Muchísimo</option>
  <option value=2>Mucho</option>
  <option value=3>Regular</option>
  <option value=4>Poco</option>
  <option value=5>Nada</option>
 </select>

 <h2 class="reactivo">  </h2>
 <BR>128).-Formular argumentos lógicos<BR>
<center> a).-<select class="select" id="Pregunta 128a"  name="ngr30">
<option value="" selected="selected"></option>
  <option value=1>Muchísimo</option>
  <option value=2>Mucho</option>
  <option value=3>Regular</option>
  <option value=4>Poco</option>
  <option value=5>Nada</option>
 </select>


b).- <select class="select" id="Pregunta 129b"  name="ngr31">
<option value="" selected="selected"></option>
  <option value=1>Muchísimo</option>
  <option value=2>Mucho</option>
  <option value=3>Regular</option>
  <option value=4>Poco</option>
  <option value=5>Nada</option>
 </select>

 <h2 class="reactivo">  </h2>
<BR> 130).-Trabajar en colaboración con otras personas</TD>
a).-<select class="select" id="Pregunta 130a"  name="ngr32">
<option value="" selected="selected"></option>
  <option value=1>Muchísimo</option>
  <option value=2>Mucho</option>
  <option value=3>Regular</option>
  <option value=4>Poco</option>
  <option value=5>Nada</option>
 </select>


b).-<select class="select" id="Pregunta 130b"  name="ngr33">
<option value="" selected="selected"></option>
  <option value=1>Muchísimo</option>
  <option value=2>Mucho</option>
  <option value=3>Regular</option>
  <option value=4>Poco</option>
  <option value=5>Nada</option>
 </select>

 <h2 class="reactivo">  </h2>
 <BR>131).-Formular ideas o pensamientos originales o innovadores</TD>
a).-<select class="select" id="Pregunta 131a"  name="ngr34">
<option value="" selected="selected"></option>
  <option value=1>Muchísimo</option>
  <option value=2>Mucho</option>
  <option value=3>Regular</option>
  <option value=4>Poco</option>
  <option value=5>Nada</option>
 </select>

b).- <select class="select" id="Pregunta 131b"  name="ngr35">
<option value="" selected="selected"></option>
  <option value=1>Muchísimo</option>
  <option value=2>Mucho</option>
  <option value=3>Regular</option>
  <option value=4>Poco</option>
  <option value=5>Nada</option>
 </select>



<<h2 class="reactivo">  </h2>
<B><CENTER>Durante sus formación como universitario adquirió o desarrolló:</CENTER></B></FONT></TD>

<h2 class="reactivo">  </h2>
132.- Una cultura general amplia</TD>
<select class="select" id="Pregunta 132" name="ngr36" >
<option selected="selected" value="">
<option value=1>Totalmente de acuerdo</option>
<option value=2>De acuerdo</option>
<option value=3>Medianamente de acuerdo</option>
<option value=4>En desacuerdo</option>
<option value=5>Totalmente en desacuerdo</option>
</select></TD>

<h2 class="reactivo">  </h2>
133.- La capacidad para apreciar diferentes expresiones artísticas (cine, teatro, etc.)
<select class="select" id="Pregunta 133" name="ngr37"  onchange=bloqueo37(g37)>
<option selected="selected" value="">
<option value=11>Sí</option>
<option value=12>No</option>
</select>


<h2 class="reactivo">  </h2>
a).-¿Con qué frecuencia asistió a eventos artísticos?
<select class="select" id="Pregunta 133a" name="ngr37a" >
<option selected="selected" value="">
<option value=11>2 o 3 veces por semana</option>
<option value=12>1 vez a la semana</option>
<option value=13>1 vez al mes</option>
</select>

<h2 class="reactivo">  </h2>
b).-Motivo por el que no asistió a eventos artísticos
<select class="select" id="Pregunta 133b" name="ngr37m"  >
<option selected="selected" value="">
<option value=1>Desinterés</option>
<option value=2>Falta de tiempo</option>
<option value=3>Falta de instalaciones</option>
<option value=4>Falta de difusión</option>
<option value=5>Ya contaba con el</option>
<option value=6>Otra</option>
</select>

<h2 class="reactivo">  </h2>
134.-Una mejor valoración de si mismo
<select class="select" id="Pregunta 134"  name="ngr38" >
<option selected="selected" value="">
<option value=1>Totalmente de acuerdo</option>
<option value=2>De acuerdo</option>
<option value=3>Medianamente de acuerdo</option>
<option value=4>En desacuerdo</option>
<option value=5>Totalmente en desacuerdo</option>
</select>

<h2 class="reactivo">  </h2>
135.- Conocimientos e  interés  por el cuidado de su salud
<select class="select" id="Pregunta 135" name="ngr39" >
<option selected="selected" value="">
<option value=1>Totalmente de acuerdo</option>
<option value=2>De acuerdo</option>
<option value=3>Medianamente de acuerdo</option>
<option value=4>En desacuerdo</option>
<option value=5>Totalmente en desacuerdo</option>
</select>

<h2 class="reactivo">  </h2>
136.- ¿Interés por la práctica  de algún deporte?
<select class="select" id="Pregunta 136" name="ngr40"  onchange=bloqueo40(g40)>
<option selected="selected" value="">
  <option value=11>Sí</option>
<option value=12>No</option>
</select>
<BR>


<h2 class="reactivo">  </h2>
a).-¿Cuál? 
<select class="select" id="Pregunta 136a" name="ngr40aa"  >
<option selected="selected" value="">
<option value=11>Acondicionamiento físico</option>
<option value=12>Ajedrez</option>
<option value=13>Atletismo</option>
<option value=14>Baloncesto</option>
<option value=15>Beisbol</option>
<option value=16>Boliche</option>
<option value=17>Boxeo</option>
<option value=18>Buceo</option>
<option value=19>Canotaje</option>
<option value=20>Esgrima</option>
<option value=21>Fisicoculturismo</option>
<option value=22>Frontón</option>
<option value=23>Futbol Americano</option>
<option value=24>Futbol Soccer</option>
<option value=25>Gimnasia</option>
<option value=26>Handball</option>
<option value=27>Hockey</option>
<option value=28>Judo</option>
<option value=29>Karate</option>
<option value=30>Levantamiento de pesas</option>
<option value=31>Lucha</option>
<option value=32>Montañismo</option>
<option value=33>Natación</option>
<option value=34>Remo</option>
<option value=35>Squash</option>
<option value=36>Taekwondo</option>
<option value=37>Tenis</option>
<option value=38>Tenis de mesa</option>
<option value=39>Triatlón</option>
<option value=40>Voleibol</option>
<option value=41>Ciclismo</option>
<option value=42>Artes marciales</option>
<option value=43>Otros</option>
</select>

<h2 class="reactivo">  </h2>
b).- ¿Con qué frecuencia lo practicó?
<select class="select" id="Pregunta 136b" name="ngr40a" >
<option selected="selected" value="">
<option value=11>Diario</option>
<option value=12>2 o 3 veces por semana</option>
<option value=13>1 vez a la semana</option>
</select>

<h2 class="reactivo">  </h2>
c).- Motivo
<select class="select" id="Pregunta 136b" name="ngr40b"  >
<option selected="selected" value="">
<option value=1>Desinterés</option>
<option value=2>Falta de tiempo</option>
<option value=3>Falta de instalaciones</option>
<option value=4>Falta de promoción</option>
<option value=5>Ya contaba con el</option>
<option value=5>Otro</option>
</select>


 


<div class="pantalla" id="pantalla12" >
<h1 class="seccion">HABILIDADES</h1>

<h2 class="reactivo">  </h2> 
<b>Desde su punto de vista, sus experiencias en la UNAM contribuyeron a:
</b>
<h2 class="reactivo">  </h2>
137.- Desarrollar en usted una actitud de tolerancia y aceptación por las
demás  personas</TD>
<TD><select class="select" id="Pregunta 137" name="ngr41" >
<option selected="selected" value="">
  <option value=1>Totalmente de acuerdo</option>
<option value=2>De acuerdo</option>
<option value=3>Medianamente de acuerdo</option>
<option value=4>En desacuerdo</option>
<option value=5>Totalmente en desacuerdo</option>
</select>

<h2 class="reactivo">  </h2>
138.- Fortalecer sus valores como ciudadano 
<select class="select" id="Pregunta 138" name="ngr42" >
<option selected="selected" value="">
  <option value=1>Totalmente de acuerdo</option>
<option value=2>De acuerdo</option>
<option value=3>Medianamente de acuerdo</option>
<option value=4>En desacuerdo</option>
<option value=5>Totalmente en desacuerdo</option>
</select>

<h2 class="reactivo">  </h2>
139.-Incrementar  su  interés por promover y participar  en  programas de beneficio social </TD>
<TD><select class="select" id="Pregunta 139" name="ngr43" >
<option selected="selected" value="">
  <option value=1>Totalmente de acuerdo</option>
<option value=2>De acuerdo</option>
<option value=3>Medianamente deacuerdo</option>
<option value=4>En desacuerdo</option>
<option value=5>Totalmente en desacuerdo</option>
</select>

<h2 class="reactivo">  </h2>
140.- Incrementar su concientización e interés por los problemas del medio
ambiente 
<select class="select" id="Pregunta 140" name="ngr44" >
<option selected="selected" value="">
  <option value=1>Totalmente de acuerdo</option>
<option value=2>De acuerdo</option>
<option value=3>Medianamente de acuerdo</option>
<option value=4>En desacuerdo</option>
<option value=5>Totalmente en desacuerdo</option>
</select>

<h2 class="reactivo">  </h2>
141.- ¿Actualmente es miembro de alguna organización o asociación? -
<select class="select" id="Pregunta 141"  name="ngr45" onchange=bloqueo45(g45)>
<option selected="selected" value="">
  <option value=1>Sí</option>
<option value=2>No</option>
</select>

<h2 class="reactivo">  </h2>
141a).-¿Cuál?
<select class="select" id="Pregunta 141a" name="ngr45_a" onchange=bloqueo141(g45_a)>
<option selected="selected" value="">
<option value=4>Afiliado a un grupo religioso</option>
<option value=3>Cultural, educativa, recreativa o deportiva</option>
<option value=5>Comunitaria o cívica</option>
<option value=6>Científica o Investigación</option>
<option value=1>Profesional</option>
<option value=2>Política</option>
<option value=7>OTRA</option>
</select>


<h2 class="reactivo">141b).-Otra:  </h2>

<INPUT  id="Pregunta 141b" name="ngr45a" TYPE=TEXT  class="texto"  SIZE=60 MAXLENGTH=60 >

<h2 class="reactivo"> 
142.-¿Conoce usted la Credencial de Egresados y sus beneficios? </h2>
<select class="select" id="Pregunta_142"  name="cono"  >
<option selected="selected" value="">
  <option value=1>Sí</option>
<option value=2>No</option>
</select>

<h2 class="reactivo">  
143.-¿Ya cuenta con su credencial de Exalumnos?</h2>
<select class="select" id="Pregunta_143"  name="ncrue"  onchange=bloqueo143(cue)>
<option selected="selected" value="">
  <option value=1>Sí</option>
<option value=2>No</option>
</select>

<h2 class="reactivo">  144.-¿Ha utilizado los Beneficios que le otorga el Programa de Vinculación con los Egresados de la UNAM?  </h2>
144.-¿Ha utilizado los Beneficios que le otorga el Programa de Vinculación con los Egresados de la UNAM?
<select class="select" id="Pregunta_144"  name="util" >
<option selected="selected" value="">
    <option value=1>Sí</option>
<option value=2>No</option>
</select>


<h2 class="reactivo"> ¿Desea hacer algun comentario? </h2>

<select class="select" id="comen" name="ncro2"  onchange=com(co) >
<option value="" selected></option>
    <option value='1'>Sí</option>
    <option value='2'>No</option> 
</select>
<br>
<h2 class="reactivo"> ¿Comentario? </h2>
<br>
<input type="text" class="texto"   name="txtcom" size="140" value=" " maxlength="140"  >

      </div>
    </div>
    
</div>
</form>
</div>
@stop

@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
<style>
  .Scroll {
  height:600px;
  overflow-y: scroll;
  scroll-behavior: smooth;
}
.texto{
  color:{{Auth::user()->color}};
}
.fecha{
  color:{{Auth::user()->color}};
}
.select{
  color:{{Auth::user()->color}};
}
</style>
<style>
  .fixed {
    position:fixed;
    bottom:0;
    right:0;
  background: {{Auth::user()->color}};
  width: 170px;
  height: 170px;
  display: flex;
  justify-content: center;
  align-items: center;
  box-shadow: 0 0 6px #000;
  color: #fff;
}



</style>

@endpush

@push('js')
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
<script>
  function hide_all(){
    sections=['A','B','C','D','E','F','G'];
   for (let i = 0; i < sections.length; i++) {
    //  console.log(sections[i])   
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

    window.scrollTo(888, 1000); 
    document.body.scrollTop=200;
    console.log('scroleado¿?');
    var el = document.querySelector('#cuerpo');

// get scroll position in px
console.log(el.scrollLeft, el.scrollTop);

// set scroll position in px
el.scrollLeft = 500;
el.scrollTop = 1000;
var scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
    scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    document.documentElement.scrollTop = document.body.scrollTop = 1000;
document.documentElement.scrollLeft = document.body.scrollLeft = 500;
  }
  unhide('A');

 </script>

 <script>
function bloquear(reactivo,options,reactivosPorCerrar){


var val=document.getElementById(reactivo);
console.log (val.value);
console.log(options);
console.log(options.includes(parseInt(val.value)));
if(options.includes(parseInt(val.value))){
 
  reactivosPorCerrar.forEach(ocultar);
}else{
  reactivosPorCerrar.forEach(visibilizar);
}
// for (i = 0; i < options.length; i++) {
//     console.log(options[i]);
//     if(val.value==options[i]){
//         console.log("opcion") 
//         reactivosPorCerrar.forEach(ocultar);
//         }
//   } 

}


function ocultar(item){
document.getElementById(item.id).hidden="hidden";
document.getElementById(item.id).value=0;

}

function visibilizar(item){
document.getElementById(item.id).hidden="";
}
 </script>
@endpush