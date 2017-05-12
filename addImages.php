<?php 
    require_once 'loginDatabase.php';
    $nameImage = $_POST['name'];
    $descripcion = utf8_encode($_POST['descripcion']);
    $categoria = $_POST['categoria'];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    $idCategoria = 0;
     if($categoria=="Abánicos"){
     	$idCategoria =1;
     }else if($categoria=="Canastas"){
     	$idCategoria =2;
     }else{
     	$idCategoria =3;
     }

     $sql = "INSERT INTO productos (nombre, imagen, descripcion, categoria) VALUES ('$nameImage',
     '$imagen','$descripcion',$idCategoria)";


     $result = $conn->query($sql);
    if(!$result){
    	echo $conn->error;
    }



   

?>