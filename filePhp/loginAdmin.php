<?php  
  session_start();
  require_once 'loginDatabase.php';
  $user = $_POST['usuario'];
  $pass = $_POST['password'];

  if($user){
  if($pass){

     $sql="SELECT * FROM administrador WHERE usuario='$user' and password='$pass'";
     $resultado = $conn->query($sql);
         if($resultado->num_rows>0){
            while ($row=$resultado->fetch_assoc()) {
          $_SESSION['usuario']=$user;
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