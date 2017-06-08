<?php 
    require_once 'loginDatabase.php';
    
    $idautor = $_POST['idAutor'];  
    if($idautor){
        $query = "DELETE FROM autor WHERE idautor = '$idautor'";
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