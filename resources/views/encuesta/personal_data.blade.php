
  
        <table class="table text-lg personal" >
          <tr>
          <td style="padding: 0.1vw" colspan="{{5 + $Telefonos->count()}}">
          <div class="row">
            <div class="col"><a class="btn" href="{{route('edit_20',[$Encuesta->registro,'A'])}}" id='Abtn'> <div id='Atxt'>Seccion A</div></a></div>
            <div class="col"><a class="btn"  href="{{route('edit_20',[$Encuesta->registro,'E'])}}" id='Ebtn'><div id='Etxt'>Seccion E</div></a></div>
            <div class="col"><a class="btn"  href="{{route('edit_20',[$Encuesta->registro,'F'])}}" id='Fbtn'><div id='Ftxt'>Seccion F</div></a></div>
            <div class="col"><a  class="btn" href="{{route('edit_20',[$Encuesta->registro,'C'])}}" id='Cbtn'><div id='Ctxt'>Seccion C</div></a></div>
            <div class="col"><a  class="btn" href="{{route('edit_20',[$Encuesta->registro,'D'])}}" id='Dbtn'><div id='Dtxt'>Seccion D</div></a></div>
            <div class="col"><a class="btn"  href="{{route('edit_20',[$Encuesta->registro,'G'])}}" id='Gbtn'><div id='Gtxt'>Seccion G</div></a> </div>
          </div>
        </td>
        <td colspan="4">
          @if($Encuesta->completed==1)
          <a href="{{route('terminar',$Encuesta->registro)}}"></a>
        <button   type="button"  style="background-color:{{Auth::user()->color}} ; color:white; ">
<center><i class="fas fa-right-arrow fa-lg"></i>   Salir </center>
  </button>
  @else
  Encuesta de seguimiento 2020
  @endif
        </td>
          </tr>
          <tr>
            <th>Egresad@: </th>
            <td> {{$Egresado->nombre}} {{$Egresado->paterno}} {{$Egresado->materno}} </td>
            <th>Numero C:</th><td> {{$Egresado->cuenta}}</td>
            <th> Telefonos: <a href="{{route('agregar_telefono',[$Egresado->cuenta,$Egresado->carrera,$Encuesta->registro])}}">  <button class="btn btn-mb2" style="background-color:{{Auth::user()->color}} ; color:white; font-size:0.9vw"> <i class="fas fa-plus-circle"></i>&nbsp; Nuevo  </button></a></th>
              @foreach($Telefonos as $t)
              <td> <a href="{{route('editar_telefono',[$t->id,$Egresado->carrera,$Encuesta->registro])}}">{{$t->telefono}} </a></td>
              @endforeach
            <th>Promedio:</th> <td> @if($Egresado->promedio>10) {{$Egresado->promedio /100}} @else {{$Egresado->promedio}} @endif</td>
            <th>fec. nac.:</th> <td>{{$Egresado->fec_nac}}</td>
          </tr>
          <tr>
          <th>Carrera:</th><td > {{$Carrera}}  </td> 
          <th>Plantel:</th><td colspan="{{$Telefonos->count() +2}}"> {{$Plantel}}</td> 
          <th>Sexo:</th> <td>{{$Egresado->sexo}}</td>
          <th>Bach::</th> <td>{{$Egresado->bach}}</td>
          </tr>
          
         </table>

         
        <br>

  