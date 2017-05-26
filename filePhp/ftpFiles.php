<?php 
	$host='files.000webhost.com';
	$user='booksmex';
	$pass='loweronedzr1';

	$conn = @ftp_connect($host);
	//Comprobar que la conexión ha tenido éxito
	if (!$conn) {
	echo 'Error al tratar de conectar con ' . $host . "\n";
	exit();
	}

	$login = @ftp_login($conn, $user, $pass);
	if (!$login) {
		echo 'Error al intentar acceder con el usuario ' . $user;
		ftp_quit($conn);
		exit();
	}
		//obtenemos una lista con los archivos del servidor
	$files = ftp_nlist($conn, './public_html');
	foreach ($files as $file) {
	echo $file . "\n";
	}

	//Cerramos la conexion
	ftp_close($conn); 


 ?>