<?php 
    require_once 'loginDatabase.php';
    require_once 'dataUser.php';

   echo "$email";



    $sql = "INSERT INTO user (email, contrasena, nombre, apellidos, telefono, fechalta) VALUES ('$email', '$contrasena','$name', '$apellidos', '$telefono', '$fechaAlta')";
     

    $result = $conn->query($sql);
    if(!$result){
    	die($conn->error);
    }

    /*Función de php que permite comunicarse con la página*/
    header("Location:perfil.php?us=$email");
    $conn->close();

 ?>