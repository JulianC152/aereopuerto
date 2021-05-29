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
			<li class="subi"><a href="pagina1.php">INICIAR SESION</a></li>
			<li class="subi"><a href=""> INICIO </a></li>
		</header>
				<div>
				<p id="tex1" >Agrega nuevo Avion</p><!--frase de presentacion -->
				</div>
			<form id = "login"  action = "agregarv.php" method = "post" autocompletar = "off" name="verificarusuario">						<!--Formulario para el inicio de sesion -->
			<section id = "blocklogin2">
				<ul id = lis1>
					<div class = "edit">
						<label class = "subtitulos"> Id Avion</label>
						<input class = "cajacorreo" type = "" name = "idavion" > <!--Caja de texto para ingresar el usuario -->
					</div>

					<div class = "edit">
						<label class = "subtitulos"> Serial Caja Negra	</label>
						<input class = "cajacorreo" type = "" name = "cajan" autocomplete="off"><!--Caja de texto para ingresar la contraseña -->
					</div>

					<div class = "edit">
						<label class = "subtitulos"> Matricula</label>
						<input class = "cajacorreo" type = "" name = "matri" autocomplete="off"><!--Caja de texto para ingresar el usuario -->
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
						<label class = "subtitulos"> Fecha de Compra</label>
						<input class = "cajacorreo" type = "date" name = "fechac" autocomplete="off"><!--Caja de texto para ingresar el usuario -->
					</div>

					<div class = "edit">
						<label class = "subtitulos"> Fecha de Fabricacion</label>
						<input class = "cajacorreo" type = "date" name = "fechaf" autocomplete="off"><!--Caja de texto para ingresar el usuario -->
					</div>
					<div class = "edit">
						<label class = "subtitulos"> Hangar</label>
						<select id="selechangar" name='idhangar'>
							<?php
								
								$Conectarbd = Conectar();
								$Query = "SELECT * FROM hangar ORDER BY id_hangar;";
								if($Result = $Conectarbd->query($Query))
								{ 
								 while($Registro = $Result->fetch(PDO::FETCH_ASSOC))
								{ 
								 echo "<option value='".$Registro['id_hangar']."'>".$Registro['localizacion']."</option>";
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