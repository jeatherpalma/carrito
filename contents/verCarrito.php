<div class="container" id="tablaCarrito">

  
<?php  
	session_start();
	if(isset($_SESSION['carrito'])){
		?>
		<table class="table table">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Imagen</th>
        <th>Cantidad</th>
        <th>Subtotal</th>
      </tr>
    </thead>
    <tbody>
		<?php
		$arreglo = $_SESSION['carrito'];
		$total=0;

		for ($i=0; $i <count($arreglo) ; $i++) { 
			$total += $arreglo[$i]['Cantidad']*$arreglo[$i]['Precio'];
?>
				      <div class="row">
						<tr>
							<div class="col-xs-12 col-md-3">
								<td >
									<a id="<?php echo $arreglo[$i]['Nombre']; ?>" class="removeProduct"><span class="glyphicon glyphicon glyphicon-remove"></a>
									<span ><?php echo $arreglo[$i]['Nombre']; ?></span>
									
								</td>
							</div>
							<div class="col-xs-12 col-md-3">
								<td>
									<img src="<?php echo $arreglo[$i]['Imagen']; ?>" class="imagenCarrito img-responsive">
								</td>	
							</div>
							<div class="col-xs-12 col-md-3">
								<td><span class="badge"><?php echo $arreglo[$i]['Cantidad']; ?> </span></td>	
							</div>
							<div class="col-xs-12 col-md-3">
								<td><?php echo  $arreglo[$i]['Cantidad']*$arreglo[$i]['Precio'];?></td>	
							</div>
							
							
							
						</tr>
						
					

<?php
			}
			?>
			<tr>
					<div class="col-xs-12">
						
							<td></td>
						
					</div>
		
				<div class="col-xs-12">
						
							<td></td>
						
				</div>
		
			
				<div class="col-xs-12">
						
							<td>Total</td>
						
				</div>
					
			
				<div class="col-xs-12">
					
						<td><?php echo $total; ?></td>
					
				</div>
				</tr>
			</div>
		</tfoot>
		</tbody>
		
  </table>
			<?php	
	}else{
		?>
			<div class="row">
				<div class="col-xs-12 col-md-6">
					<h3>Tu carrito está vacio</h3>
				</div>
			</div>
		<?php
	}
	
?>
		
				
</div>
