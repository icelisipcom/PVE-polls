@extends('layouts.blank_app')

@section('content')
<h1 > COMPLETAR ENCUESTA </h1>
<div  id='datos'>  @include('encuesta.personal_data') </div>
<div style="padding:1.2vw;">
<form action="{{ url('encuestas/2020/G_update/'. $Encuesta->registro) }}" method="POST" enctype="multipart/form-data" id='forma_sagrada' name='forma'>
@csrf
<table class="encuesta_table">
        <!-- primera fila  -->
<tr>
  <td colspan="4">
<h1 class="seccion">DURANTE SUS ESTUDIOS EN LICENCIATURA UNAM</h1>

</td>
</tr> 
<tr>
<td>
<h2 class="reactivo"> 
115.-¿Adquirió o mejoró el dominio del idioma inglés? </h2>
<select class="select" id="ngr8"  name="ngr8"  onchange="bloquear('ngr8',[1],[ngr9a,ngr9b,ngr9c,ngr9d])">
<option value="" selected="selected"></option>
<option value=1 @if($Encuesta->ngr8==1) selected @endif>No</option>
<option value=2 @if($Encuesta->ngr8==2) selected @endif>Sí, en la UNAM </option>
<option value=3 @if($Encuesta->ngr8==3) selected @endif>Sí, en instituciones externas (distinta) a la UNAM </option>
<option value=4 @if($Encuesta->ngr8==4) selected @endif>Sí, por autoaprendizaje </option>
</select>

 </td>
<td colspan="3">
<h2 class="reactivo"> 
116.- ¿Cuál es el nivel de dominio del idioma Inglés que tiene sobre las siguientes habilidades?  
</td>
</tr><tr>
<td>

<h2 class="reactivo"> 
a).- Comprensión auditiva<br> </h2> 
<select class="select" id="ngr9a"  name="ngr9a" >
<option value="" selected="selected"></option>
<option value=11 @if($Encuesta->ngr9a==11) selected @endif>Básico</option>
<option value=12 @if($Encuesta->ngr9a==12) selected @endif>Intermedio </option>
<option value=13 @if($Encuesta->ngr9a==13) selected @endif>Avanzado</option>
<option value=0 hidden > </option>
</select>
 </td>

<td>
<h2 class="reactivo">b).-
Comprensión de lectura<br></h2>
<select class="select" id="ngr9b"  name="ngr9b" >
<option value="" selected="selected"></option>
<option value=11 @if($Encuesta->ngr9b==11) selected @endif>Básico</option>
<option value=12 @if($Encuesta->ngr9b==12) selected @endif>Intermedio </option>
<option value=13 @if($Encuesta->ngr9b==13) selected @endif>Avanzado</option>
<option value=0 hidden > </option>
</select>
 </td>
<td>
<h2 class="reactivo">    c).-
Expresión oral<br></h2> 
<select class="select" id="ngr9c"  name="ngr9c" >
<option value="" selected="selected"></option>
<option value=11 @if($Encuesta->ngr9c==11) selected @endif>Básico</option>
<option value=12 @if($Encuesta->ngr9c==12) selected @endif>Intermedio </option>
<option value=13 @if($Encuesta->ngr9c==13) selected @endif>Avanzado</option>
<option value=0 hidden > </option>
</select>
</td>
<td>
<h2 class="reactivo">d).-
Expresión escrita<br></h2>
<select class="select" id="ngr9d"  name="ngr9d" >
<option value="" selected="selected"></option>
<option value=11 @if($Encuesta->ngr9d==11) selected @endif>Básico</option>
<option value=12 @if($Encuesta->ngr9d==12) selected @endif>Intermedio </option>
<option value=13 @if($Encuesta->ngr9d==13) selected @endif>Avanzado</option>
<option value=0 hidden > </option>
</select>
</td>
</tr>

<tr >
<td colspan="4">
<h2 class="reactivo">
  <br><br>
117.- Para el desempeño de su o sus trabajo ¿Qué nivel de dominio del idioma inglés requiere de las siguientes habilidades?
<br></h2>
    </td>
</tr>
<tr>
<td>
<h2 class="reactivo">
Comprensión auditiva<br></h2>
     <select class="select" id="ngr13"  name="ngr13" >
	<option value="" selected="selected"></option>
        <option value=11 @if($Encuesta->ngr13==11) selected @endif>Básico</option>
        <option value=12 @if($Encuesta->ngr13==12) selected @endif>Intermedio </option>
        <option value=13 @if($Encuesta->ngr13==13) selected @endif>Avanzado</option>
        <option value=14 @if($Encuesta->ngr13==14) selected @endif>No es necesario</option>
        <option value=0 hidden > </option>
      </select>

         </td>
<td>
<h2 class="reactivo">
Comprensión de lectura<br>  </h2>
     <select class="select" id="ngr13b"  name="ngr13b" >
	<option value="" selected="selected"></option>
        <option value=11 @if($Encuesta->ngr13b==11) selected @endif>Básico</option>
        <option value=12 @if($Encuesta->ngr13b==12) selected @endif>Intermedio </option>
        <option value=13 @if($Encuesta->ngr13b==13) selected @endif>Avanzado</option>
        <option value=14 @if($Encuesta->ngr13b==14) selected @endif>No es necesario</option>
        <option value=0 hidden > </option>
      </select>
         </td>
