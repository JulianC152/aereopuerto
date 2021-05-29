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
			<img class= "imgtitulo" src="images/logo.png">
			<li class="subi"><a href="index.php"> VUELOS</a></li>	<!--Barra de tareas -->
			<li class="subi"><a href="pagina1.php">INICIAR SESION</a></li>
			<li class="subi"><a href=""> INICIO </a></li>
		</header>
				<div>
				<p id="tex1" >Agrega Nuevo Mantenimineto</p><!--frase de presentacion -->
				</div>
			<form id = "login"  action = "agregarv.php" method = "post" autocompletar = "off" name="verificarusuario">						<!--Formulario para el inicio de sesion -->
			<section id = "blocklogin2">
				<ul id = lis1>
					<div class = "edit">
						<label class = "subtitulos"> Id Mantenimiento</label>
						<input class = "cajacorreo" type = "" name = "idavion" > <!--Caja de texto para ingresar el usuario -->
					</div>
					<div class = "edit">
						<label class = "subtitulos"> Horas</label>
						<input class = "cajacorreo" type = "" name = "fechaf" autocomplete="off">
					</div>
					<div class = "edit">
						<label class = "subtitulos"> Tipo</label>
						<select id="selechangar" name='idtipo'>
							<?php
								
								$Conectarbd = Conectar();
								$Query = "SELECT * FROM tipo ORDER BY id_tipo;";
								if($Result = $Conectarbd->query($Query))
								{ while($Registro = $Result->fetch(PDO::FETCH_ASSOC))
								{ 
								echo "<option value='".$Registro['id_tipo']."'>".$Registro['modelo']."</option>";
								}
									$Result = null;
					 			}
								$Conectarbd = null;
							?>
						</select>
					</div>
				</ul>
				<ul id="lis2">
					<div class = "edit">
						<label class = "subtitulos"> Fecha</label>
						<input class = "cajacorreo" type = "" name = "fechac" autocomplete="off"><!--Caja de texto para ingresar el usuario -->
					</div>

					<div class = "edit">
						<label class = "subtitulos">Responsable</label>
						<input class = "cajacorreo" type = "" name = "fechaf" autocomplete="off"><!--Caja de texto para ingresar el usuario -->
					</div>
					<div class = "edit">
						<label class = "subtitulos"> Empleado</label>
						<select id="selechangar" name='idhangar'>
							<?php
								
								$Conectarbd = Conectar();
								$Query = "SELECT * FROM Empleado ORDER BY id_empleado;";
								if($Result = $Conectarbd->query($Query))
								{ 
								 while($Registro = $Result->fetch(PDO::FETCH_ASSOC))
								{ 
								 echo "<option value='".$Registro['id_empleado']."'>".$Registro['nombre']."</option>";
								}
									$Result = null;
							  	}
								$Conectarbd = null;

							?>
						</select>
					</div>
				</ul>
					<div>
						<input id="btaceptar" type="submit" name="Aceptar" class="btlogin" value="Aceptar"><!--Boton para ingresar el usuario -->
					</div>

				</section>
			</form>
	</body>