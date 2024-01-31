<!-- colorear pestañas  -->
<script>
function hide_all(){
    sections=['A','C','D','E','F','G'];
   for (let i = 0; i < sections.length; i++) {
     document.getElementById(sections[i]+'btn').style.backgroundColor="#ffffff";
     document.getElementById(sections[i]+'txt').style.color="rgb(23,23,23)";
    }
  }
  function fill_completed(sec){
  
  document.getElementById(sec+'btn').style.backgroundColor="#3eb03e";
  document.getElementById(sec+'txt').style.color="white";
  document.getElementById(sec+'txt').innerHTML='<i class="fas fa-check-circle" aria-hidden="true"></i> Seccion '+sec;
}
  function unhide(sec){
    hide_all();
    @if($Encuesta->sec_a==1)
    fill_completed('A');
    @endif
    @if($Encuesta->sec_c==1)
    fill_completed('C');
    @endif
    @if($Encuesta->sec_d==1)
    fill_completed('D');
    @endif
    @if($Encuesta->sec_e==1)
    fill_completed('E');
    @endif
    @if($Encuesta->sec_f==1)
    fill_completed('F');
    @endif
    @if($Encuesta->sec_g==1)
    fill_completed('G');
    @endif
    
    document.getElementById(sec+'btn').style.backgroundColor="{{Auth::user()->color}}";
    console.log(document.getElementById(sec+'btn').style.color);
    document.getElementById(sec+'txt').style.color="white";
// pageScroll();  
}
  
</script>
<script>
    
 function bloquear(reactivo,options,reactivosPorCerrar){

console.log('reactivo: '+reactivo)
var val=document.getElementById(reactivo);
console.log (val.value);
console.log(options);
console.log(options.includes(parseInt(val.value)));
if(options.includes(parseInt(val.value))){
 
  reactivosPorCerrar.forEach(ocultar);
}else{
  reactivosPorCerrar.forEach(visibilizar);
}

}


function ocultar(item){
console.log('reactivo a ocultar: '+item.id);

document.getElementById(item.id).hidden="hidden";
document.getElementById(item.id).value=0;
console.log(document.getElementById(item.id).value);
}

function visibilizar(item){
  console.log(document.getElementById(item.id).value);
  if(document.getElementById(item.id).value==0){
    console.log('xd');
document.getElementById(item.id).hidden="";
document.getElementById(item.id).value="";}
}
</script>