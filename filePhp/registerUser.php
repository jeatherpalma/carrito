<?php 
    require_once 'loginDatabase.php';
    require_once 'dataUser.php';



   if ($usuario!="" && $contrasena!="" && $nombre!="" ) {
        $sql = "INSERT INTO user (email, contrasena, nombre, apellidos, telefono, fechalta) VALUES ('$usuario', '$contrasena','$nombre', '$apellidos', '$telefono', '$fechaAlta')";
     

        $result = $conn->query($sql);
        if(!$result){
            echo ('error');
            die($conn->error);
        }else{
            echo ('success');
        }
   }else{
        echo ('error');
   }
    $conn->close();

 ?>