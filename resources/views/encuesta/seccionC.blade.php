@extends('layouts.blank_app')

@section('content')
<h1 > COMPLETAR ENCUESTA </h1>
<div  id='datos'>  @include('encuesta.personal_data') </div>
<div style="padding:1.2vw;">
<form action="{{ url('encuestas/2020/C_update/'. $Encuesta->registro) }}" method="POST" enctype="multipart/form-data" id='forma_sagrada' name='forma'>
@csrf
<table class="encuesta_table">
        <!-- primera fila  -->
<tr>
<td>
<h2 class="reactivo">21.- ¿Actualmente está trabajando? </h2> 
 
    
 <select class="select" id="ncr1" name="ncr1"  onchange='seccionc2()'>
<option selected  value="">Seleccione...</option>
<option value=1 @if($Encuesta->ncr1==1) selected @endif>Sí (permanente)</option>
<option value=2 @if($Encuesta->ncr1==2) selected @endif>Sí (eventual)</option>
<option value=3 @if($Encuesta->ncr1==3) selected @endif>No (Sin buscar trabajo), (pase a la 42)</option>
<option value=4 @if($Encuesta->ncr1==4) selected @endif>No (En búsqueda de trabajo), (pase a la 42)</option>
<option value=5 @if($Encuesta->ncr1==5) selected @endif>Residente (Médico) (conteste  la 2)</option>
<option value=6 @if($Encuesta->ncr1==6) selected @endif>Nunca ha trabajado, (pase a la 42 y despues a la 63)</option>
</select>
</td>
 <td colspan="2">
 <h2 class="reactivo"> 22.- Nombre de la empresa o institución donde trabaja </h2>
 <INPUT type="text" class="texto" id="ncr2" name="ncr2" value="{{$Encuesta->ncr2}}" maxlength="220"  >

 </td>
 <td>
  <h2 class="reactivo"> 22a.-Estado donde se ubica </h2> 


<select class="select" id="ncr2a"  name="ncr2a" > 
<option selected  value=""></option>
<option value=1 @if($Encuesta->ncr2a==1) selected @endif>CDMX</option>
<option value=2 @if($Encuesta->ncr2a==2) selected @endif>EXTRANJERO</option>
<option value=3 @if($Encuesta->ncr2a==3) selected @endif>Aguascalientes</option>
<option value=4 @if($Encuesta->ncr2a==4) selected @endif>Baja California</option>
<option value=5 @if($Encuesta->ncr2a==5) selected @endif>Baja California Sur</option>
<option value=6 @if($Encuesta->ncr2a==6) selected @endif>Campeche</option>
<option value=7 @if($Encuesta->ncr2a==7) selected @endif>Chiapas</option>
<option value=8 @if($Encuesta->ncr2a==8) selected @endif>Chihuahua</option>
<option value=9 @if($Encuesta->ncr2a==9) selected @endif>Coahuila</option>
<option value=10 @if($Encuesta->ncr2a==10) selected @endif>Colima</option>
<option value=11 @if($Encuesta->ncr2a==11) selected @endif>Durango</option>
<option value=12 @if($Encuesta->ncr2a==12) selected @endif>Guanajuato</option>
<option value=13 @if($Encuesta->ncr2a==13) selected @endif>Guerrero</option>
<option value=14 @if($Encuesta->ncr2a==14) selected @endif>Hidalgo</option>
<option value=15 @if($Encuesta->ncr2a==15) selected @endif>Jalisco</option>
<option value=16 @if($Encuesta->ncr2a==16) selected @endif>Estado de México</option>
<option value=17 @if($Encuesta->ncr2a==17) selected @endif>Michoacán</option>
<option value=18 @if($Encuesta->ncr2a==18) selected @endif>Morelos</option>
<option value=19 @if($Encuesta->ncr2a==19) selected @endif>Nayarit</option>
<option value=20 @if($Encuesta->ncr2a==20) selected @endif>Nuevo León</option>
<option value=21 @if($Encuesta->ncr2a==21) selected @endif>Oaxaca</option>
<option value=22 @if($Encuesta->ncr2a==22) selected @endif>Puebla</option>
<option value=23 @if($Encuesta->ncr2a==23) selected @endif>Querétaro</option>
<option value=24 @if($Encuesta->ncr2a==24) selected @endif>Quintana Roo</option>
<option value=25 @if($Encuesta->ncr2a==25) selected @endif>San Luis Potosí</option>
<option value=26 @if($Encuesta->ncr2a==26) selected @endif>Sinaloa</option>
<option value=27 @if($Encuesta->ncr2a==27) selected @endif>Sonora</option>
<option value=28 @if($Encuesta->ncr2a==28) selected @endif>Tabasco</option>
<option value=29 @if($Encuesta->ncr2a==29) selected @endif>Tamaulipas</option>
<option value=30 @if($Encuesta->ncr2a==30) selected @endif>Tlaxcala</option>
<option value=31 @if($Encuesta->ncr2a==31) selected @endif>Veracruz</option>
<option value=32 @if($Encuesta->ncr2a==32) selected @endif>Yucatán</option>
<option value=33 @if($Encuesta->ncr2a==33) selected @endif>Zacatecas</option>
<option value=0  hidden></option>   
</select>
</td>
</tr>