<td>
<h2 class="reactivo">
   Expresión oral<br></h2>
     <select class="select" id="ngr13c"  name="ngr13c" >
	<option value="" selected="selected"></option>
        <option value=11 @if($Encuesta->ngr13c==11) selected @endif>Básico</option>
        <option value=12 @if($Encuesta->ngr13c==12) selected @endif>Intermedio </option>
        <option value=13 @if($Encuesta->ngr13c==13) selected @endif>Avanzado</option>
        <option value=14 @if($Encuesta->ngr13c==14) selected @endif>No es necesario</option>
        <option value=0 hidden > </option>
      </select>
     </td>
<td>
<h2 class="reactivo">
        Expresión escrita<br></h2>
     <select class="select" id="ngr13d"  name="ngr13d" >
	<option value="" selected="selected"></option>
        <option value=11 @if($Encuesta->ngr13d==11) selected @endif>Básico</option>
        <option value=12 @if($Encuesta->ngr13d==12) selected @endif>Intermedio </option>
        <option value=13 @if($Encuesta->ngr13d==13) selected @endif>Avanzado</option>
        <option value=14 @if($Encuesta->ngr13d==14) selected @endif>No es necesario</option>
        <option value=0 hidden > </option>
      </select>
      </td>
</tr>

<tr>
<td>
<h2 class="reactivo">
118.- ¿Adquirió o mejoró el dominio de otro idioma, diferente al inglés? </h2>
<select class="select" id="ngr11a"  name="ngr11a"  onchange="bloquear('ngr11a',[11],[ngr11f,ngr11,ngr11b,ngr11c,ngr11d])">
    <option value="" selected="selected"></option>
      <option value=11 @if($Encuesta->ngr11a==11) selected @endif>No</option>
      <option value=12 @if($Encuesta->ngr11a==12) selected @endif>Sí, en la UNAM </option>
      <option value=13 @if($Encuesta->ngr11a==13) selected @endif>Sí, en instituciones externas (distinta) a la UNAM </option>
      <option value=14 @if($Encuesta->ngr11a==14) selected @endif>Sí, por autoaprendizaje </option>
      <option value=0 hidden > </option>
      </select>
    
    </td>
<td>
<h2 class="reactivo">
118a).-¿Cuál?</h2>
<select class="select" id="ngr11f"  name="ngr11f"  >
    <option value="" selected="selected"></option>
      <option value=1 @if($Encuesta->ngr11f==1) selected @endif>Francés</option>
      <option value=2 @if($Encuesta->ngr11f==2) selected @endif>Alemán</option>
      <option value=3 @if($Encuesta->ngr11f==3) selected @endif>Italiano</option>
      <option value=4 @if($Encuesta->ngr11f==4) selected @endif>Portugués</option>
      <option value=7 @if($Encuesta->ngr11f==7) selected @endif>Otro</option>
      <option value=0 hidden > </option>
      </select>

         </td>
<td></td><td></td>
</tr>
<tr>
  <td colspan="4"> <h2 class="reactivo">
119.-¿ Qué grado de dominio tiene de otro idioma diferente al inglés? </h2>
 </td>
</tr>
<tr>
<td>
<h2 class="reactivo"> 
       a).- Comprensión auditiva<br> </h2>
	<select class="select" id="ngr11"  name="ngr11" >
	<option value="" selected="selected"></option>
        <option value=11 @if($Encuesta->ngr11==11) selected @endif>Básico</option>
        <option value=12 @if($Encuesta->ngr11==12) selected @endif>Intermedio </option>
        <option value=13 @if($Encuesta->ngr11==13) selected @endif>Avanzado</option>
        <option value=0 hidden > </option>
      </select>
           </td>
<td>
<h2 class="reactivo">
        b).-Comprensión de lectura<br></h2>
	<select class="select" id="ngr11b"  name="ngr11b" >
	<option value="" selected="selected"></option>
        <option value=11 @if($Encuesta->ngr11b==11) selected @endif>Básico</option>
        <option value=12 @if($Encuesta->ngr11b==12) selected @endif>Intermedio </option>
        <option value=13 @if($Encuesta->ngr11b==13) selected @endif>Avanzado</option>
        <option value=0 hidden > </option>
      </select>
           </td>
<td>
<h2 class="reactivo">
       c).- Expresión oral<br></h2>
	<select class="select" id="ngr11c"  name="ngr11c" >
	<option value="" selected="selected"></option>
        <option value=11 @if($Encuesta->ngr11c==11) selected @endif>Básico</option>
        <option value=12 @if($Encuesta->ngr11c==12) selected @endif>Intermedio </option>
        <option value=13 @if($Encuesta->ngr11c==13) selected @endif>Avanzado</option>
        <option value=0 hidden > </option>
      </select>
           </td>
