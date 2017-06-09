
 <nav class="navbar navbar-inverse" role="navigation">
	<div class="container-fluid">
		<div class="container-fluid">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
               </button>
               <a href = "index.php"   class="navbar-brand">Books Mex</a>
            
          </div>
          </div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
           <ul class="nav navbar-nav">
             <li >
               <a href="index.php">Inicio</a>
             </li>


             <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Libros
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                <?php 

                        session_start();
                        if(isset($_SESSION['carrito'])){
                          $numProductos = count($_SESSION['carrito']);
                        
                        }else{
                          $numProductos = 0;
                        }
                       require_once '../filePhp//loginDatabase.php';
                       $sql = "SELECT Tipo FROM categorias";
                       $resultado = $conn->query($sql);
                       if($resultado->num_rows>0){
                        while ($row=$resultado->fetch_assoc()) {
                         
                  ?>  
                          
                        <li><a  class="categorias"><?php echo utf8_encode($row['Tipo']); ?></a></li>
                        
                      
                <?php
                         }
                       }

                ?>
                                  
                </ul>
            </li> 
            <li  ><a id="acercade" role="tab" data-toggle="tab">Acerca de</a></li>  		
                    
			</ul>
		
        <ul class="nav navbar-nav navbar-right">
          
          <div class="navbar-form navbar-left" role="search">
                  <div class="form-group row">
                  <div class="col-md-3">
                    <input id="busquedaLibro" type="text" class="form-control" placeholder="Search">  
                  </div>
                    
                  </div>
                  <button id="searchBook" class="btn btn-success">
                      <span class="glyphicon glyphicon-search"></span>
                  </button>
          </div>
          	 <?php  
              if(isset($_COOKIE["usuario"])){
                ?>
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_COOKIE['usuario'];?>
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a id="cerrarSecion">Cerrar seción</a></li>
                    </ul>
                  </li>  
              
                <?php
              }else{
                ?>
                  <li class="dropdown">
                    <li><a id="linkRegistrar" data-toggle="modal" data-target="#modalRegistro"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a id="linkLogin" data-toggle="modal" data-target="#modalLogin"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                  </li>
                <?php   
              }

                ?>

             
             
             
             <li class="dropdown">
                <a id="verCarrito" class="btn btn-warning">
                  <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                  <span><?php echo $numProductos; ?></span>
                </a>
            </li>
  
        </ul>

		</div>


	</div>


</nav>