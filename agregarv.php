<?php
	include ("conectarbd.php");
	$conectarbd = conectar();

	$valores = "'".$_POST['idavion']."','".$_POST['cajan']."','".$_POST['matri']."','".$_POST['fechac']."','".$_POST['fechaf']."','";
	$valores = $valores.$_POST['idtipo']."','".$_POST['idhangar']."'";
	$identificador =  "'".$_POST['idavion']."'";
	$stmt = $conectarbd->prepare("SELECT Id_avion from avion where Id_avion = $identificador");
	$stmt->execute([$identificador]);
	$userExists = $stmt->fetchColumn();
	if(!$userExists)
	{
	$query = "INSERT INTO avion(Id_avion,serial_caja_N,matricula,fecha_compra,fecha_fabricacion,tipo,hangar)
	VALUES (".$valores.")";
	if($exito = $conectarbd->query($query))
		header('location: aviones.php');
	}
	else
	{
		echo"<script>alert('Ya existe'); window.location='aviones.php';</script>";
		exit;
	}
	$conectarbd = null;	
?>