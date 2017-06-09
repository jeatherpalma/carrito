<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<div class="container">
	<?php
		session_start(); 
		if(isset($_GET['categoria'])){
			$categoria = utf8_decode($_GET['categoria']);
			require_once '../filePhp/loginDatabase.php';
	       	$sql = "SELECT idCategoria FROM categorias where Tipo = '$categoria'";
	       	$resultado = $conn->query($sql);
	       	if($resultado->num_rows>0){
	       		$row=$resultado->fetch_assoc();
	       		$idCategoria = $row['idCategoria'];
	       }
		}
		
	?>
  
  <div class="row">
  	<h1><?php if(isset($_GET['categoria'])){echo utf8_encode($categoria);} ?></h1>
    
       
      
      <?php 
      require_once '../filePhp/loginDatabase.php';
      if(isset($_POST['str'])){
      	$str =  $_POST['str'];
      	if($str==""){
      		$str = "33308/fhkfhf";
      	}
      	$sql = "SELECT nombre, imagen,costo,idlibro FROM libro WHERE nombre LIKE '$str%'";
      }else{
      	if(isset($_POST['promo'])){
      		$promo = $_POST['promo'];
      		if(isset($_POST['nuevos'])){
      			$sql = "SELECT nombre, imagen,costo,idlibro FROM libro WHERE costo >= '$promo'";
      		}else{
				$sql = "SELECT nombre, imagen,costo,idlibro FROM libro WHERE costo <= '$promo'";
      		}
      		
      	}else{
      		$sql ="SELECT nombre,imagen,costo,l.idlibro FROM libro l,lcae s WHERE s.idcategoria = '$idCategoria' AND 
      		l.idlibro = s.idlibro";
      	}
      		
      }
      
      $resultado = $conn->query($sql);
      if($resultado->num_rows>0){
       	while ($row=$resultado->fetch_assoc()) {
       	?>	

				<div class="w3-container  col-xs-12 col-sm-6 col-md-4 text-center">
					  <h3 class="name" ><?php echo utf8_encode($row['nombre']); ?></h3>

						  <div class="w3-card-4 center-block">
						    <img class="imagenDescripcion" src="<?php echo $row['imagen']; ?>" name="<?php echo $row['idlibro']; ?>">
						    <div class="w3-container">
						    	<div class="row">
						    		<div class="col-md-4 ">
						    			<div>$ <span class="costo"><?php echo $row['costo']; ?></span></div>			
						    		</div>
						    		<div class="col-md-6 col-lg-offset-2">
						    			<button  class="agregarCarrito btn btn-warning" id="<?php echo $row['idlibro']; ?>">
						    				<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
						    			</button>
						    		</div>
						    	</div>
						      
						      
						   </div>
		
					  </div>
				</div>

	   <?php
         }
       }else{
     ?>
     <h2>No se hayaron resultados</h2>
     <?php  	
       }

	?>
</div>
