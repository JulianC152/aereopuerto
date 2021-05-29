<!DOCTYPE html> 

<html lang = "es">
	<head>
		<meta charset = "utf-8">
		<meta name="description" content="Ejemplo de HTML5" > <!--para el buscador-->
		<link rel="stylesheet" type="text/css" href="estilos.css">
		<title>  Ciudad Blanca </title> 
		<link rel="shortcut icon" type="img/png" href="images/ico1.ico"> 
	</head>
	<body >
	
		<header>
			<h1 id = "TituloP"> Ciudad Blanca </h1><!--Titulo de la pagina -->
			<img class= "imgtitulo" src="images/logo.png">
			<!--<li class="subi"><a href="index.php"> VUELOS</a></li>			<-Barra de tareas ->
			<li class="subi"><a href="pagina1.php">INICIAR SESION</a></li>
			<li class="subi"><a href=""> INICIO </a></li> -->
		</header>
 
		<?php
			include("conectarbd.php");
			$conectarbd = Conectar();
			$Query = "SELECT * FROM Hangar WHERE id_hangar = '".$_GET['id_hangar']."'LIMIT 1";
			$results = $conectarbd->query($Query);
			$reg = $results->fetch(PDO::FETCH_ASSOC);
			$results = null;
			$conectarbd = null;
			  
  		?>
  		<div>
			<p id="tex1" >Modificar Hangar</p><!--frase de presentacion -->
		</div>

		<form id = "login"  action = "actualizarhangar.php" method = "post"  name="actualizarpiloto"><!--Formulario para el inicio de sesion -->
			<section id = "blocklogin3">
				<ul id = lis1>

					<div class = "edit">
						<label class = "subtitulos"> Id Hangar</label>
						<input class = "cajacorreo" type = "" name = "idhangar" value="<?php echo $reg['id_hangar'] ?>" readonly> <!--Caja de texto para ingresar el usuario -->
					</div>

					<div class = "edit">
						<label class = "subtitulos"> Capacidad</label>
						<input class = "cajacorreo" type = "" name = "capa"  value="<?php echo $reg['capacidad'] ?>"><!--Caja de texto para ingresar la contraseña -->
					</div>

					<div class = "edit">
						<label class = "subtitulos"> Localizacion</label>
						<input class = "cajacorreo" type = "" name = "local" value="<?php echo $reg['localizacion'] ?>"><!--Caja de texto para ingresar el usuario -->
					</div>
				</ul>
				
					<div>
						<input id="btaceptar" type="submit" name="Aceptar" class="btlogin" value="Aceptar"><!--Boton para ingresar el usuario -->
					</div>
					
			
	</body>
</html> 