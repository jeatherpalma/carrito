<!DOCTYPE html>
<html lang="es-MX">
  <head>
  	<meta charset="UTF-8"/>
  	<title>Carrito</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">      
    <script src="js/jquery.js"></script>
    <script type="text/javascript" src="js/loadforms.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  </head>

  <body class="modal-body">

  <div class="container-fluid">
     <div class="page-header">
       <img class="bannerLibreria" src="img/bannerLibreria.jpg" alt="">
     </div>
  </div>

  <div class="container-fluid">
      
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

          <ul class="nav navbar-nav navbar-right">
              <li><a id="linkRegistrar" data-toggle="modal" data-target="#modalRegistro"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
              <li><a id="linkLogin" data-toggle="modal" data-target="#modalLogin"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul> 

         </div> 
      </nav>
  </div>
  

  <div id="modalRegistro" class="modal fade" role="dialog"></div>
     <div id="modalLogin" class="modal fade" role="dialog"></div>
      
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
                <img class="imgCat img-thumbnail" src="img/categorias/literatura/index.jpeg" href="">
                <div class="nomCat">Literatura</div>
              </a>
              </div>
           </div>
           <div class="col-xs-12 col-sm-6 col-md-4 text-center">
              <div>
                <a href="#" class="linkCat">
                <img class="imgCat img-thumbnail"  src="img/categorias/literatura/index.jpeg" href="">
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
