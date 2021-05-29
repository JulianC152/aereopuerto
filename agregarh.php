<?php
	include ("conectarbd.php");
	$conectarbd = conectar();

	$valores = "'".$_POST['idhangar']."','".$_POST['capa']."','".$_POST['local']."'";
	$identificador =  "'".$_POST['idhangar']."'";
	$stmt = $conectarbd->prepare("SELECT id_hangar from hangar where id_hangar = $identificador");
	$stmt->execute([$identificador]);
	$userExists = $stmt->fetchColumn();
	if(!$userExists)
	{
	$query = "INSERT INTO hangar(id_hangar,capacidad,localizacion)
	VALUES (".$valores.")";
	if($exito = $conectarbd->query($query))
		header('location: hangares.php');
	}
	else
	{
		echo"<script>alert('El Usuario ya existe'); window.location='nuevoh.php';</script>";
		exit;
	}
	$conectarbd = null;
?>