<link href="https://fonts.googleapis.com/css?family=Montserrat:400" rel="stylesheet">
<style>
  :root {
   @if(Auth::user()->dark_mode==1) 
   --fuente: white;
   --fondo: black;
    @else
    --fuente: black;
    --fondo: white;
    @endif;
}
  #cuerpo{
    scroll-behavior: smooth;
    /* @if(Auth::user()->dark_mode==1) 
    background-color: #090900;
    @else
    background-color: #FAFAFA;
    @endif  */
    background-color: #FFFF00;
  }
  .content-wrapper {
   
    @if(Auth::user()->dark_mode==1) 
    background-color: #090900;
    color:white;
    @else
    background-color: #FAFAFA;
    @endif
    font-weight: bold;
  
 }
  
  table.encuesta_table{
    font-family: 'Montserrat';
    tr:nth-child(odd) {
      @if(Auth::user()->dark_mode==1) 
    background-color: #49494949;
    @else
    background-color: #a3b1c7;
    @endif
           
        }
    td{
      text-align: center;
      padding-right: 0.5vw;
      padding-left: 0.5vw;
    }
    
  }

  table.personal{ 
    th {
    font-size: 90%;
    background-color: {{Auth::user()->color}} ;
    color:white;
    border: 0.1vw solid;
    border-color: white;
}
    td {
    font-size: 90%;
    font-weight:bolder;
    background-color: white;
    color: var(--fuente);
    background-color: var(--fondo);
    border: 0.2vw solid;
    border-color: {{Auth::user()->color}};
}
    font-family: 'Montserrat';
    font-weight:bold;
    border: 0.2vw solid;
    border-color: {{Auth::user()->color}};
   
   
}
#datos{
    position: sticky;
    z-index: 1;
    top:0;
    padding:-0.1vw;
    color: var(--fuente);
  background-color: var(--fondo);
   
}
</style>
<style>


  .Scroll {
  height:600px;
  overflow-y: scroll;
  scroll-behavior: smooth;
}
.form-error {
color:red;
border: 2px solid;
border-color: red;
}
.reactivo{
  text-align: center;
  padding: 2.2vw;
  font-weight: bold;
  font-size: 1.4vw;
  color: var(--fuente);
  text-shadow: gray,
  font-family: 'Montserrat',
 */
}

.largo{
  padding-left: 20.2vw;
  display:flex;
  width: 60vw; 
  overflow: hidden;
}
.texto{
  font-size:1.4vw;
  color: var(--fuente);
  background-color: var(--fondo);
  width:90%;
}
.fecha{
  font-size:1.4vw;
  color: var(--fuente);
  background-color: var(--fondo);
}
.select{
  font-size:1.4vw;
  color: var(--fuente);
  background-color: var(--fondo);
  max-width: 15.0vw;
}
</style>
<style>
  .fixed {
    position:fixed;
    bottom:0;
    right:0;
  background: {{Auth::user()->color}};
  width: 10.0vw;
  height: 6.0vw;
  display: flex;
  justify-content: center;
  align-items: center;
  box-shadow: 0 0 6px #000;
  color: #fff;
}


</style>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.top-container {
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
}

.header {
  padding: 10px 16px;
  background: #555;
  color: #f1f1f1;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 102px;
}
</style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<style>
  
.swal2-popup {
    font-size: 18px !important;
}
</style>