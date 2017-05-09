<!DOCTYPE html>
<html lang="es-MX">
  <head>
  	<meta charset="UTF-8"/>
  	<title>Carrito</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">      
    <script type="text/javascript" src="js/scripts.js"></script>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  </head>

  <body>

  <header class="container-fluid">
    <img id="banner" src="img/bannerLibreria.jpg" alt="">
  </header>

  <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
               </button>
            
          </div>
          </div>
        

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
           <ul class="nav navbar-nav">
             <li class="active">
               <a href="#">Inicio<span class="sr-only">(current)</span></a>
             </li>
             <li><a href="productos.html">Productos</a></li>
             <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Acerca de..<span class="caret"></span></a>
               <ul class="dropdown-menu">
                 <li><a href="">Nostros</a></li>
                 <li role="separator" class="divider"></li>
                 <li><a href="">Contacto</a></li>
                 <li><a href="">Localizanos</a></li>
               </ul>
             </li>
           </ul>

           <form class="navbar-form navbar-right" role="search" action="inicioSesion.php" method="POST">
              <div class="form-group">
                <input type="text" class="form-control" name="us" placeholder="Usuario">
                <input type="password" class="form-control" name="pss" placeholder="******">
              </div>
              <button type="submit" class="btn btn-default">Ingresar</button>
              <a id="linkRegistrar" data-toggle="modal" data-target="#modalRegistro">Registrarme</a>
            </form> 

         </div> 
      </nav>

   <!-- Modal -->
<div id="modalRegistro" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Registro</h4>
      </div>
      <div class="modal-body">
        <div class="container">
          <form action="register.php" method="POST">

          <div class="form-group row">
            <div class="col-xs-6">
              <input class="form-control" type="email" placeholder="ejemplo@dominio.com" name="usuario"/>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-xs-3">
                <input class="form-control" type="text" placeholder="Nombre" name="name"/>
            </div>
            <div class="col-xs-3">
               <input class="form-control" type="text" placeholder="Apellido" name="apellidos"/>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-xs-3">
              <input class="form-control" type="password" placeholder="**" name="password"/>
            </div>
            <div class="col-xs-3">
               <input class="form-control" type="password" placeholder="Confirma tu contraseña" name=""/>
            </div>
          </div>

          <div class="form-group row">
              <div class="col-xs-6">
               <input class="form-control" type="text" placeholder="(000)-000-00-00" name="telefono"/>
            </div>
          </div>

          <div class="row">
            <div class="col-md-3 text-center">
              <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
          </div>

        </form>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
      
      <nav class="text-center" aria-label="Page navigation" id="numeroPaginas">
        <ul class="pagination">
          <li>
            <a href="#" arial-lebel="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li><a href="">1</a></li>
          <li><a href="">2</a></li>
          <li><a href="">3</a></li>
          <li>
            <a href="#" arial-lebel="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>


      <div id="categorias" class="container">
         <div class="row">
           <div class="col-xs-12 col-sm-6 col-md-4 text-center">
              <div>
                <a href="#" class="linkCat">
                <img class="imgCat" src="img/categorias/literatura/index.jpeg" href="">
                <div class="nomCat">Literatura</div>
              </a>
              </div>
           </div>
           <div class="col-xs-12 col-sm-6 col-md-4 text-center">
              <div>
                <a href="#" class="linkCat">
                <img class="imgCat" src="img/categorias/literatura/index.jpeg" href="">
                <div class="nomCat">Ciencia</div>
              </a>
              </div>
           </div>
           <div class="col-xs-12 col-sm-6 col-md-4 text-center">
              <div>
                <a href="#" class="linkCat">
                <img class="imgCat" src="img/categorias/literatura/index.jpeg" href="">
                <div class="nomCat">Policiaco</div>
              </a>
              </div>
           </div>
         </div>
          
      </div>
      
    </main>  	
  	
    


    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
    
    
  </html>

  <!--a-->