<td>
<h2 class="reactivo">
        d).- Expresión escrita&nbsp;<br></h2>
	<select class="select" id="ngr11d"  name="ngr11d" >
	<option value="" selected="selected"></option>
        <option value=11 @if($Encuesta->ngr11d==11) selected @endif>Básico</option>
        <option value=12 @if($Encuesta->ngr11d==12) selected @endif>Intermedio </option>
        <option value=13 @if($Encuesta->ngr11d==13) selected @endif>Avanzado</option>
        <option value=0 hidden > </option>
      </select>
    </td>
</tr>
<tr>
<td colspan="4">
<h1 class="seccion">HABILIDADES</h1> <br>
<h2 class="reactivo">
A continuación le pedimos que nos indique para cada una de las
 siguientes habilidades, si las desarrolló o fortaleció durante su 
 formación profesional en la UNAM y que tan necesarias son para su 
 trabajo..
</h2>
</td>
</tr>

<tr>
  <td colspan="4">

  <table id="htable">
<th  style=" background-color:{{Auth::user()->color}}"> <h2 class="reactivo" style="color:white"> Habilidad </h2></th>
<th style=" background-color:{{Auth::user()->color}}">
<h2 class="reactivo" style="color:white"> 
Cuánto las desarrolló durante su formación profesional? </h2>
</th>
<th  style=" background-color:{{Auth::user()->color}}">
<h2 class="reactivo" style="color:white" >
¿Qué tan necesario es para 
su desempeño laboral?</h2> 

    </th>
</tr>

    
<tr><td>
<h2 class="reactivo">
120).- Expresar verbalmente  opiniones o ideas en forma clara y precisa</h2>
</td><td>a).-
<select class="select" id="ngr14"  name="ngr14">
<option value="" selected="selected"></option>
  <option value=1 @if($Encuesta->ngr14==1) selected @endif>Muchísimo</option>
  <option value=2 @if($Encuesta->ngr14==2) selected @endif>Mucho</option>
  <option value=3 @if($Encuesta->ngr14==3) selected @endif>Regular</option>
  <option value=4 @if($Encuesta->ngr14==4) selected @endif>Poco</option>
  <option value=5 @if($Encuesta->ngr14==5) selected @endif>Nada</option>
 </select>
 </td><td>


b).-
<select class="select" id="ngr15"  name="ngr15">
<option value="" selected="selected"></option>
  <option value=1 @if($Encuesta->ngr15==1) selected @endif>Muchísimo</option>
  <option value=2 @if($Encuesta->ngr15==2) selected @endif>Mucho</option>
  <option value=3 @if($Encuesta->ngr15==3) selected @endif>Regular</option>
  <option value=4 @if($Encuesta->ngr15==4) selected @endif>Poco</option>
  <option value=5 @if($Encuesta->ngr15==5) selected @endif>Nada</option>
 </select>


    </td>
    </tr><tr>
<td>
<h2 class="reactivo">
<BR>121).- Expresar por escrito  opiniones o ideas en forma clara y precisa</h2>
</td><td>
a).-<select class="select" id="ngr16"  name="ngr16">
<option value="" selected="selected"></option>
  <option value=1 @if($Encuesta->ngr16==1) selected @endif>Muchísimo</option>
  <option value=2 @if($Encuesta->ngr16==2) selected @endif>Mucho</option>
  <option value=3 @if($Encuesta->ngr16==3) selected @endif>Regular</option>
  <option value=4 @if($Encuesta->ngr16==4) selected @endif>Poco</option>
  <option value=5 @if($Encuesta->ngr16==5) selected @endif >Nada</option>
 </select>
 </td><td>

b).-<select class="select" id="ngr17"  name="ngr17">
<option value="" selected="selected"></option>
  <option value=1 @if($Encuesta->ngr17==1) selected @endif >Muchísimo</option>
  <option value=2 @if($Encuesta->ngr17==2) selected @endif >Mucho</option>
  <option value=3 @if($Encuesta->ngr17==3) selected @endif >Regular</option>
  <option value=4 @if($Encuesta->ngr17==4) selected @endif >Poco</option>
  <option value=5 @if($Encuesta->ngr17==5) selected @endif >Nada</option>
 </select>

     </td>
     </tr><tr>
<td>
<h2 class="reactivo">
122).-Analizar ideas críticamente</h2> 
</td><td>
a).- 
<select class="select" id="ngr18"  name="ngr18">
<option value="" selected="selected"></option>
  <option value=1 @if($Encuesta->ngr18==1) selected @endif >Muchísimo</option>
  <option value=2 @if($Encuesta->ngr18==2) selected @endif >Mucho</option>
  <option value=3 @if($Encuesta->ngr18==3) selected @endif >Regular</option>
  <option value=4 @if($Encuesta->ngr18==4) selected @endif >Poco</option>
  <option value=5 @if($Encuesta->ngr18==5) selected @endif >Nada</option>
 </select>

 </td><td>
b).- <select class="select" id="ngr19"  name="ngr19">
<option value="" selected="selected"></option>
  <option value=1 @if($Encuesta->ngr19==1) selected @endif >Muchísimo</option>
  <option value=2 @if($Encuesta->ngr19==2) selected @endif >Mucho</option>
  <option value=3 @if($Encuesta->ngr19==3) selected @endif >Regular</option>
  <option value=4 @if($Encuesta->ngr19==4) selected @endif >Poco</option>
  <option value=5 @if($Encuesta->ngr19==5) selected @endif >Nada</option>
 </select>

     </td>
     </tr><tr>
