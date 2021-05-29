<?php
include("conectarbd.php");
?>

<!DOCTYPE html> 

<html lang = "es">
	<head>
		<meta charset = "utf-8">
		<meta name="description" content="Ejemplo de HTML5" > <!--para el buscador-->
		<link rel="stylesheet" type="text/css" href="estilos.css">
		<title> PC Logic </title> 
		<link rel="shortcut icon" type="img/png" href="images/logo.ico">
		<script src="mventas.js"></script>
	</head>
	<body>
		<header>
			<h1 id = "TituloP"> PC LOGIC </h1><!--Titulo de la pagina -->
			<img class= "imgtitulo" src="images/logo2.png">
		</header>
			<?php
				$conectarbd = Conectar();
				$Query = "SELECT id_tipoc, tipo FROM tipo_cliente";
				$results = $conectarbd->query($Query);
				$Registro = $results->fetch(PDO::FETCH_ASSOC);
				$Query = null; // obligado para cerrar la conexión
				$conectarbd = null;//se cierra la conexión a la base de datos
			?>
		<form id = "login"  action = "actualizartipoc.php" method = "post"  name="actualizartipoc">		<!--Formulario para el inicio de sesion -->
			<section id = "blocklogin2">
				<ul id = lis1>

					<div class = "edit">
						<label class = "subtitulos"> Id Tipo Cliente</label>
						<input class = "cajacorreo" type = "" name = "idtipoc" value="<?php echo $reg['id_tipoc'] ?>" readonly> <!--Caja de texto para ingresar el usuario -->
					</div>

					<div class = "edit">
						<label class = "subtitulos"> Modelo</label>
						<select id="mdtipo" name= "tipoc">
	  					<?php
							$Conectarbd = Conectar();
							$Query = "SELECT * FROM tipo_clientes ORDER BY tipo;";
							$Result2 = $Conectarbd->query($Query);
							if($Result2 > 0)
							{ 
								while($Registro2 = $Result2->fetch(PDO::FETCH_ASSOC))
							{ 
							echo "<option value='".$Registro2['id_tipoc']."'>".$Registro2['tipo']."</option>";
							}
								$Result = null;
					 		}
							$Conectarbd = null;
		  				?>
		  					
	  				</select>
	  				<script type="text/javascript">
	  					selecop('mdtipo',<?php echo $reg['idtipo']?>);
	  				</script>
					</div>
				</ul>

				</ul>
					<div>
						<input id="btaceptar" type="submit" name="Aceptar" class="btlogin" value="Aceptar"><!--Boton para ingresar el usuario -->
					</div>
			</section>
		</form>
	</body>
</html>