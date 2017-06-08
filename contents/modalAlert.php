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
          if (isset($_POST['imagen'])) {
            ?>
            <div class="modal-body text-center">
                <p><?php echo $actividad; ?> se completo correctamente</p>
               <img class="imgCat" src="<?php echo $_POST['imagen']; ?>" >
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