<td>
<h2 class="reactivo"> 
 123).- Aprender en forma independiente </h2>
 </td><td>
a).- <select class="select" id="ngr20"  name="ngr20">
<option value="" selected="selected"></option>
  <option value=1 @if($Encuesta->ngr20==1) selected @endif >Muchísimo</option>
  <option value=2 @if($Encuesta->ngr20==2) selected @endif >Mucho</option>
  <option value=3 @if($Encuesta->ngr20==3) selected @endif >Regular</option>
  <option value=4 @if($Encuesta->ngr20==4) selected @endif >Poco</option>
  <option value=5 @if($Encuesta->ngr20==5) selected @endif >Nada</option>
 </select>
 </td><td>
b).- <select class="select" id="ngr21"  name="ngr21">
<option value="" selected="selected"></option>
  <option value=1 @if($Encuesta->ngr21==1) selected @endif >Muchísimo</option>
  <option value=2 @if($Encuesta->ngr21==2) selected @endif >Mucho</option>
  <option value=3 @if($Encuesta->ngr21==3) selected @endif >Regular</option>
  <option value=4 @if($Encuesta->ngr21==4) selected @endif >Poco</option>
  <option value=5 @if($Encuesta->ngr21==5) selected @endif >Nada</option>
 </select>

     </td>
     </tr><tr>
<td>
<h2 class="reactivo">
 124).-Actuar en el ámbito laboral conforme a la ética profesional</h2>
 </td><td>
a).-<select class="select" id="ngr22"  name="ngr22">
<option value="" selected="selected"></option>
  <option value=1 @if($Encuesta->ngr22==1) selected @endif >Muchísimo</option>
  <option value=2 @if($Encuesta->ngr22==2) selected @endif >Mucho</option>
  <option value=3 @if($Encuesta->ngr22==3) selected @endif >Regular</option>
  <option value=4 @if($Encuesta->ngr22==4) selected @endif >Poco</option>
  <option value=5 @if($Encuesta->ngr22==5) selected @endif >Nada</option>
 </select>
 </td><td>
b).-<select class="select" id="ngr23"  name="ngr23">
<option value="" selected="selected"></option>
  <option value=1 @if($Encuesta->ngr22==1) selected @endif >Muchísimo</option>
  <option value=2 @if($Encuesta->ngr23==2) selected @endif >Mucho</option>
  <option value=3 @if($Encuesta->ngr23==3) selected @endif >Regular</option>
  <option value=4 @if($Encuesta->ngr23==4) selected @endif >Poco</option>
  <option value=5 @if($Encuesta->ngr23==5) selected @endif >Nada</option>
 </select>

    </td>
    </tr><tr>
<td>
<h2 class="reactivo"> 
125).-Resolver problemasa).- </h2>
</td><td>
  a).-
<select class="select" id="ngr24"  name="ngr24">
<option value="" selected="selected"></option>
  <option value=1 @if($Encuesta->ngr24==1) selected @endif >Muchísimo</option>
  <option value=2 @if($Encuesta->ngr24==2) selected @endif >Mucho</option>
  <option value=3 @if($Encuesta->ngr24==3) selected @endif >Regular</option>
  <option value=4 @if($Encuesta->ngr24==4) selected @endif >Poco</option>
  <option value=5 @if($Encuesta->ngr24==5) selected @endif >Nada</option>
 </select>

 </td><td>
b).-
<select class="select" id="ngr25"  name="ngr25">
<option value="" selected="selected"></option>
  <option value=1 @if($Encuesta->ngr25==1) selected @endif >Muchísimo</option>
  <option value=2 @if($Encuesta->ngr25==2) selected @endif >Mucho</option>
  <option value=3 @if($Encuesta->ngr25==3) selected @endif >Regular</option>
  <option value=4 @if($Encuesta->ngr25==4) selected @endif >Poco</option>
  <option value=5 @if($Encuesta->ngr25==5) selected @endif >Nada</option>
 </select>

     </td>
     </tr><tr>
<td>
<h2 class="reactivo">
 126).-Desarrollo una  actitud de liderazgo</h2>
 </td><td>
a).- <select class="select" id="ngr26"  name="ngr26">
<option value="" selected="selected"></option>
  <option value=1 @if($Encuesta->ngr22==1) selected @endif >Muchísimo</option>
  <option value=2 @if($Encuesta->ngr22==2) selected @endif >Mucho</option>
  <option value=3 @if($Encuesta->ngr22==3) selected @endif >Regular</option>
  <option value=4 @if($Encuesta->ngr22==4) selected @endif >Poco</option>
  <option value=5 @if($Encuesta->ngr22==5) selected @endif >Nada</option>
 </select>

 </td><td>

b).-<select class="select" id="ngr27"  name="ngr27">
<option value="" selected="selected"></option>
  <option value=1 @if($Encuesta->ngr27==1) selected @endif >Muchísimo</option>
  <option value=2 @if($Encuesta->ngr27==2) selected @endif >Mucho</option>
  <option value=3 @if($Encuesta->ngr27==3) selected @endif >Regular</option>
  <option value=4 @if($Encuesta->ngr27==4) selected @endif >Poco</option>
  <option value=5 @if($Encuesta->ngr27==5) selected @endif >Nada</option>
 </select>
      </td>
     </tr><tr>
