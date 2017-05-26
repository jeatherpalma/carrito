<?php 
   require_once '../loginDatabase.php';
   $nombre = $_POST['nombre'];
   $apellido = $_POST['apellido'];
   $nacionalidad = $_POST['nacionalidad'];

   
   $sql = "INSERT INTO autor(nombre, Apellido, Nacionalidad) VALUES('$nombre','$apellido','$nacionalidad')";

   $resultado = $conn->query($sql);
   if($resultado){

   }else{
   	
   }

s
 ?>