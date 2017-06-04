<?php 
   $hostname = 'localhost';
   $username = 'pwe2017';
   $password = 'qwertyuiop';
   $database = 'pwe2017';

   $currency = '₹ ';
   $shipping_cost = 1.50;
   $taxes = array(
   		'VAT' => 12,
   		'Service Tax' => 5,
   		'Other Tax' => 10

   	);

   $conn = new mysqli($hostname, $username, $password, $database);
    if($conn->connect_error){
    	die($conn->connect_error);
    }
    
 ?>