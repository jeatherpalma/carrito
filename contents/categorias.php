
<div class="container-fluid">
      <div class="row">
	<?php 

	
       require_once '../loginDatabase.php';
       $sql = "SELECT Tipo,imagen FROM categorias";
       $resultado = $conn->query($sql);
       if($resultado->num_rows>0){
       	while ($row=$resultado->fetch_assoc()) {
?>	
			    <div class="categoriasProductos col-xs-12 col-sm-6 col-md-4 text-center">
			    	<a href="">
			    		<img class="imgCat" src="<?php echo $row['imagen']; ?>">
			    	<div>
			    		<?php echo utf8_encode($row['Tipo']);?>
			    	</div>
			    	</a>
			    </div>
				
			
<?php
         }
       }

?>
</div>
</div>