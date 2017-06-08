<?php 
	$usuario = utf8_encode($_POST['usuario']);
	$nombre = utf8_encode($_POST['nombre']);
	$apellidos = utf8_encode($_POST['apellidos']);
	$contrasena = utf8_encode($_POST['contrasena']);
	$telefono = utf8_encode($_POST['telefono']);
	$fechaAlta = date("Y-m-d");
?>