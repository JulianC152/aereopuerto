<?php
	//try{
	include("conectarbd.php");
	$Conectarbd = Conectar();
	$Valores = "id_hangar= '".$_POST['idhangar']."',capacidad='".$_POST['capa']."',localizacion='".$_POST['local']."'"; //Valores a modificar
	//se hace un Update con los nuevos valores
	$Query = "UPDATE hangar SET ".$Valores." WHERE id_hangar='".$_POST['idhangar']."'";
	$result = $Conectarbd->prepare($Query);
	$result->execute();
	if($result ) //Si se modifica con exito
		header('Location: hangares.php');	
	else
	{ 
		var_dump($Query);
		exit;
	}

	//$Conectarbd = null;
?>