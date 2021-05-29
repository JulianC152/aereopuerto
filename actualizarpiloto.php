<?php
	//try{
	include("conectarbd.php");
	$Conectarbd = Conectar();
	$Valores = "id_piloto= '".$_POST['idpiloto']."',nombre='".$_POST['nomp']."',anos_experiencia='".$_POST['añose']."',n_licencia='".$_POST['numli']."',direccion='".$_POST['direc']."',nacionalidad='".$_POST['nacion']."'"; //Valores a modificar
	//se hace un Update con los nuevos valores
	$Query = "UPDATE piloto SET ".$Valores." WHERE id_piloto='".$_POST['idpiloto']."'";
	$result = $Conectarbd->prepare($Query);
	$result->execute();
	//var_dump($result);
	//die;
	/*echo $result->rowCount() . " records UPDATED successfully";
	header('Location: pilotos.php');
    }
		catch(PDOException $e)
		
    {
    echo $Query . "<br>" . $e->getMessage();
    }

	$Conectarbd = null;*/

	if($result ) //Si se modifica con exito
		header('Location: pilotos.php');	
	else
	{ 
		var_dump($Query);
		exit;
	}

	//$Conectarbd = null;
?>