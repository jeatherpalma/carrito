<?php  
  require_once '../loginDatabase.php';
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM administrador WHERE usuario = '$username' and password = '$password' ";
  $resultado = $conn->query($sql);

  if($resultado){
  	if($resultado->num_rows > 0){
  		header("Location:http://localhost/carrito/admin/administrador.php");
  	}else{
  		header("Location:http://localhost/carrito/admin/index.php?message=Usuario o contraseña no valido");
  	}

  	
  }else{
  
  }



?>