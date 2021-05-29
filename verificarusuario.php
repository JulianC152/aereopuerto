<?php
include("conectarbd.php");
  $Conectarbd = conectar();
  $Usuario= $_POST['usuario'];
  $Clave = $_POST['clave'];

  $records = $Conectarbd->prepare("SELECT * FROM usuario WHERE nom_usuario = '".$Usuario."'");
  $records->bindParam('$Usuario', $_POST['usuario']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);

  if((count($results))>0){
      if($_POST['clave'] == $results['clave']){
        mysqli_close($Conectardb);
        header('Location: menu.php');
      }
      else{ mysqli_close($Conectardb);
        header('Location: pagina1.php');
      }
  }
  else
  { mysqli_close($Conectardb);
  header('Location: pagina1.php');
  }
?>