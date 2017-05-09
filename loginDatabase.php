<?php 
   $hostname = 'localhost';
   $username = 'pwe2017';
   $password = 'qwertyuiop';
   $database = 'pwe2017';

   $conn = new mysqli($localhost, $username, $password, $database);
    if($conn->connect_error){
    	die($conn->connect_error);
    }
    
 ?>