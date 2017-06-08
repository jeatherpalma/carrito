<?php 

  require_once 'loginDatabase.php';

   $us=utf8_encode($_POST['us']);
   $name=utf8_encode($_POST['name']);
   $apellidos = utf8_encode($_POST['apellido']);
   $telefono = utf8_encode($_POST['tel']);
   $usOriginal = utf8_encode($_POST['usOriginal']);

   
   
   $sql = "UPDATE user SET email = '$us',nombre = '$name',apellidos = '$apellidos' , telefono = '$telefono' WHERE email = '$usOriginal'";
   $resultado = $conn->query($sql);
   if($resultado){
   	 header("Location:perfil.php?us=$us&actual=Cambios guardados");
   	 $conn->close();
   }else{
   	die($conn->error);
   }
   

 ?>