<?php  
	if(isset($_POST['str'])){
?>
<div class="container">
<table class="table table">
    <thead>
      <tr>
        <th>Nombre</th>
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
	       	$sql = "SELECT nombre,ideditorial FROM editorial WHERE nombre LIKE '$str%'";
	       	$resultado = $conn->query($sql);
	       	if($resultado->num_rows>0){
	       		while ($row=$resultado->fetch_assoc()) {
	    ?>
		    <div class="row">
				<tr>
					<div class="col-xs-12 col-md-3">
						<td >
							<a id="<?php echo $row['ideditorial']; ?>" class="removeEditorial"><span class="glyphicon glyphicon-remove"></span></a>
							<span ><?php echo $row['nombre']; ?></span>
										
						</td>
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
      </tr>
    </thead>
    <tbody>
		<?php  
			require_once '../../filePhp/loginDatabase.php';
	       	$sql = "SELECT nombre,ideditorial FROM editorial";
	       	$resultado = $conn->query($sql);
	       	if($resultado->num_rows>0){
	       		while ($row=$resultado->fetch_assoc()) {
	    ?>
		    <div class="row">
				<tr>
					<div class="col-xs-12 col-md-3">
						<td >
							<a id="<?php echo $row['ideditorial']; ?>" class="removeEditorial"><span class="glyphicon glyphicon-remove"></span></a>
							<span ><?php echo $row['nombre']; ?></span>
										
						</td>
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
