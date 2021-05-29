<?php
	//try{
	include("conectarbd.php");
	$Conectarbd = Conectar();
	$Valores = "Id_avion= '".$_POST['idavion']."',serial_caja_N='".$_POST['cajaN']."',matricula='".$_POST['matric']."',tipo='"; //Valores a modificar
	$Valores = $Valores.$_POST['idmodel']."',fecha_compra='".$_POST['fechac']."',fecha_fabricacion='".$_POST['fechaf']."', hangar ='";
	$Valores = $Valores.$_POST['idlocal']."'";
	//se hace un Update con los nuevos valores
	$Query = "UPDATE avion SET ".$Valores." WHERE Id_avion='".$_POST['idavion']."'";
	if($Exito = $Conectarbd->query($Query)) //Si se modifica con exito
		header('Location: aviones.php');	
	else
	{ 
		var_dump($Query);
		exit;
	}

	//$Conectarbd = null;
?>