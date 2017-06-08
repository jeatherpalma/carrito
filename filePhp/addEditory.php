<?php 

  require_once 'loginDatabase.php';
   $nombre = utf8_encode($_POST['nombre']);


   
   $sql = "INSERT INTO editorial(nombre) VALUES('$nombre')";

   $resultado = $conn->query($sql);
   if($resultado){
		echo ('success');
   }else{
   	  echo ('error');
   }
   	
    $conn->close();

 ?>