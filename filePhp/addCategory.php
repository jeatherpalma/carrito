<?php 

  require_once 'loginDatabase.php';
  $tipo = utf8_encode($_POST['tipo']);
  $host='files.000webhost.com';
  $user='booksmex';
  $pass='loweronedzr1';

   
   $sql = "INSERT INTO categorias(Tipo) VALUES('$tipo')";

   $resultado = $conn->query($sql);
   if($resultado){
		  $coneccion = ftp_connect($host) or die("Cannot ogin");
      $login = ftp_login($coneccion,$user,$pass);
  
        if((!$coneccion) && (!$login)){
          echo ('error');
        }else{
            if (ftp_mkdir($coneccion, "/public_html/img/categorias/".strtolower(utf8_encode($tipo)))) {
               echo ('success');
              } else {
               echo ('error');
              }
        }
        ftp_close($coneccion);

   }else{
   	  echo ('error');
   }
   	
    $conn->close();


 ?>