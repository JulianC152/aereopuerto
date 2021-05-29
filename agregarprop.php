<?php
	include ("conectarbd.php");
	$conectarbd = conectar();

	$valores = "'".$_POST['idpiloto']."','".$_POST['nomp']."','".$_POST['añose']."','".$_POST['numli']."','".$_POST['direc']."','".$_POST['nacion']."'";
	$identificador =  "'".$_POST['idpiloto']."'";
	$stmt = $conectarbd->prepare("SELECT id_piloto from piloto where id_piloto = $identificador");
	$stmt->execute([$identificador]);
	$userExists = $stmt->fetchColumn();
	if(!$userExists)
	{
	$query = "INSERT INTO piloto(id_piloto,nombre,anos_experiencia,n_licencia,direccion,nacionalidad)
	VALUES (".$valores.")";
	if($exito = $conectarbd->query($query))
		header('location: pilotos.php');
	}
	else
	{
		echo"<script>alert('El Usuario ya existe'); window.location='nuevop.php';</script>";
		exit;
	}
	$conectarbd = null;
?>