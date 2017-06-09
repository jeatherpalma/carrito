<?php 
    require_once 'loginDatabase.php';
    
    $idCategoria = $_POST['idCategoria'];
    $nombreNew  = $_POST['Nombre'];
    if($ideditorial){
        $query = "UPDATE categorias SET Tipo='$nombreNew' WHERE idCategoria='$idCategoria'";
        $result = $conn->query($query);
        if($result){
            echo ('success');
        }else{
            echo ('error');
        }
    }else{
        echo ('error');
    }


       
?>