<tr>
<td>
<h2 class="reactivo"> 23.- La empresa o institución donde trabaja es: 
</h2>


<select class="select" id="ncr3"  name="ncr3" > 
<option selected  value=""></option>
<option value=1 @if($Encuesta->ncr3==1) selected @endif>Pública</option>
<option value=2 @if($Encuesta->ncr3==2) selected @endif>Privada</option>
<option value=3 @if($Encuesta->ncr3==3) selected @endif>Social</option>
<option value=0  hidden></option>   
</select>
    </td>
<td>
<h2 class="reactivo">24.- ¿En qué sector se ubica? </h2>


<select class="select" id="ncr4" name="ncr4"   onchange="bloquear('ncr4',[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,22],[ncr4a])">
<option selected="selected" value="">
<option value=1 @if($Encuesta->ncr4==1) selected @endif> Agricultura, ganadería, aprovechamiento forestal, caza y pesca</option>
<option value=19 @if($Encuesta->ncr4==19) selected @endif>Asociaciones y agrupaciones</option>
<option value=20 @if($Encuesta->ncr4==20) selected @endif>Actividades de gobierno, organismos internacionales y extraterritoriales</option>
<option value=4 @if($Encuesta->ncr4==4) selected @endif>Construcción</option>
<option value=6 @if($Encuesta->ncr4==6) selected @endif>Comercio al por mayor</option>
<option value=7 @if($Encuesta->ncr4==7) selected @endif>Comercio al por menor</option> 
<option value=13 @if($Encuesta->ncr4==13) selected @endif>Dirección de corporativos y empresas</option>
<option value=23 @if($Encuesta->ncr4==23) selected @endif>Editorial</option>
<option value=3 @if($Encuesta->ncr4==3) selected @endif>Electricidad, agua y suministro de gas</option>
<option value=5 @if($Encuesta->ncr4==5) selected @endif>Industrias manufactureras o de la transformación</option>
<option value=9 @if($Encuesta->ncr4==9) selected @endif>Información en medios masivos</option>
<option value=2 @if($Encuesta->ncr4==2) selected @endif>Minería</option>
<option value=10 @if($Encuesta->ncr4==10) selected @endif>Servicios financieros y de seguros</option>
<option value=11 @if($Encuesta->ncr4==11) selected @endif>Servicio inmobiliario y de alquiler de bienes muebles e intangibles</option>
<option value=12 @if($Encuesta->ncr4==12) selected @endif>Servicios profesionales, científicos y técnicos</option>
<option value=14 @if($Encuesta->ncr4==14) selected @endif>Servicios de apoyo a los negocios, manejo de desecho y servicios de remediación</option>
<option value=15 @if($Encuesta->ncr4==15) selected @endif>Servicios de salud</option>
<option value=16 @if($Encuesta->ncr4==16) selected @endif>Servicios educativos</option>
<option value=17 @if($Encuesta->ncr4==17) selected @endif>Servicios de esparcimiento, cultural, deportivos y otros centros recreativos</option>
<option value=18 @if($Encuesta->ncr4==18) selected @endif>Servicios de alojamiento temporal, de preparación de alimentos y bebidas (hotel, restaurant, bar) </option>
<option value=8 @if($Encuesta->ncr4==8) selected @endif>Transporte, correos y almacenamiento</option>
<option value=22 @if($Encuesta->ncr4==22) selected @endif>Telecomunicaciones </option>
<option value=21 @if($Encuesta->ncr4==21) selected @endif>Otro (Especifíque)</option>
<option value=0  hidden></option>   
</select><br>

    </td>
