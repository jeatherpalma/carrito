<?php 
   require_once '../loginDatabase.php';
   $nombre = $_POST['nombre'];
   $apellido = $_POST['apellido'];
   

   
   $sql = "INSERT INTO autor(nombre, Apellido) VALUES('$nombre','$apellido')";

   $resultado = $conn->query($sql);
   if($resultado){

   }else{
   	
   }


 ?>