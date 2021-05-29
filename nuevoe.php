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
				<div>
				<p id="tex1" >Agrega nuevo  Empleado</p><!--frase de presentacion -->
			</div>
			<form id = "login"  action = "agregare.php" method = "post" autocompletar = "off" name="verificarusuario">						<!--Formulario para el inicio de sesion -->
			<section id = "blocklogin2">
				<ul id = lis1>
					<div class = "edit">
						<label class = "subtitulos"> Id Empleado</label>
						<input class = "cajacorreo" type = "" name = "idemple" autocomplete="off"> <!--Caja de texto para ingresar el usuario -->
					</div>

					<div class = "edit">
						<label class = "subtitulos"> Nombre</label>
						<input class = "cajacorreo" type = "" name = "nome" autocomplete="off"><!--Caja de texto para ingresar la contraseña -->
					</div>

					<div class = "edit">
						<label class = "subtitulos"> Salario</label>
						<input class = "cajacorreo" type = "" name = "salario" autocomplete="off"><!--Caja de texto para ingresar el usuario -->
					</div>
					<div class = "edit">
						<label class = "subtitulos"> Direccion</label>
						<input class = "cajacorreo" type = "" name = "direc" autocomplete="off"><!--Caja de texto para ingresar el usuario -->
					</div>
				</ul>
				<ul id="lis2">
					<div class = "edit">
						<label class = "subtitulos"> Turno</label>
						<input class = "cajacorreo" type = "" name = "turno" autocomplete="off"><!--Caja de texto para ingresar el usuario -->
					</div>

					<div class = "edit">
						<label class = "subtitulos"> Identificacion</label>
						<input class = "cajacorreo" type = "" name = "identi" autocomplete="off"><!--Caja de texto para ingresar el usuario -->
					</div>

					<div class = "edit">
						<label class = "subtitulos"> Fecha Contrato</label>
						<input class = "cajacorreo" type = "" name = "fechac" autocomplete="off"><!--Caja de texto para ingresar el usuario -->
					</div>
				</ul>
					<div>
						<input id="btaceptar" type="submit" name="Aceptar" class="btlogin" value="Aceptar"><!--Boton para ingresar el usuario -->
					</div>
				</section>
			</form>