<td>
<h2 class="reactivo">

24a).- Otra:</h2> 
<input  class="texto" id="ncr4a" name="ncr4a"  maxlength="65" value=0 > 
</td>
<td>
<h2 class="reactivo"> 25.-Aproximadamente, ¿cuántas personas laboran en la empresa?  </h2>

<select class="select" id="ncr5" name="ncr5"  >
  <option selected="selected" value="">
  <option value=1 @if($Encuesta->ncr5==1) selected @endif> Hasta 15 empleados</option>
  <option value=2 @if($Encuesta->ncr5==2) selected @endif>Entre 16 y 100 empleados </option>
  <option value=3 @if($Encuesta->ncr5==3) selected @endif>Entre 101 y 250 empleados</option>
  <option value=4 @if($Encuesta->ncr5==4) selected @endif>Más de 251 empleados</option>
  <option value=0  hidden></option>   
</select>
</tr>

<tr>
<td>
<h2 class="reactivo"> 26.- ¿Cuál es su condición en el trabajo? </h2>

<select class="select" id="ncr6a2"  name="ncr6" onchange="autoempleo()">
    <option selected="selected" value="">
    <option value=1 @if($Encuesta->ncr6==2) selected @endif @if($Encuesta->ncr6==3) selected @endif>Autoempleo</option>
    <option value=4 @if($Encuesta->ncr6==4) selected @endif>Empleado </option>
    <option value=5 @if($Encuesta->ncr6==5) selected @endif>Otro (Especifíque)</option>
    <option value=0  hidden></option>   
</select>

    
        </td>
<td>
<h2 class="reactivo"> 26a.-¿Tipo de autoempleo? </h2>
<select class="select" id="ncr6a" name="ncr6t" >
<option selected="selected" value="">
<option value=2 @if($Encuesta->ncr6==2) selected @endif>Propietario</option>
    <option value=3 @if($Encuesta->ncr6==3) selected @endif>Profesional independiente</option>
    <option value=0  hidden></option>   
</select>
<br>
    </td>
<td>
<h2 class="reactivo">
 Otra: </h2><input type="text" class="texto" id="ncr6otra" name="ncr6_a" style="width:60%" maxlength="65" value=" " > 
     </td>
<td>

<h2 class="reactivo">27.- ¿Cuál es su puesto? </h2>


 <INPUT type="text" class="texto" id="ncr7a" name="ncr7a" value="{{$Encuesta->ncr7_a}}" style="width:60%"  maxlength="110"  >

    </td>
</tr>

<tr>
<td>
<h2 class="reactivo">28.- ¿Requiere tener título profesional para el puesto que ocupa? </h2>


<select class="select" id="ncr7b" name="ncr7b"  >
    <option selected="selected" value="">
    <option value=1 @if($Encuesta->ncr7b==1) selected @endif>Sí</option>
    <option value=2 @if($Encuesta->ncr7b==2) selected @endif>No</option> 
    <option value=0  hidden></option>   
</select>

        </td>
<td>
<h2 class="reactivo"> 29.- En su trabajo,¿tiene personal a su cargo? </h2>
<select class="select" id="ncr8" name="ncr8"  onchange="bloquear('ncr8',[2],[ncr9])" >
    <option selected="selected" value="">
    <option value=1 @if($Encuesta->ncr8==1) selected @endif>Sí</option>
    <option value=2 @if($Encuesta->ncr8==2) selected @endif>No</option>
    <option value=0  hidden></option>   
 </select>
        </td>
<td>
<h2 class="reactivo"> 30.- ¿Cuántas personas trabajan con usted? </h2>


<select class="select" id="ncr9" @if($Encuesta->ncr8==2) hidden @endif name="ncr9"  >
    <option selected="selected" value="">
    <option value=1 @if($Encuesta->ncr9==1) selected @endif>1 a 5 </option>
    <option value=2 @if($Encuesta->ncr9==2) selected @endif>6 a 10</option> 
    <option value=3 @if($Encuesta->ncr9==3) selected @endif>11 a 20</option> 
    <option value=4 @if($Encuesta->ncr9==4) selected @endif>21 a 30</option> 
    <option value=5 @if($Encuesta->ncr9==5) selected @endif>31 o más</option> 
    <option value=0  hidden></option>   
