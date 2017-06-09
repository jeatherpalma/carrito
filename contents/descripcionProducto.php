<?php
   $id = $_POST['idlibro'];
?>
  <div >
    <div class="modal-dialog">

      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Descripción de producto</h4>
        </div>
      
      <div class="modal-body">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-6">
            <?php
            require_once '../filePhp/loginDatabase.php';
            $sql ="SELECT l.nombre,l.imagen,l.costo,l.paginas,l.descripcion,l.idlibro,c.Tipo FROM libro l,lcae s, categorias c WHERE s.idcategoria = c.idCategoria AND 
             l.idlibro = s.idlibro AND l.idlibro = '$id'";  
              $resultado = $conn->query($sql);
              if($resultado->num_rows>0){
                while ($row=$resultado->fetch_assoc()) {
                  ?>
                <div class="col-md-6">
                  <img  id="imagenDescripcion" src="<?php echo $row['imagen'];?>" />
                </div>
                <div class="col-xs-12 col-sm-4 col-md-6">
                  <div>
                    <span>Nombre: <?php echo $row['nombre'];?></span></br>
                    <span>Categoria: <?php echo $row['Tipo'];?></span></br>
                    <span>Precio: $ <?php echo $row['costo'];?></span></br>
                    <span>Número páginas: <?php echo $row['paginas'];?></span></br>
                    <span>Descripción: <?php  echo $row['descripcion'];?></span>
                  </div>
                </div>
                  <?php

                }
              }
            ?>
              

             
            </div>



          </div>
          <div class="row">
            <div class="col-md-6 text-center">
              <button class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>

      
      <div class="modal-footer"></div>
    </div>
    </div>
  </div>