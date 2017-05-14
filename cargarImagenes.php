<!DOCTYPE html>
<html lang="es-MX">
<head>
	<meta charset="UTF-8"/>
	<title></title>
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/jquery.js" type="text/javascript"></script>
</head>
<body>
      <div class="container-fluid">
      <div class="row">
	<?php 

	
       require_once 'loginDatabase.php';
       $sql = "SELECT * FROM productos";
       $resultado = $conn->query($sql);
       if($resultado->num_rows>0){
       	while ($row=$resultado->fetch_assoc()) {
?>	
			    <div class="col-xs-12 col-sm-6 col-md-4 text-center">
			    	<img class="imgCat" src="<?php echo $row['imagen']; ?>" alt="">
			    	<div>
			    		<?php echo $row['nombre'];?>
			    	</div>
			    </div>
				
			
<?php
         }
       }

?>
        </div>
        </div>

        <script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>