</select>
    </td>
<td>
<h2 class="reactivo">31.- ¿Su trabajo es de tiempo completo?</h2> 
<select class="select" id="ncr10" name="ncr10"  >
    <option selected="selected" value="">
    <option value=1 @if($Encuesta->ncr10==1) selected @endif>Sí</option>
    <option value=2 @if($Encuesta->ncr10==2) selected @endif>No</option> 
    <option value=0  hidden></option>   
</select>
        </td>
</tr>

<tr>
<td>
<h2 class="reactivo"> 32.- ¿Qué tanto está relacionado su trabajo actual con su profesión? </h2> 

<select class="select" id="ncr11" name="ncr11"   onchange="bloquear('ncr11',[1,2],[ncr15])" >
  <option selected="selected" value="">
  <option value=1 @if($Encuesta->ncr11==1) selected @endif>Muy relacionado</option>
  <option value=2 @if($Encuesta->ncr11==2) selected @endif>Medianamente relacionado</option> 
  <option value=3 @if($Encuesta->ncr11==3) selected @endif>No está relacionado</option> 
  <option value=0  hidden></option>   

</select>
    </td>
<td>
<h2 class="reactivo">33.- ¿Que actividades realiza? 
Especifique:</h2>
<textarea type="text" class="texto" id="ncr12_a"  rows="3"  name="ncr12_a" maxlength="110"  > {{$Encuesta->ncr12_a}} </textarea>

    </td>
<td>
<h2 class="reactivo"> 34.- ¿Si su trabajo no está relacionado con su carrera
         es porque usted asílo decidió? </h2>

<select class="select" id="ncr15" name="ncr15"  >
<option selected="selected" value="" @if($Encuesta->ncr11!=3) hidden @endif>
    <option value=1 @if($Encuesta->ncr15==1) selected @endif>Sí</OPTION>
    <option value=2 @if($Encuesta->ncr15==2) selected @endif>No</OPTION> 
    <option value=0  hidden></option>   
</select>

    </td>
<td>
<h2 class="reactivo"> 35.- ¿Cómo considera qué lo preparó el estudio de la carrera para el desempeño de su trabajo actual? </h2>
    
    <select class="select" id="ncr16" name="ncr16"   > 
           <option selected="selected" value="">
          <option value=1 @if($Encuesta->ncr16==1) selected @endif>Muy Bien</option>
          <option value=2 @if($Encuesta->ncr16==2) selected @endif>Bien</option>
          <option value=3 @if($Encuesta->ncr16==3) selected @endif>Medianamente</option>
          <option value=4 @if($Encuesta->ncr16==4) selected @endif>Mal</option>
          <option value=5 @if($Encuesta->ncr16==5) selected @endif>Muy mal</option>
          <option value=0  hidden></option>   
 </select>
    
             </td>
</tr>
<tr>
<td>
<h2 class="reactivo">36.¿Cuál es su grado de satisfacción con su trabajo actual? </h2>
         <select class="select" id="ncr17" name="ncr17" >  
       <option selected="selected" value="">
       <option value=1 @if($Encuesta->ncr17==1) selected @endif>Muy satisfecho(a)</option>
       <option value=2 @if($Encuesta->ncr17==2) selected @endif>Satisfecho(a)</option>
       <option value=3 @if($Encuesta->ncr17==3) selected @endif>Medianamente satisfecho(a)</option>
       <option value=4 @if($Encuesta->ncr17==4) selected @endif>Poco satisfecho(a)</option>
       <option value=5 @if($Encuesta->ncr17==5) selected @endif>Nada satisfecho(a)</option>
       <option value=0  hidden></option>   
</select>
             </td>
<td>
<h2 class="reactivo">37.- ¿Considera que el salario que percibe en su  trabajo es congruente con su preparación?
        </h2>
    
       <select class="select" id="ncr18" name="ncr18">  
       <option selected="selected" value="">
       <option value=1 @if($Encuesta->ncr18==1) selected @endif>Totalmente de acuerdo</option>
       <option value=2 @if($Encuesta->ncr18==2) selected @endif>De acuerdo</option>
       <option value=3 @if($Encuesta->ncr18==3) selected @endif>Medianamente de acuerdo</option>
       <option value=4 @if($Encuesta->ncr18==4) selected @endif>En desacuerdo</option>
       <option value=5 @if($Encuesta->ncr18==5) selected @endif>Totalmente en desacuerdo</option>
       <option value=0  hidden></option>   
