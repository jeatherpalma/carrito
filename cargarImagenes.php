<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="css/estilos.css">
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
				<div class="col-md-12">
					<div>
						<img class="imgCat" src="data:image/png;base64,<?php echo base64_encode($row['imagen']); ?>" alt="">
					</div>	
				</div>
			
        

       
<?php
         }
       }

?>
          </div>
		</div>
</body>
</html>