<!DOCTYPE html>
<html lang="es-MX">
<head>
	<meta charset="UTF-8">
	<title>Admin Books Mex</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/estilosmediaquery.css">
</head>
<body>

   <div class="logotipo">	
   		 <div class="col-md-4 col-md-offset-3">
	        <img id="logoFormulario" src="../img/bannerLibreria.jpg" alt=""></br>
	     </div>
   	</div>
	
	<div id="formularioAdmin" class="container">
		<form id="formulario" action="http://localhost/carrito/filePhp/loginAdmin.php" method="POST" role="form">
             <div class="contenedor">
             	<div class="form-group row">
	             	<div class="modal-header col-md-4 text-center col-md-offset-4">
	             		<label class="badge">Inicio de sesión</label>
	            	</div>
             	</div>
	            <div class="form-group row">
	              <div class="col-md-4 col-md-offset-4">
	                <input id="usuario" type="text" class="form-control" name="username" placeholder="Usuario"> 
	              </div>
	              
	            </div>
	            <div class="form-group row">
	            <div class="col-md-4 col-md-offset-4">
	              <input type="password" class="form-control" name="password" placeholder="Contraseña"/>
	            </div>
	              
	            </div>
	            <div class="form-group row text-center">
	              <div class="col-md-4 col-md-offset-4">
	              	<button type="submit" class="btn btn-success form-control"><span class="glyphicon glyphicon-off"></span> Login</button>
	              </div>
	            </div>
             </div>
          </form>
	</div>

	<div id="noValido">
		
	</div>
</body>
</html>