<?php 
    require_once 'loginDatabase.php';
    $nameImage = utf8_encode($_POST['name']);
    $descripcion = utf8_encode($_POST['descripcion']);
    $categoria = utf8_encode($_POST['categoria']);
    $imagen = "http://localhost/carrito/img/categorias/literatura/".$_POST['imagen'];

    
    $idCategoria = 0;
     if($categoria=="Filosofía"){
     	$idCategoria = 1;
     }else if($categoria=="Literatura"){
     	$idCategoria = 2;
     }else if($categoria=="Poesía"){
     	$idCategoria = 3;
     }else if($categoria=="Ciencia"){
        $idCategoria = 4;
     }else if($categoria=="Policiaco"){
        $idCategoria = 5;
     }

     $sql = "INSERT INTO productos (nombre, imagen, descripcion, categoria) VALUES ('$nameImage',
     '$imagen','$descripcion',$idCategoria)";


     $result = $conn->query($sql);
    if(!$result){
    	echo $conn->error;
    }



   

?>