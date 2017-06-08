<?php  
	if(isset($_POST['str'])){
?>
<div class="container">
<table class="table table">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Apellido</th>
      </tr>
    </thead>
    <tbody>
		<?php  
			require_once '../../filePhp/loginDatabase.php';
			if($_POST['str']!=""){
				$str = $_POST['str'];
			}else{
				$str = "123wddedeede";
			}
	       	$sql = "SELECT nombre,Apellido,idautor FROM autor WHERE nombre LIKE '$str%'";
	       	$resultado = $conn->query($sql);
	       	if($resultado->num_rows>0){
	       		while ($row=$resultado->fetch_assoc()) {
	    ?>
		    <div class="row">
				<tr>
					<div class="col-xs-12 col-md-3">
						<td >
							<a id="<?php echo $row['idautor']; ?>" class="removeAutor"><span class="glyphicon glyphicon-remove"></span></a>
							<span ><?php echo $row['nombre']; ?></span>
										
						</td>
					</div>
								
					<div class="col-xs-12 col-md-3">
						<td><span><?php echo $row['Apellido']; ?> </span></td>	
					</div>
								
				</tr>
							
						
			</div>
	    <?php   			
	       		}
	       	}
		?>
		
	</tfoot>
	</tbody>
		
  </table>
	
		
				
</div>
<?php
	}else{
?>
<div class="container">
<table class="table table">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Apellido</th>
      </tr>
    </thead>
    <tbody>
		<?php  
			require_once '../../filePhp/loginDatabase.php';
	       	$sql = "SELECT nombre,Apellido,idautor FROM autor";
	       	$resultado = $conn->query($sql);
	       	if($resultado->num_rows>0){
	       		while ($row=$resultado->fetch_assoc()) {
	    ?>
		    <div class="row">
				<tr>
					<div class="col-xs-12 col-md-3">
						<td >
							<a id="<?php echo $row['idautor']; ?>" class="removeAutor"><span class="glyphicon glyphicon-remove"></span></a>
							<span ><?php echo $row['nombre']; ?></span>
										
						</td>
					</div>
								
					<div class="col-xs-12 col-md-3">
						<td><span><?php echo $row['Apellido']; ?> </span></td>	
					</div>
								
				</tr>
							
						
			</div>
	    <?php   			
	       		}
	       	}
		?>
		
	</tfoot>
	</tbody>
		
  </table>
	
		
				
</div>
<?php
	}

?>
