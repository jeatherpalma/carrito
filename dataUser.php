<?php 
	$email = utf8_encode($_POST['usuario']);
	$name = utf8_encode($_POST['name']);
	$apellidos = utf8_encode($_POST['apellidos']);
	$contrasena = utf8_encode($_POST['password']);
	$telefono = utf8_encode($_POST['telefono']);
	$fechaAlta = date("Y-m-d");

?>