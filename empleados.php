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
	</header>
		<div id="sideNavigation" class="sidenav">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
 		 	<a href="aviones.php">Avion</a>
  			<a href="mantenimientos.php">Manteniminetos</a>
  			<a href="pilotos.php">Pilotos</a>
  			<a href="propietarios.php">Propietarios</a>
  			<a href="vistas.php">Pilotos Aptos</a>
  			<a href="empleados.php">Empleados</a>
  			<a href="vista2.php">Antiguedad Avion</a>
  			<a href="hangares.php">Hangares</a>
		</div>
 
	<nav class="topnav">
 		<a href="#" onclick="openNav()">
    <svg width="30" height="30" id="icoOpen">
        <path d="M0,5 30,5" stroke="#000" stroke-width="5"/>
        <path d="M0,14 30,14" stroke="#000" stroke-width="5"/>
        <path d="M0,23 30,23" stroke="#000" stroke-width="5"/>
    </svg>
  		</a>
	</nav>
	 <script>
		function openNav() {
		    document.getElementById("sideNavigation").style.width = "250px";
		    document.getElementById("main").style.marginLeft = "250px";
		}
		 
		function closeNav() {
		    document.getElementById("sideNavigation").style.width = "0";
		    document.getElementById("main").style.marginLeft = "0";
		}
	</script>
	<section id = tablap>
		<div id="Titelementos">Lista de Empleados
			<input type="button" onclick="location.href='menu.php'" value="X">
			<br>
			<div id="Addelemento" onclick="location.href='nuevoe.php'">
			 <a href='nuevoe.php'> Agregar </a>
			<img src="images/empleado.ico">
			</div>
		</div>
	
	</body>
	<div id="lista">
		<div id="encaregi">
			<div class="a40"></div>
			<div class="a1">Id Empleado</div>
			<div class="a3">Nombre</div>
			<div class="a4">Salario</div>
			<div class="a5">Turno</div>
			<div class="a6">Identificacion</div>
			<div class="a7">Fecha Contrato</div>
			<div class="a7">Direccion</div>
		</div>
		<div id="regi">
			<?php
				include("conectarbd.php");
				$conectarbd = Conectar();
				$Query = "SELECT * FROM empleado order by id_empleado;";
				if ($results = $conectarbd->query($Query))
				{while ($Registro = $results->fetch(PDO::FETCH_ASSOC))
						{
						echo "<ul>";
							echo "<div class='a40'></div>"; //un espacio de 40px
							echo "<div class='a2'>".$Registro['id_empleado']."</div>"; //campo “id_forma” ancho 100px
							echo "<div class='a3'>".$Registro['nombre']."</div>"; //campo “forma” ancho 160px
							echo "<div class='a4'>".$Registro['salario']."</div>"; //campo “forma” ancho 160px
							echo "<div class='a5'>".$Registro['turno']."</div>"; //campo “forma” ancho 160px
							echo "<div class='a6'>".$Registro['identificacion']."</div>"; //campo “forma” ancho 160px
							echo "<div class='a7'>".$Registro['fecha_contrato']."</div>"; //campo “forma” ancho 160px
							echo "<div class='a7'>".$Registro['direccion']."</div>";
							echo "<div class='a50'>".'<a href="modiemple.php?id_empleado='.$Registro['id_empleado'].'"><img
							src="images/edit.ico"></a></div>'; //opción modificar con variable Php “Formaid=id_forma”
							echo "<div class='a50'>".'<a><img src="images/borrar.ico"></a></div>'; //sin link aún
						echo "</ul>";
						}
					//mysqli_free_result($results); //se libera el objeto $results, para liberar espacio de memoria
				}
				//$Query->closeCursor(); // opcional en MySQL, dependiendo del controlador de base de datos puede ser obligatorio
				$Query = null; // obligado para cerrar la conexión
				$conectarbd = null //se cierra la conexión a la base de datos
			?>
		</div>
	</div>
	</section>