<?php 
    $actividad  = $_POST['actividad'];

?>
<div>
  <?php echo $actividad; ?>
</div>
<div>
<div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?php echo $actividad; ?></h4>
        </div>
        <?php  
          if (isset($_POST['idlibro'])) {
             $idlibro = $_POST['idlibro'];
              require_once '../filePhp/loginDatabase.php';
              $sql = "SELECT imagen,nombre FROM libro where idlibro = '$idlibro'";
              $resultado = $conn->query($sql);
              if($resultado->num_rows>0){
                $row=$resultado->fetch_assoc();
                $imagen = $row['imagen'];
                $nombre = $row['nombre'];
              }
        
            ?>
            <div class="modal-body text-center">
                <p><?php echo $nombre; ?> se agrego a tu carrito</p>
               <img class="imgCat" src="<?php echo $imagen; ?>" >
           </div>
            <div class="modal-footer">
              <button id="verCarrito" type="button" class="btn btn-primary">Ver Carrito</button>
             </div>
            <?php
          }else{
            ?>
              <div class="modal-body text-center">
                  <p><?php echo $actividad; ?> se completo correctamente</p>
                  <img src="img/palomita.png" >
              </div>
              <div class="modal-footer">
                <button  type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            <?php
          }
        ?>
      
      </div>
      
    </div>
</div>