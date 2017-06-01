<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div>
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4">
       <div class="container">
      <div class="row center-block">
	<?php 

	
       require_once '../loginDatabase.php';
       $sql = "SELECT idCategoria FROM categorias WHERE Tipo = 'Terror'";
       $resultado = $conn->query($sql);
       if($resultado->num_rows>0){
       	while ($row=$resultado->fetch_assoc()) {
       		$idCategoria = $row['idCategoria'];
	?>	
			    
				
				
			
<?php
         }
       }

?>
</div>
</div>
    </div>
  </div>
</div>
