<?php 
  session_start();
  if($_SESSION['autentificado']!="SI"){
  	header("LOcation: index.php?errorus=si");
  	exit();
  }


 ?>