</select>
    
           </td>
<td>
<h2 class="reactivo">38.- ¿Considera que las actividades y responsabilidades que tiene 
        en su trabajo, corresponden a su nivel educativo?  </h2>
    
       <select class="select" id="ncr19" name="ncr19" > 
       <option selected="selected" value="">
       <option value=5 @if($Encuesta->ncr19==5) selected @endif>Totalmente de acuerdo</option>   
       <option value=4 @if($Encuesta->ncr19==4) selected @endif>De acuerdo</option>
       <option value=3 @if($Encuesta->ncr19==3) selected @endif>Medianamente de acuerdo</option>
       <option value=2 @if($Encuesta->ncr19==2) selected @endif>En desacuerdo</option>   
       <option value=1 @if($Encuesta->ncr19==1) selected @endif>Totalmente  en desacuerdo</option>
       <option value=0  hidden></option>   
</select>
        </td>
<td>
<h2 class="reactivo">39.- ¿Cuantos trabajos tiene actualmente?  </h2>
    
          <select class="select" id="ncr20" name="ncr20"  > 
          <option selected="selected" value="">
          <option value=1 @if($Encuesta->ncr20==1) selected @endif>Uno</option>
          <option value=2 @if($Encuesta->ncr20==2) selected @endif>Dos</option>
          <option value=3 @if($Encuesta->ncr20==3) selected @endif>Tres o más</option>
          <option value=0  hidden></option>   
</select>
    
               </td>
</tr>
<tr>
<td>
<h2 class="reactivo"> 40.- ¿Cuáles son sus ingresos mensuales promedio en su o sus trabajos?  </h2>
    
    <INPUT type="text" class="texto"  id="ncr21_a" name="ncr21_a" size="10" maxlength="6" value="{{$Encuesta->ncr21_a}}"  onKeyPress="return acceptNum(event)" > 
    (solo enteros, sin centavos, comas, ni puntos) 
        </td>
<td>
<h2 class="reactivo"> 41.- Desde que terminó sus estudios de licenciatura,
        ¿ha dejado de trabajar? </h2>
    
    
    <select class="select" id="ncr22" name="ncr22"  onchange="bloquear('ncr22',[2],[ncr24,ncr24a,ncr24porque,ncr23]) "> 
    <option value="" selected="selected"></option>
    <option value=1 @if($Encuesta->ncr22==1) selected @endif>Sí</option>
    <option value=2 @if($Encuesta->ncr22==2) selected @endif>No</option>
    <option value=0  hidden></option>   

    </select>
    
        </td>
<td>
<h2 class="reactivo"> 42.-¿Cuál es la razón principal por la que usted no está trabajando o 
        ha dejado de trabajar? </h2>
     <select class="select" id="ncr24" name="ncr24" onchange="funcion_ncr24()" >
      <option value=0 @if($Encuesta->ncr24==0) selected @endif> -</option>
      <option value=1 @if($Encuesta->ncr24==1) selected @endif> Estar estudiando</option>
      <option value=13 @if($Encuesta->ncr24==13) selected @endif>Embarazo </option>
      <option value=11 @if($Encuesta->ncr24==11) selected @endif>Razones de salud </option>
      <option value=4 @if($Encuesta->ncr24==4) selected @endif> Obligaciones familiares</option>
      <option value=10 @if($Encuesta->ncr24==10) selected @endif>No le interesaba trabajar </option>
      <option value=5 @if($Encuesta->ncr24==5) selected @endif>Las ofertas eran poco atractivas con relación al salario </option>
      <option value=6 @if($Encuesta->ncr24==6) selected @endif>Las ofertas eran poco atractivas con relación a las actividades profesionales </option>
      <option value=2 @if($Encuesta->ncr24==2) selected @endif>Falta de ofertas de trabajo </option>
      <option value=7 @if($Encuesta->ncr24==7) selected @endif>Falta de experiencia laboral</option>
      <option value=3 @if($Encuesta->ncr24==3) selected @endif>No tenía las competencias necesarias para el trabajo al que aspiraba </option>
      <option value=8 @if($Encuesta->ncr24==8) selected @endif> No tener el título de licenciatura</option>
      <option value=9 @if($Encuesta->ncr24==9) selected @endif>No tener estudios de posgrado </option>
      <option value=12 @if($Encuesta->ncr24==12) selected @endif> Perdió o dejó su trabajo (¿por qué?)</option>
      <option value=13 @if($Encuesta->ncr24==13) selected @endif>Embarazo</option> 
      <option value=15 @if($Encuesta->ncr24==15) selected @endif>Hacer la tesis o trámites de titulación </option> 
      <option value=16 @if($Encuesta->ncr24==16) selected @endif>Servicio social o prácticas profesionales</option> 
      <option value=17 @if($Encuesta->ncr24==17) selected @endif>Cambio de residencia</option> 
      <option value=18 @if($Encuesta->ncr24==18) selected @endif>Emprender un negocio o empresa propios</option> 
      <option value=19 @if($Encuesta->ncr24==19) selected @endif>Motivos personales</option> 
      <option value=20 @if($Encuesta->ncr24==29) selected @endif>Derivado de la pandemia</option> 
      <option value=14 @if($Encuesta->ncr24==14) selected @endif>Otra </option>
       
