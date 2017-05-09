<?php 
//Guardar cookies
setcookie("usuario");
setcookie("contra");

$usuario=utf8_encode($_POST['us']);
$pss=utf8_encode($_POST['pss']);

require_once 'loginDatabase.php';

$sql="SELECT * FROM user WHERE email='$usuario' and contrasena='$pss'";

 $resultado = $conn->query($sql);
 if($resultado){
   		session_start();
		if($resultado->num_rows > 0){
			while ($row=$resultado->fetch_assoc()){
				setcookie("usuario",$row['email'], time()+3600*24*2,"/","");
				setcookie("contra",$row['contrasena'], time()+3600*24*2,"/","");
				
			}
			session_start();
			$_SESSION['autentificado'] = "SI";
			header("Location:catalago.php");
			exit;
 		}
		
        header("Location:catalago.php");
  }else{
    	header("Location:index.php?errorus=si");
       }
    
    $enlace->close();
 ?>