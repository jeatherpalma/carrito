<?php 
$usuario=utf8_encode($_POST['us']);
$pss=utf8_encode($_POST['pss']);

require_once '../loginDatabase.php';

 if($usuario){
 	if($pss){
 		 $cookie_name = "usuario";
		 $sql="SELECT * FROM user WHERE email='$usuario' and contrasena='$pss'";
		 $resultado = $conn->query($sql);
		     if($resultado->num_rows>0){
		       	while ($row=$resultado->fetch_assoc()) {
		       		$cookie_value = $row['email'];
		       		setcookie($cookie_name,$cookie_value,time()+(86400*5),"/");
		       		echo ('success');
		       	}
		     }else{
		     	//agregar aquí si el login no es correcto
		     	echo ('error');
		     }
		    
		    $conn->close();
 	}
 }
 ?>