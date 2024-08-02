<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/iconofinal.png" type="image/x-icon">
  <title>Contacto</title>
  <link rel="stylesheet" href="CSS/bootstrap.min.css">
  <link rel="stylesheet" href="CSS/main.css">
  <link rel="stylesheet" href="JS/bootstrap.min.js">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Lexend+Deca&family=Neuton:wght@300;400&family=Pacifico&family=Patrick+Hand&family=Roboto+Mono:wght@400;500;700&family=Roboto+Slab:wght@400;500;600;900&family=Roboto:wght@400;500;700&display=swap');
  </style>
</head>

<body>
  <!-----------------------NAV BAR------------------>

  <nav class="navbar navbar-expand-sm" style="background-color: #D7DDD5;">
    <div class="container-fluid ">
      <a class="navbar-brand" href="#"></a>
      <span class="navbar-text fs-3">VALENTINO PIZZA</span>
      <img src="img/icononew.png" alt="" width="85">
      <!--boton que se crea en modo responsive-->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavSupportedContent"
        aria-controls="navbarNavSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <!--colapse compplemento java script-->
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="index.html">INICIO</a></li>
          <li class="nav-item"><a class="nav-link" href="AcercadeNosotros.html">ACERCA DE NOSOTROS</a></li>
          <li class="nav-item"><a class="nav-link" href="Contacto.html">CONTACTO</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-----------------------contacto inicio------------------>
  <div id="historia">
    <div class="content text-center" style="font-family: 'Pacifico', cursive; color: blanchedalmond;">
      <h1>Contacto</h1>
    </div>

  </div>
  <!-----------------------formulario------------------>
  <div id="nuestrahistoria" class="container-fluid ">

    <div class="row">
      <p class="text-center " style="font-family: 'Pacifico', cursive; font-size: 40px;">Contacto y sugerencias
      </p>
      <div class="col-sm">
        <div id="formulario" class="mb-3">
		<?php
			
      $destinatario='guazzettidaiana204@gmail.com'; 
      //destino donde se enviara el correo
			$Nombre=$_POST["nombre"];
			$Apellido=$_POST["apellido"];
			$numero=$_POST["numero"];
			$correo=$_POST["correo"];
			$mensaje=$_POST["mensaje"];
      $valorA=$_POST["valorA"];
      $valorB=$_POST["valorB"];

      $asunto="Mensaje de PizzeriaValentino.com";
      $header="Mensaje enviado por:".$Nombre." ".$Apellido;
			$mensajeCompleto=$mensaje."\nResponder a: ".$correo;

      mail($destinatario, $asunto, $mensajeCompleto, $header);
      echo "Mail enviado exitosamente!<br/>";


					
			echo 'variable nombre es:'.$Nombre.'<br/>';
			echo 'variable mensaje es:'.$mensaje.'<br/>';
			
      $suma=$valorA+$valorB;
      echo 'La suma es igual a: '.$suma.'<br/>';

      $resta=$valorA-$valorB;
      echo 'La resta es igual a: '.$resta.'<br/>';

      $multiplicacion=$valorA*$valorB;
      echo 'La multiplicacion es igual a: '.$multiplicacion.'<br/>';

      $division=$valorA/$valorB;
      echo 'La division es igual a: '.$division.'<br/>';

      $fecha=date("Y / m / d");
      echo "Fecha: ".$fecha;

			?>

            <br><br>


        </div>
      </div>

      <div class="col-sm d-inline-block ">
        <div>
          <p class="mx-5">Redes "@ValentinoPizza"</p>
          <a href=""><img class="mx-5" src="img/instagram.png" alt=""></a>
          <a href=""><img class="mx-5" src="img/facebook.png" alt=""></a>
        </div>

        <div>
          <p class="mx-5">Teléfonos: 4768589/223765543</p>
          <a href=""><img class="mx-5" src="img/llamada-telefonica.png" alt=""></a>
          <a href=""><img class="mx-5" src="img/whatsapp.png" alt=""></a>
        </div>

        <div>
          <p class="mx-5">Dirección (Maps presionando el ícono)</p>
          <a href="https://goo.gl/maps/FgmVXSQEuNynVXw5A"><img class="mx-5" src="img/tienda.png" alt=""></a>

        </div>

        <div>
          <p class="mx-5">Horarios</p>
          <p class="mx-5">lunes a sábados
            12:00–15:00
            19:00–0:00</p>
            
           <p class="mx-5"> domingo
            19:00–0:00</p>

          <a href=""><img class="mx-5" src="img/abierto.png" alt="">
        </div>

      </div>

    </div>
  </div>

  <!-----------------------FOOTER------------------>

  <div id="footer" class="container-fluid p-5">
    <div class="row">

      <div class="col">




      </div>


      <div class="col">

      </div>
    </div>
  </div>

  <!-----------------------JAVA SCRPIT------------------>
  <script src="JS/bootstrap.min.js"></script>
  <script src="JS/popper.min.js"></script>



</body>

</html>