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
	       	$sql = "SELECT Tipo,idCategoria FROM categorias WHERE Tipo LIKE '$str%'";
	       	$resultado = $conn->query($sql);
	       	if($resultado->num_rows>0){
	       		while ($row=$resultado->fetch_assoc()) {
	    ?>
		    <div class="row">
				<tr>
					<div class="col-xs-12 col-md-3">
						<td >
							<div>
								<span id="<?php echo $row['idCategoria']; ?>" class="editCategoria glyphicon glyphicon-edit"></span>
								<span ><input type="text" name="" value="<?php echo utf8_encode($row['Tipo']); ?>"></span>
							</div>
							
										
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
	       	$sql = "SELECT Tipo,idCategoria FROM categorias";
	       	$resultado = $conn->query($sql);
	       	if($resultado->num_rows>0){
	       		while ($row=$resultado->fetch_assoc()) {
	    ?>
		    <div class="row">
				<tr>
					<div class="col-xs-12 col-md-3">
						<td >
							<div>
								<span id="<?php echo $row['idCategoria']; ?>" class="editCategoria glyphicon glyphicon-edit"></span>
								<span ><input type="text" name="" value="<?php echo utf8_encode($row['Tipo']); ?>"></span>
							</div>
										
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