<td>
<h2 class="reactivo"> 
127).-Usar modelos y/o métodos matemáticos para analizar datos </h2>
</td><td>
a).-  <select class="select" id="ngr28"  name="ngr28">
<option value="" selected="selected"></option>
  <option value=1 @if($Encuesta->ngr28==1) selected @endif >Muchísimo</option>
  <option value=2 @if($Encuesta->ngr28==2) selected @endif >Mucho</option>
  <option value=3 @if($Encuesta->ngr28==3) selected @endif >Regular</option>
  <option value=4 @if($Encuesta->ngr28==4) selected @endif >Poco</option>
  <option value=5 @if($Encuesta->ngr28==5) selected @endif >Nada</option>
 </select>
 </td><td>
b).-<select class="select" id="ngr29"  name="ngr29">
<option value="" selected="selected"></option>
  <option value=1 @if($Encuesta->ngr29==1) selected @endif >Muchísimo</option>
  <option value=2 @if($Encuesta->ngr29==2) selected @endif >Mucho</option>
  <option value=3 @if($Encuesta->ngr29==3) selected @endif >Regular</option>
  <option value=4 @if($Encuesta->ngr29==4) selected @endif >Poco</option>
  <option value=5 @if($Encuesta->ngr29==5) selected @endif >Nada</option>
 </select>

     </td>
     </tr><tr>
<td>
<h2 class="reactivo"> 
 <BR>128).-Formular argumentos lógicos<BR></h2>
 </td><td>
a).-<select class="select" id="ngr30"  name="ngr30">
  <option value="" selected></option>
  <option value=1 @if($Encuesta->ngr30==1) selected @endif >Muchísimo</option>
  <option value=2 @if($Encuesta->ngr30==2) selected @endif >Mucho</option>
  <option value=3 @if($Encuesta->ngr30==3) selected @endif >Regular</option>
  <option value=4 @if($Encuesta->ngr30==4) selected @endif >Poco</option>
  <option value=5 @if($Encuesta->ngr30==5) selected @endif >Nada</option>
 </select>
 </td><td>

b).- <select class="select" id="ngr31"  name="ngr31">
<option value="" selected="selected"></option>
  <option value=1 @if($Encuesta->ngr31==1) selected @endif >Muchísimo</option>
  <option value=2 @if($Encuesta->ngr31==2) selected @endif >Mucho</option>
  <option value=3 @if($Encuesta->ngr31==3) selected @endif >Regular</option>
  <option value=4 @if($Encuesta->ngr31==4) selected @endif >Poco</option>
  <option value=5 @if($Encuesta->ngr31==5) selected @endif >Nada</option>
 </select>

    </td>
    </tr><tr>
<td>
<h2 class="reactivo">
<BR> 130).-Trabajar en colaboración con otras personas</h2>
</td><td>
a).-<select class="select" id="Pregunta 130a"  name="ngr32">
<option value="" selected="selected"></option>
  <option value=1 @if($Encuesta->ngr32==1) selected @endif >Muchísimo</option>
  <option value=2 @if($Encuesta->ngr32==2) selected @endif >Mucho</option>
  <option value=3 @if($Encuesta->ngr32==3) selected @endif >Regular</option>
  <option value=4 @if($Encuesta->ngr32==4) selected @endif >Poco</option>
  <option value=5 @if($Encuesta->ngr32==5) selected @endif >Nada</option>
 </select>

 </td><td>
b).-<select class="select" id="ngr33"  name="ngr33">
<option value="" selected="selected"></option>
  <option value=1 @if($Encuesta->ngr33==1) selected @endif >Muchísimo</option>
  <option value=2 @if($Encuesta->ngr33==2) selected @endif >Mucho</option>
  <option value=3 @if($Encuesta->ngr33==3) selected @endif >Regular</option>
  <option value=4 @if($Encuesta->ngr33==4) selected @endif >Poco</option>
  <option value=5 @if($Encuesta->ngr33==5) selected @endif >Nada</option>
 </select>

    </td>
    </tr><tr>
<td>
<h2 class="reactivo"><BR> 131).-Formular ideas o pensamientos originales o innovadores
</h2>
</td><td> a.-<select class="select" id="ngr34"  name="ngr34">
<option value="" selected="selected"></option>
  <option value=1 @if($Encuesta->ngr34==1) selected @endif >Muchísimo</option>
  <option value=2 @if($Encuesta->ngr34==2) selected @endif >Mucho</option>
  <option value=3 @if($Encuesta->ngr34==3) selected @endif >Regular</option>
  <option value=4 @if($Encuesta->ngr34==4) selected @endif >Poco</option>
  <option value=5 @if($Encuesta->ngr34==5) selected @endif >Nada</option>
 </select>

    </td>
