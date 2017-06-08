<?php 
    require_once 'loginDatabase.php';
    
    $usuario = $_GET['email'];
    
    
    $conn = new mysqli($localhost, $username, $password, $database);
    if($conn->connect_error){
    	die($conn->connect_error);
    }

    $query = "DELETE FROM user WHERE email = '$usuario'";
    $result = $conn->query($query);
    
    if(!$result){
        die($conn->error);
    }
    header("Location:index.php");

       
?>