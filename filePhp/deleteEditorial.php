<?php 
    require_once 'loginDatabase.php';
    
    $ideditorial = $_POST['idEditorial'];  
    if($ideditorial){
        $query = "DELETE FROM editorial WHERE ideditorial = '$ideditorial'";
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