<td>
b).-  <select class="select" id="ngr35"  name="ngr35">
<option value="" selected="selected"></option>
  <option value=1 @if($Encuesta->ngr35==1) selected @endif >Muchísimo</option>
  <option value=2 @if($Encuesta->ngr35==2) selected @endif >Mucho</option>
  <option value=3 @if($Encuesta->ngr35==3) selected @endif >Regular</option>
  <option value=4 @if($Encuesta->ngr35==4) selected @endif >Poco</option>
  <option value=5 @if($Encuesta->ngr35==5) selected @endif >Nada</option>
 </select>



   </td></tr>
   </table>
  </td>
</tr>
<tr>
<td colspan="4">
<h2 class="reactivo">
<B><CENTER>Durante sus formación como universitario adquirió o desarrolló:</CENTER></B></FONT></TD></h2>

    </td>
</tr>

<tr>

<td>
<h2 class="reactivo">
132.- Una cultura general amplia</h2>
<select class="select" id="ngr36" name="ngr36" >
<option selected="selected" value="">
<option value=1 @if($Encuesta->ngr36==1) selected @endif >Totalmente de acuerdo</option>
<option value=2 @if($Encuesta->ngr36==2) selected @endif >De acuerdo</option>
<option value=3 @if($Encuesta->ngr36==3) selected @endif >Medianamente de acuerdo</option>
<option value=4 @if($Encuesta->ngr36==4) selected @endif >En desacuerdo</option>
<option value=5 @if($Encuesta->ngr36==5) selected @endif >Totalmente en desacuerdo</option>
</select>
    </td>
<td>
<h2 class="reactivo">
133.- La capacidad para apreciar diferentes expresiones artísticas (cine, teatro, etc.)</h2>
<select class="select" id="ngr37" name="ngr37"  onchange="artisticos()">
<option selected="selected" value="">
<option value=11 @if($Encuesta->ngr37==11) selected @endif >Sí</option>
<option value=12 @if($Encuesta->ngr37==12) selected @endif >No</option>
</select>
    </td>
<td>
<h2 class="reactivo">
a).-¿Con qué frecuencia asistió a eventos artísticos?</h2>
<select class="select" id="ngr37a" name="ngr37_a"  >
<option selected="selected" value="">
<option value=11 @if($Encuesta->ngr37_a==11) selected @endif >2 o 3 veces por semana</option>
<option value=12 @if($Encuesta->ngr37_a==12) selected @endif >1 vez a la semana</option>
<option value=13 @if($Encuesta->ngr37_a==13) selected @endif >1 vez al mes</option>
<option value=0 hidden > </option>
      </select>
    </td>
<td>
<h2 class="reactivo">
b).-Motivo por el que no asistió a eventos artísticos</h2>
<select class="select" id="ngr37m" name="ngr37m"  >
<option selected="selected" value="">
<option value=1 @if($Encuesta->ngr37m==1) selected @endif >Desinterés</option>
<option value=2 @if($Encuesta->ngr37m==2) selected @endif >Falta de tiempo</option>
<option value=3 @if($Encuesta->ngr37m==3) selected @endif >Falta de instalaciones</option>
<option value=4 @if($Encuesta->ngr37m==4) selected @endif >Falta de difusión</option>
<option value=5 @if($Encuesta->ngr37m==5) selected @endif >Ya contaba con el</option>
<option value=6 @if($Encuesta->ngr37m==6) selected @endif >Otra</option>
<option value=0 hidden > </option>
      </select>

    </td>
</tr>

<tr>
<td>
<h2 class="reactivo">
134.-Una mejor valoración de si mismo</h2>
<select class="select" id="ngr38"  name="ngr38" >
<option selected="selected" value="">
<option value=1 @if($Encuesta->ngr38==1) selected @endif >Totalmente de acuerdo</option>
<option value=2 @if($Encuesta->ngr38==2) selected @endif >De acuerdo</option>
<option value=3 @if($Encuesta->ngr38==3) selected @endif >Medianamente de acuerdo</option>
<option value=4 @if($Encuesta->ngr38==4) selected @endif >En desacuerdo</option>
<option value=5 @if($Encuesta->ngr38==5) selected @endif >Totalmente en desacuerdo</option>
</select>
    </td>
<td>
<h2 class="reactivo">
135.- Conocimientos e  interés  por el cuidado de su salud</h2>
<select class="select" id="ngr39" name="ngr39" >
<option selected="selected" value="">
<option value=1 @if($Encuesta->ngr39==1) selected @endif >Totalmente de acuerdo</option>
<option value=2 @if($Encuesta->ngr39==2) selected @endif >De acuerdo</option>
<option value=3 @if($Encuesta->ngr39==3) selected @endif >Medianamente de acuerdo</option>
<option value=4 @if($Encuesta->ngr39==4) selected @endif >En desacuerdo</option>
<option value=5 @if($Encuesta->ngr39==5) selected @endif >Totalmente en desacuerdo</option>
</select>
    </td>
<td>
<h2 class="reactivo">
136.- ¿Interés por la práctica  de algún deporte?</h2>
<select class="select" id="ngr40" name="ngr40"  onchange="deportes()">
<option selected="selected" value="">
  <option value=11 @if($Encuesta->ngr40==11) selected @endif >Sí</option>
<option value=12 @if($Encuesta->ngr40==12) selected @endif >No</option>
</select>
    </td>
