<?php 

  require_once 'loginDatabase.php';
   $tipo = utf8_encode($_POST['tipo']);


   
   $sql = "INSERT INTO categorias(Tipo) VALUES('$tipo')";

   $resultado = $conn->query($sql);
   if($resultado){
		echo ('success');
   }else{
   	  echo ('error');
   }
   	
    $conn->close();


 ?>