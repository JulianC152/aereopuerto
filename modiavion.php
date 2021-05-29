<!DOCTYPE html> 
<?php
include("conectarbd.php");
?>
<html lang = "es">
	<head>
		<meta charset = "utf-8">
		<meta name="description" content="Ejemplo de HTML5" > <!--para el buscador-->
		<link rel="stylesheet" type="text/css" href="estilos.css">
		<title>  Ciudad Blanca </title> 
		<link rel="shortcut icon" type="img/png" href="images/ico1.ico"> 
		<script src="funciones.js"></script>
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
			$Id = $_GET['id_avion'];
			$conectarbd = Conectar();
			$Query = "SELECT  avion.Id_avion as idavion, avion.serial_caja_N as serialcn, avion.matricula as matri,avion.fecha_compra as fechac,avion.fecha_fabricacion as fechaf, hangar.localizacion as hlocal, tipo.modelo as model, tipo.id_tipo as idtipo, hangar.id_hangar as idhangar
				FROM avion inner join hangar on hangar.id_hangar=avion.hangar
				inner join tipo on tipo.id_tipo=avion.tipo 
				WHERE avion.hangar = hangar.id_hangar and avion.tipo = tipo.id_tipo and avion.Id_avion = '".$Id."' LIMIT 1";
			$results = $conectarbd->query($Query);
			$reg = $results->fetch(PDO::FETCH_ASSOC);
			$results = null;
			$conectarbd = null;	  
  		?>
		<form id = "login"  action = "actualizaravion.php" method = "post"  name="actualizarpiloto">						<!--Formulario para el inicio de sesion -->
			<section id = "blocklogin2">
				<ul id = lis1>

					<div class = "edit">
						<label class = "subtitulos"> Id Avion</label>
						<input class = "cajacorreo" type = "" name = "idavion" value="<?php echo $reg['idavion'] ?>" readonly> <!--Caja de texto para ingresar el usuario -->
					</div>

					<div class = "edit">
						<label class = "subtitulos"> Serial Caja Negra</label>
						<input class = "cajacorreo" type = "" name = "cajaN"  value="<?php echo $reg['serialcn'] ?>"><!--Caja de texto para ingresar la contraseña -->
					</div>

					<div class = "edit">
						<label class = "subtitulos"> Matricula</label>
						<input class = "cajacorreo" type = "" name = "matric" value="<?php echo $reg['matri'] ?>"><!--Caja de texto para ingresar el usuario -->
					</div>
					<div class = "edit">
						<label class = "subtitulos"> Modelo</label>
						<select id="mdtipo" name= "idmodel">
	  					<?php
							$Conectarbd = Conectar();
							$Query = "SELECT * FROM tipo ORDER BY modelo;";
							$Result2 = $Conectarbd->query($Query);
							if($Result2 > 0)
							{ 
								while($Registro2 = $Result2->fetch(PDO::FETCH_ASSOC))
							{ 
							echo "<option value='".$Registro2['id_tipo']."'>".$Registro2['modelo']."</option>";
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
				<ul id="lis2">
					<div class = "edit">
						<label class = "subtitulos"> Fecha de compra </label>
						<input class = "cajacorreo" type = "date" name = "fechac" value="<?php echo $reg['fechac'] ?>"><!--Caja de texto para ingresar el usuario -->
					</div>

					<div class = "edit">
						<label class = "subtitulos"> Fecha de Fabricacion</label>
						<input class = "cajacorreo" type = "date" name = "fechaf" value="<?php echo $reg['fechaf'] ?>"><!--Caja de texto para ingresar el usuario -->
					</div>

					<div class = "edit">
						<label class = "subtitulos"> Hangar</label>
						<select id="mdtipo2" name= "idlocal">
	  					<?php
							$Conectarbd = Conectar();
							$Query = "SELECT * FROM hangar ORDER BY localizacion;";
							$Result2 = $Conectarbd->query($Query);
							if($Result2 > 0)
							{ 
								while($Registro2 = $Result2->fetch(PDO::FETCH_ASSOC))
							{ 
							echo "<option value='".$Registro2['id_hangar']."'>".$Registro2['localizacion']."</option>";
							}
								$Result = null;
					 		}
							$Conectarbd = null;
		  				?>
		  					
	  				</select>
	  				<script type="text/javascript">
	  					selecop('mdtipo2',<?php echo $reg['idhangar']?>);
	  				</script>
					</div>

				</ul>
					<div>
						<input id="btaceptar" type="submit" name="Aceptar" class="btlogin" value="Aceptar"><!--Boton para ingresar el usuario -->
					</div>
					
			
	</body>
</html> 