<td>
<h2 class="reactivo">
a).-¿Cuál? </h2>
<select class="select" id="ngr40_a" name="ngr40_a"  >
<option selected="selected" value="">
<option value=11 @if($Encuesta->ngr40_a==11) selected @endif >Acondicionamiento físico</option>
<option value=12 @if($Encuesta->ngr40_a==12) selected @endif >Ajedrez</option>
<option value=13 @if($Encuesta->ngr40_a==13) selected @endif >Atletismo</option>
<option value=14 @if($Encuesta->ngr40_a==14) selected @endif >Baloncesto</option>
<option value=15 @if($Encuesta->ngr40_a==15) selected @endif >Beisbol</option>
<option value=16 @if($Encuesta->ngr40_a==16) selected @endif >Boliche</option>
<option value=17 @if($Encuesta->ngr40_a==17) selected @endif >Boxeo</option>
<option value=18 @if($Encuesta->ngr40_a==18) selected @endif >Buceo</option>
<option value=19 @if($Encuesta->ngr40_a==19) selected @endif >Canotaje</option>
<option value=20 @if($Encuesta->ngr40_a==20) selected @endif >Esgrima</option>
<option value=21 @if($Encuesta->ngr40_a==21) selected @endif >Fisicoculturismo</option>
<option value=22 @if($Encuesta->ngr40_a==22) selected @endif >Frontón</option>
<option value=23 @if($Encuesta->ngr40_a==23) selected @endif >Futbol Americano</option>
<option value=24 @if($Encuesta->ngr40_a==24) selected @endif >Futbol Soccer</option>
<option value=25 @if($Encuesta->ngr40_a==25) selected @endif >Gimnasia</option>
<option value=26 @if($Encuesta->ngr40_a==26) selected @endif >Handball</option>
<option value=27 @if($Encuesta->ngr40_a==27) selected @endif >Hockey</option>
<option value=28 @if($Encuesta->ngr40_a==28) selected @endif >Judo</option>
<option value=29 @if($Encuesta->ngr40_a==29) selected @endif >Karate</option>
<option value=30 @if($Encuesta->ngr40_a==30) selected @endif >Levantamiento de pesas</option>
<option value=31 @if($Encuesta->ngr40_a==31) selected @endif >Lucha</option>
<option value=32 @if($Encuesta->ngr40_a==32) selected @endif >Montañismo</option>
<option value=33 @if($Encuesta->ngr40_a==33) selected @endif >Natación</option>
<option value=34 @if($Encuesta->ngr40_a==34) selected @endif >Remo</option>
<option value=35 @if($Encuesta->ngr40_a==35) selected @endif >Squash</option>
<option value=36 @if($Encuesta->ngr40_a==36) selected @endif >Taekwondo</option>
<option value=37 @if($Encuesta->ngr40_a==37) selected @endif >Tenis</option>
<option value=38 @if($Encuesta->ngr40_a==38) selected @endif >Tenis de mesa</option>
<option value=39 @if($Encuesta->ngr40_a==39) selected @endif >Triatlón</option>
<option value=40 @if($Encuesta->ngr40_a==40) selected @endif >Voleibol</option>
<option value=41 @if($Encuesta->ngr40_a==41) selected @endif >Ciclismo</option>
<option value=42 @if($Encuesta->ngr40_a==42) selected @endif >Artes marciales</option>
<option value=43 @if($Encuesta->ngr40_a==43) selected @endif >Otros</option>
<option value=0 hidden > </option>
      </select>

    </td>
</tr>

<tr>
<td>
<h2 class="reactivo">
b).- ¿Con qué frecuencia lo practicó?</h2>
<select class="select" id="ngr40a" name="ngr40a" >
<option selected="selected" value="">
<option value=11 @if($Encuesta->ngr40a==11) selected @endif >Diario</option>
<option value=12 @if($Encuesta->ngr40a==12) selected @endif >2 o 3 veces por semana</option>
<option value=13 @if($Encuesta->ngr40a==13) selected @endif >1 vez a la semana</option>
<option value=0 hidden > </option>
      </select>
</td> <td>
<h2 class="reactivo" >  
c).- Motivo por el que no lo practico </h2>
<select class="select" id="ngr40_b" name="ngr40_b"  >
<option selected="selected" value="">
<option value=1 @if($Encuesta->ngr40_b==1) selected @endif >Desinterés</option>
<option value=2 @if($Encuesta->ngr40_b==2) selected @endif >Falta de tiempo</option>
<option value=3 @if($Encuesta->ngr40_b==3) selected @endif >Falta de instalaciones</option>
<option value=4 @if($Encuesta->ngr40_b==4) selected @endif >Falta de promoción</option>
<option value=5 @if($Encuesta->ngr40_b==5) selected @endif >Ya contaba con el</option>
<option value=5 >Otro</option>
<option value=0 hidden > </option>
      </select>
</td>
<td>
<h2 class="reactivo"> 
141.- ¿Actualmente es miembro de alguna organización o asociación? - </h2>
<select class="select" id="ngr45"  name="ngr45" onchange="bloquear('ngr45',[2],[ngr45_a,ngr45a])">
<option selected="selected" value="">
  <option value=1 @if($Encuesta->ngr45==1) selected @endif >Sí</option>
