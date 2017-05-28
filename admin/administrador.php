<!DOCTYPE html>
<html lang="es-MX">
<head>
	<meta charset="UTF-8">
	<title>Administrador</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/estilosAdmin.css">
	<link rel="stylesheet" type="text/css" href="../css/estilosmediaquery.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script  src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/administrador.js"></script>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>


 <div id="barraNavegacionAdmin">
 	
 </div>
 <aside class="col-md-3 hidden-xs hidden-sm">
    <h3>Actividades</h3>
    <div class="list-group">
	     <button class="w3-button w3-block w3-left-align" id="agregarAutor">
	  			Autor <i class="fa fa-caret-down"></i>
	  	</button>
	  	<div id="demoAcc" class="w3-hide w3-white w3-card-2">
	  	  <div  class="agregarAutor w3-bar-item w3-button">Agregar Autor <span class="glyphicon glyphicon glyphicon-plus"></span></div>
	      <div href="#" class="w3-bar-item w3-button">Eliminar Autor<span class="glyphicon glyphicon glyphicon-remove"></span></div>
	  	</div>

	  	 <button class="w3-button w3-block w3-left-align" id="agregarCategoria">
	  			Categoria <i class="fa fa-caret-down"></i>
	  	</button>
	  	<div id="demoAcc2" class="w3-hide w3-white w3-card-2">
	  	  <div class="agregarCategoria w3-bar-item w3-button">Agregar Categoria <span class="glyphicon glyphicon glyphicon-plus"></span></div>
	      <div href="#" class="w3-bar-item w3-button">Eliminar Categoria<span class="glyphicon glyphicon glyphicon-remove"></div>
	  	</div>

	  	<button class="w3-button w3-block w3-left-align" id="agregarEditorial">
	  			Editorial <i class="fa fa-caret-down"></i>
	  	</button>
	  	<div id="demoAcc3" class="w3-hide w3-white w3-card-2">
	  	  <div class="agregarEditorial w3-bar-item w3-button">Agregar Editorial <span class="glyphicon glyphicon glyphicon-plus"></span></div>
	      <div href="#" class="w3-bar-item w3-button">Eliminar Editorial<span class="glyphicon glyphicon glyphicon-remove"></div>
	  	</div>
     
     	<button class="w3-button w3-block w3-left-align" id="agregarLibro">
	  			Libros <i class="fa fa-caret-down"></i>
	  	</button>
	  	<div id="demoAcc4" class="w3-hide w3-white w3-card-2">
	  	  <div class="addBook w3-bar-item w3-button">Agregar Librospan <span class="glyphicon glyphicon glyphicon-plus"></span></div>
	      <div href="#" class="w3-bar-item w3-button">Eliminar Libro <span class="glyphicon glyphicon glyphicon-remove"></span></div>
	      <div href="#" class="w3-bar-item w3-button">Editar Libro <span class="glyphicon glyphicon glyphicon-pencil"></span></div>
	  	</div>


      
    </div>
 </aside>

  	<div class="col-sm-10 col-md-9">
  		<div id="addAutor">
		  	
		 </div>
		  	
  	</div>
  </div>
	
</div>


  

  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>