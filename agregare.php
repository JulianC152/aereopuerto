<?php
	include ("conectarbd.php");
	$conectarbd = conectar();

	$valores = "'".$_POST['idemple']."','".$_POST['nome']."','".$_POST['salario']."','".$_POST['direc']."','".$_POST['turno']."','".$_POST['identi']."','".$_POST['fechac']."'";
	$identificador =  "'".$_POST['idpiloto']."'";
	$stmt = $conectarbd->prepare("SELECT id_empleado from empleado where id_empleado = $identificador");
	$stmt->execute([$identificador]);
	$userExists = $stmt->fetchColumn();
	if(!$userExists)
	{
	$query = "INSERT INTO empleado(id_empleado,nombre,salario,direccion,turno,identificacion,fecha_contrato)
	VALUES (".$valores.")";
	if($exito = $conectarbd->query($query))
		header('location: empleados.php');
	}
	else
	{
		echo"<script>alert('El Usuario ya existe'); window.location='nuevoe.php';</script>";
		exit;
	}
	$conectarbd = null;
?>