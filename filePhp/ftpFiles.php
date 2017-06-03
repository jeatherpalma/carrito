<?php 
	$host='files.000webhost.com';
	$user='booksmex';
	$pass='loweronedzr1';
	require_once '../loginDatabase.php';
	$nameBokk = $_POST['name'];
	$descripcion = $_POST['descripcion'];
	$categoria = $_POST['categoria'];
	$autor = $_POST['autores'];
	$costo = $_POST['costo'];
	$paginas = $_POST['paginas'];
    $editorial = $_POST['editorial'];
	
	
	$coneccion = ftp_connect($host) or die("Cannot ogin");
	$login = ftp_login($coneccion,$user,$pass);
	
    if((!$coneccion) && (!$login)){
    	echo ('error');
    }else{
    	$temp = explode(".",$_FILES['image']['name']);
    	$sources_file = $_FILES['image']['tmp_name'];
    	$destino = "/public_html/img/categorias/".strtolower($categoria);
    	$nombre = $_FILES['image']['name'];
        ftp_pasv($coneccion,true);

    	$subido = ftp_put($coneccion,$destino."/".$nombre,$sources_file,FTP_BINARY);

    	if($subido){
    		echo ('success');
    	}else{
    		echo ('error');
    	}
    }

    ftp_close($coneccion);
	
	$url ="https://booksmex.000webhostapp.com/img/categorias/".strtolower($categoria)."/".$nombre;

    $sql = "INSERT INTO libro (nombre,descripcion, costo, paginas, anopublicacion, imagen) 
    VALUES('$nameBokk','$descripcion','$costo','$paginas','2001-3-4','$url')";
    $result = $conn->query($sql);
    if(!$result){
        echo ('error');
    	die($conn->error);
    }

    $sql = "SELECT idlibro FROM libro where nombre = '$nameBokk'";
    $result = $conn->query($sql);
    if($result->num_rows>0){
        while ($row=$result->fetch_assoc()) {
          $idbook = $row['idlibro'];
        }
    }

    $sql = "SELECT idCategoria FROM categorias where Tipo = '$categoria'";
    $result = $conn->query($sql);
    if($result->num_rows>0){
        while ($row=$result->fetch_assoc()) {
          $idCategoria = $row['idCategoria'];
        }
    }

    $sql = "SELECT ideditorial FROM editorial where nombre = '$editorial'";
    $result = $conn->query($sql);
    if($result->num_rows>0){
        while ($row=$result->fetch_assoc()) {
          $ideditorial = $row['ideditorial'];
        }
    }

    $sql = "SELECT idautor FROM autor where nombre = '$autor'";
    $result = $conn->query($sql);
    if($result->num_rows>0){
        while ($row=$result->fetch_assoc()) {
          $idAutor = $row['idautor'];
        }
    }

   

    $sql2 = "INSERT INTO lcae (idlibro, idcategoria, idautor, ideditorial) VALUES ('$idbook','$idCategoria','$idAutor','$ideditorial')";
    $result = $conn->query($sql2);
    if($result){
        echo ('success');
   }else{
      echo ('error');
   }
    $conn->close();
 ?>