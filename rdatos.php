<!DOCTYPE html> 

<html lang = "es">
	<head>
		<meta charset = "utf-8">
		<meta name="description" content="Ejemplo de HTML5" > <!--para el buscador-->
		<link rel="stylesheet" type="text/css" href="estilos.css">
		<title> Ciudad Blanca </title> 
		<link rel="shortcut icon" type="img/png" href="images/ico1.ico"> 
	</head>
	<body id = "body2">
		<header>
			<h1 id = "TituloP"> Ciudad Blanca </h1><!--Titulo de la pagina -->
			<img class= "imgtitulo" src="images/logo.png">
			<li class="subi"><a href="index.php"> VUELOS</a></li>
			<li class="subi"><a href="pagina1.php">INICIAR SESION</a></li><!--Barra de tareas -->
			<li class="subi"><a href=""> INICIO </a></li>
		</header>
				<p id= "pa2">
				Registra Tu Compañia Aerea
				</p>
		<section id = "formulario">
			<form  enctype="text/plain">
				
				<div class = "registros">
				<label> Identificador del vuelo:</label><input type="text"  size="30" maxlength="50"><br><br>
				</div>
				<br><br>
				<div class = "registros">
				<label> Numero de pasajeros: </label><input type="text"  size="15" maxlength="100">
				</div>
				<br><br>
				<div class = "registros">
				<label> Fecha salida: </label><input type="date" value=""  size="30" maxlength="100">
				</div>
				<br><br>
				<div class = "registros">
				<label> Hora salida: </label><input type="time"  size="15" maxlength="50">
				</div>
				<br><br>
				<div class = "registros">
				<label>Hora Llegada: </label><input type="time"  size="15" maxlength="50">
				</div>
				<br><br>
				<div class = "registros">
				<label> Ciudad de llegada: </label><input type="text"  size="25" maxlength="50">
				</div>
				
				<br><br>
				<div class = "registros">
				<label>Ciudad de Origen: </label><input type="text" size="25" maxlength="50">
				</div>
				<br><br>

				<div class="registros">
				<label>Numero de vuelo:</label> <input type="text" size="10" maxlength="50">
				</div>
				<br><br>

				<tr>
				<div class = "registros">
				
					<label><td>Compañia aerea:</label>

					<br>

					<input type="radio"  value="020"> LATAM

					<br>

					<input type="radio"  value="2040" checked> SATENA
					<br>

					<input type="radio"  value="4060"> AMERICAN AIRLINES

					<br>

					<input type="radio"  value="60100"> AVIANCA</td>

					<br><br>
				</div>
				<div id = "btform">
					 <a href="pagina1.php" class="btlogin">Enviar</a>
					 <a href="rdatos.php" class="btlogin">Borrar</a>
				</div>
				

			</form>
		</section>
	</body>
</html>