<option value=2 @if($Encuesta->ngr45==2) selected @endif >No</option>
</select>
    </td>
    <td>
<h2 class="reactivo">
141a).-¿Cuál?</h2>
<select class="select" id="ngr45_a" name="ngr45_a" onchange="bloquear('ngr45_a',[1,2,3,4,5,6],[ngr45a])">
<option selected="selected" value="">
<option value=4 @if($Encuesta->ngr45_a==4) selected @endif >Afiliado a un grupo religioso</option>
<option value=3 @if($Encuesta->ngr41_a==3) selected @endif >Cultural, educativa, recreativa o deportiva</option>
<option value=5 @if($Encuesta->ngr41_a==5) selected @endif >Comunitaria o cívica</option>
<option value=6 @if($Encuesta->ngr41_a==6) selected @endif >Científica o Investigación</option>
<option value=1 @if($Encuesta->ngr41_a==1) selected @endif >Profesional</option>
<option value=2 @if($Encuesta->ngr41_a==2) selected @endif >Política</option>
<option value=7 @if($Encuesta->ngr41_a==7) selected @endif >OTRA</option>
<option value=0 hidden > </option>
      </select>

   
<h2 class="reactivo">141b).-Otra:  </h2>

<INPUT  id="ngr45a" name="ngr45a" TYPE=TEXT  class="texto"  SIZE=60 MAXLENGTH=60 value="{{$Encuesta->ngr45a}}">

    </td>
</tr>

<tr>

<td>
<h2 class="reactivo"> 
142.-¿Conoce usted la Credencial de Egresados y sus beneficios? </h2>
<select class="select" id="CONOCE"  name="CONOCE"  >
<option selected="selected" value="">
  <option value=1 @if($Encuesta->CONOCE==1) selected @endif >Sí</option>
<option value=2 @if($Encuesta->CONOCE==2) selected @endif >No</option>
</select>
    </td>
<td>
<h2 class="reactivo">
143.-¿Ya cuenta con su credencial de Exalumnos?</h2>
<select class="select" id="CUE_CRE"  name="CUE_CRE"  onchange="bloquear('CUE_CRE',[2],[UTILIZA])">
<option selected="selected" value="">
  <option value=1 @if($Encuesta->CUE_CRE==1) selected @endif >Sí</option>
<option value=2 @if($Encuesta->CUE_CRE==2) selected @endif >No</option>
<option value=0 hidden > </option>
      </select>

    </td>
    <td colspan="2">
<h2 class="reactivo">144.-¿Ha utilizado los Beneficios que le otorga el Programa de Vinculación con los Egresados de la UNAM?  </h2>
<select class="select" id="UTILIZA"  name="UTILIZA" >
<option selected="selected" value="">
    <option value=1 @if($Encuesta->UTILIZA==1) selected @endif >Sí</option>
<option value=2 @if($Encuesta->UTILIZA==2) selected @endif >No</option>
<option value=0 hidden > </option>
      </select>


    </td>
</tr>
<tr>
  <td colspan="4">
 
<h2 class="reactivo"> ¿Desea hacer algun comentario? </h2>
<select class="select" id="comen" name="ncro2" onchange="bloquear('comen',[2],[comentario])"  >
<option value="" selected></option>
    <option value='1' @if(strlen($Comentario)>2) selected @endif >Sí</option>
    <option value='2' @if(strlen($Comentario)<=1) selected @endif >No</option> 
</select>
<br>
<h2 class="reactivo"> ¿Comentario? </h2>
<br>
<textarea type="text" class="texto"   name="comentario" size="140"  id="comentario" rows="5" cols="50" value="{{$Comentario}}">
</textarea>
  </td>
</tr>
  </table>

<button class="btn fixed" name='boton1'  value=0 type="summit" onclick="post_data()" style="background-color:{{Auth::user()->color}} ; color:white; display: flex;">
<center><i class="fas fa-save fa-lg"></i>  <br> Terminar Encuesta </center>
  </button>
  </form>
</div>

@endsection


@push('js')
<script>
  unhide('G');
//   reactivos=document.getElementById("forma_sagrada").elements
//   for (var i=0, item; item = reactivos[i]; i++) {
//   // Look no need to do list[i] in the body of the loop
//   console.log("'"+item.name+"' => 'required',");
// }
</script>
<script>
 @foreach ($errors->all() as $error)
                document.getElementById( "{{str_replace('The ','',str_replace(' field is required.', '', $error)) }}").style="border: 0.3vw  solid red";
  @endforeach
</script>
  <script>
       function manual(myRadio) {
        var folio = document.getElementById("fecha-group");
        folio.style.display="block";
        }
        function automatico(myRadio) {
            var group = document.getElementById("fecha-group");
            var fecha = document.getElementById("fec_capt");
            group.style.display="none";
            fecha.value="2023-01-01";
        }
    </script>

@if($errors->any())
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
  Swal.fire({
  title: "Sección Incompleta",
  text: "faltan algunas respuestas, se marcaran en rojo",
  icon: "warning",
});
</script>
@endif

@endpush