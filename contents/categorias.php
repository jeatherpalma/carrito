<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div>
  <div class="row">
    <div class="col-md-2">
      <div class="w3-sidebar w3-light-grey w3-bar-block" id="sideBar" style="width:10%; height: 50%">
          <h3 class="w3-bar-item">Categorias</h3>
          <?php 

	
		       require_once '../loginDatabase.php';
		       $sql = "SELECT Tipo FROM categorias";
		       $resultado = $conn->query($sql);
		       if($resultado->num_rows>0){
		       	while ($row=$resultado->fetch_assoc()) {
		  ?>	
			    
			
		<a href="#" class="w3-bar-item w3-button"> <?php echo utf8_encode($row['Tipo']); ?></a>

						  	
		<?php
		         }
		       }

		?>
          
      </div>
    </div>
    <div class="col-md-10">
       <div class="container">
      <div class="row center-block">
	<?php 

	
       require_once '../loginDatabase.php';
       $sql = "SELECT Tipo,imagen FROM categorias";
       $resultado = $conn->query($sql);
       if($resultado->num_rows>0){
       	while ($row=$resultado->fetch_assoc()) {
	?>	
			    
			
					<div class="w3-container col-xs-12 col-sm-6 col-md-4 center-block">
					  <h2 ><?php echo utf8_encode($row['Tipo']); ?></h2>

						  <div class="w3-card-4">
						    <img id="imagenCategoria" class="imgCat" src="<?php echo $row['imagen']; ?>" alt="Norway" style="width:100%">
						    <div class="w3-container w3-center">
						      <p>The Troll's tongue in Hardanger, Norway</p>
						   </div>
						   <div class="w3-container w3-center">
						     <a href="" class="btn btn-primary">Ir</a>
						   </div>
					  </div>
				</div>
				
				
			
<?php
         }
       }

?>
</div>
</div>
    </div>
  </div>
</div>
