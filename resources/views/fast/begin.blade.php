
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Encuesta Seguimiento de Egresados</title>
	
	<!--favicon-->
	<link rel="shortcut icon" type="image/x-icon" href="img/logos/logoPVE-large.png">
	
<!-- scripts-->
<script src="reg.js"></script>
<script src="maximiza2.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"> </script>
<script  language="javascript">
$(window).load(function(){
    $('#myModal').modal('show');
  })
</script>

    <!--CSS-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" href="css/landing.css">
    <link rel="stylesheet" href="css/encuesta.css">
	
	
<!--tipografías-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>

<body>
<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">AVISO DE PRIVACIDAD UNAM</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body text-justify">
El Programa de Vinculación con los Egresados de la Universidad Nacional Autónoma de México (UNAM), con domicilio en Zona Cultural de Ciudad Universitaria, Edificio D, planta baja, Alcaldía Coyoacán, C.P. 04510, en la Ciudad de México, es responsable del tratamiento de sus datos personales para el registro como egresado, difusión de información y generación de estadísticas para identificar, detectar e impulsar el desarrollo de oportunidades para los egresados de la UNAM.<br><br> No se realizarán transferencias de datos personales, salvo aquellas excepciones previstas por la Ley. Podrá ejercer sus derechos ARCO en  la Unidad de Transparencia de la UNAM, o a través de la Plataforma Nacional de Transparencia <br>(<a href='http://www.plataformadetransparencia.org.mx'>http://www.plataformadetransparencia.org.mx/</a>).<br><br>El aviso de privacidad integral se puede consultar en la sección Aviso de Privacidad de nuestro sitio web: <a href='http://www.pveu.unam.mx/avisodeprivacidad'>http://www.pveu.unam.mx/avisodeprivacidad</a>.
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Aceptar</button>
        </div>
        
      </div>
    </div>
  </div>

    <!--CABECERA/HEADER-->
    <div class="cabecera">
        <div class="logo">
            <a class=logoUNAM href="https://www.unam.mx/"> <img src="img/logos/logoUNAM-large-azul.png"> </a>

            <a class=lovoPVE href="https://www.pveu.unam.mx/"> <img src="img/logos/logoPVE-large.png"> </a>
        </div>

        <div class="subtitulo2 ">
            <p>Secretaría General</p>
        </div>
    </div>

    <!--INFORMACIÓN DE BIENVENIDA-->
<div class="main">
    <div class="izquierda">
    <div class="info">
        <p class="subtitulo3">
            TODAS LAS CARRERAS Y GENERACIONES
        </p>
        <br><br><br>
        <p class="texto2">
            Solicitamos su apoyo para contestar el siguiente cuestionario que tiene como propósito conocer:
            <br><br>
            <ol>
                <li>
                    Su <span style="color: #e6af2b">opinión</span> sobre los beneficios que ha obtenido con su formación profesional
                </li>
                <li>
                    Sus <span style="color: #e6af2b">expectativas</span> al incorporarse al campo ocupacional de su profesión
                </li>
                <li>
                    Su grado de <span style="color: #e6af2b">satisfacción</span> con la preparación que recibió en la UNAM
                </li>
            </ol>
        </p>
    </div>

        <!--CARDS PROPÓSITOS-->

    <div class="propositos">
        <img class="card" src="img/gráficos/pag-encuesta-1.png">

        <img class="card" src="img/gráficos/pag-encuesta-2.png">

        <img class="card" src="img/gráficos/pag-encuesta-3.png">
    </div>
    </div>


<div class="derecha">

        <!--CUADRO DE INICIAR ENCUESTA-->
    <div class="iniciar">
        <p class="texto4">
            <b>DURACIÓN APROXIMADA: 18 MINUTOS</b>
        </p>
        <br>
        <p class="texto4">
            PARA GENERACIONES QUE INGRESARON ANTES DE 1999 SE ANTEPONE UN <b>"0"</b> EN EL NÚMERO DE CUENTA
        </p>
        <br>

        <form action="">
            <ul>
                <li>
                    <label>Número de Cuenta:</label>
                    <input type="number" id="numeroCuenta" name="nc"/>
                </li>
                <li>
                    <button type="submit">Iniciar encuesta</button>
                </li>
            </ul>
        </form>
        <br>
        <p class="texto8">
            <b>Preferentemente utilizar Google Chrome</b>
        </p>
    </div>

</div>
</div>
<!--AVISO DE PRIVACIDAD-->
<div class="aviso">
    <p class="texto4">
            LA INFORMACIÓN QUE PROPORCIONE SERÁ ESTRICTAMENTE CONFIDENCIAL Y SÓLO SE UTILIZARÁ CON FINES ESTADÍSTICOS.
    </p>

    <div class="botonAviso">
        <p class="texto7">IMPORTANTE</p>
        <a href="https://www.pveu.unam.mx/aviso-de-privacidad.php">Aviso de Privacidad</a>
    </div>
</div>

</body>
