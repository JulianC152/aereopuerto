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
			<li class="subi"><a href="index.php"> VUELOS</a></li>	<!--Barra de tareas -->
			<li class="subi"><a href="pagina1.php">INICIAR SESION</a></li>
			<li class="subi"><a href=""> INICIO </a></li>
		</header>
		<div class = "contenedorp">
			<div>
				<p id="tex1" >Bienvenidos, Aeropuerto <br> Ciudad Blanca</p></br><!--frase de presentacion -->
			</div>
			<form id = "login"  action = "verificarusuario.php" method = "post" autocompletar = "off" name="verificarusuario">						<!--Formulario para el inicio de sesion -->
				<section id = "blocklogin">
					<div id = "sub1">
						<label class = "subtitulos"> Usuario</label>
					</div>
					<div class = "cajastexto">
						<input class = "cajacorreo" type = "email" name = "usuario" placeholder = "Correo, Usuario"><!--Caja de texto para ingresar el usuario -->
					</div>
					<div id = "sub2">
						<label class = "subtitulos"> Contraseña</label>
					</div>
					<div class = "cajastexto">
						<input class = "cajacorreo" type = "password" name = "clave" txminleght = "6"><!--Caja de texto para ingresar la contraseña -->
					</div>
					<div>
						<p id = "sub3"> ¿Aún no tienes cuenta? <a href="registrar.php"> Puedes crearla ahora </a></p><!--Enlace para ir a la pagina de registro de usuario -->
					</div>
					<div >
						 <input type="submit" name="Ingresar" class="btlogin"><!--Boton para ingresar el usuario -->
					</div>
				</section>
			</form>

		</div>
	</body>

	</html>