<!DOCTYPE html> 
<?php
include ("conectarbd.php");
?>
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
			<img class= "imgtitulo" src="images/logo.png">	<!--Barra de tareas -->
			<li class="subi"><a href="pagina1.php">INICIAR SESION</a></li>
			<li class="subi"><a href=""> INICIO </a></li>
		</header>
			<div>
				<p id="tex1" >BIENVENIDO</p><!--frase de presentacion -->
			</div>
		<section id = "menuc">
			<ul class="main">
			<input class="btmenu" type="submit" onclick = "location='aviones.php'" value="AVION">
			<input class="btmenu" type="submit" onclick = "location='Mantenimientos.php'" value="MANTENIMIENTOS">
			<input class="btmenu" type="submit" onclick = "location='hangares.php'" value="HANGARES">
			<input class="btmenu" type="submit" onclick = "location='pilotos.php'" value="PILOTOS">
			</ul>
			<ul class="main2">
			<input class="btmenu" type="submit" onclick = "location='propietarios.php'" value="PROPIETARIO">
			<input class="btmenu" type="submit" onclick = "location='vistas.php'" value="PILOTOS APTO">
			<input class="btmenu" type="submit" onclick = "location='empleados.php'" value="EMPLEADOS">
			<input class="btmenu" type="submit" onclick = "location='vista2.php'" value="ANTIGUEDAD AVION">
			</ul>
		</section>
	</body>