</select>
</td><td>
    <br>(Especifíque)
    Otra:
    <input type="text" class="texto" id="ncr24a" name="ncr24a" maxlength="55" > 
    
    
        </td>
</tr>
<tr>
<td>
<h2 class="reactivo"> 42a):-Perdió o dejó su trabajo, ¿por qué? </h2>
  
     <select class="select" id="ncr24porque" name="ncr24porque" >
              <option  value="" selected></option>
     <option value=1 @if($Encuesta->ncr24porque==1) selected @endif>Cerró la empresa</option> 
     <option value=2 @if($Encuesta->ncr24porque==2) selected @endif>Liquidación</option> 
     <option value=3 @if($Encuesta->ncr24porque==3) selected @endif>Término de contrato o proyecto</option> 
     <option value=4 @if($Encuesta->ncr24porque==4) selected @endif>Renuncia</option> 
     <option value=15 @if($Encuesta->ncr24porque==15) selected @endif>Renuncia debido a la  pandemia</option>
     <option value=16 @if($Encuesta->ncr24porque==16) selected @endif>Despido debido a la pandemia</option>
     <option value=17 @if($Encuesta->ncr24porque==17) selected @endif>Cerro la empresa debido a la pandemia</option>
     <option value=5  @if($Encuesta->ncr24porque==5) selected @endif>Otra</option> 
     <option value=9  @if($Encuesta->ncr24porque==9) selected @endif>Jubilarse o Pensionarse</option> 
     <option value=0   @if($Encuesta->ncr24!=12) selected @endif hidden></option>   
</select>
       
         </td>
<td>
<h2 class="reactivo"> 43.- ¿Cuál es el periodo más largo que ha permanecido sin laborar? </h2>
    
    
    <select class="select" id="ncr23" name="ncr23" >
        <option selected="selected" value="">
        <option value=1 @if($Encuesta->ncr23==1) selected @endif>De 1 a 3 meses</option>
        <option value=2 @if($Encuesta->ncr23==2) selected @endif>Más de 3 y hasta 6 meses</option> 
        <option value=3 @if($Encuesta->ncr23==3) selected @endif>Más de 6 y hasta un año</option> 
        <option value=4 @if($Encuesta->ncr23==4) selected @endif>Más de un año</option> 
    <option value=0  hidden></option>   
</select>
</td>
</tr>
</table>
<button class="btn fixed" name='boton1'  value=0 type="summit" onclick="post_data()" style="background-color:{{Auth::user()->color}} ; color:white; display: flex;">
<i class="fas fa-arrow-right"></i> &nbsp; Siguiente
  </button>
  </form>
</div>

@endsection


@push('js')
<script>
  unhide('C');
  reactivos=document.getElementById("forma_sagrada").elements
  for (var i=0, item; item = reactivos[i]; i++) {
  // Look no need to do list[i] in the body of the loop
  console.log("'"+item.name+"' => 'required',");
}
</script>
<script>
 @foreach ($errors->all() as $error)
                document.getElementById( "{{str_replace('The ','',str_replace(' field is required.', '', $error)) }}").style="border: 0.3vw  solid red";
  @endforeach
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