<?php 
    $actividad  = $_POST['actividad'];
?>

<div>
  <?php echo $actividad; ?>
</div>
<div>
<div class="modal-dialog">
    <?php  
        if(isset($_POST['error'])){
    
    ?>
    <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header" id="headerModalErrorAdmin">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><?php echo $actividad; ?></h4>
                  </div>
                  <div class="modal-body text-center">
                    <p>No se puede borrar un registro con referencia</p>
                    <img src="img/error.png">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
       

    <?php
        }else{
          if(isset($_POST['idAutor'])){


    ?>
           <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" id="headerModalAdmin">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title"><?php echo $actividad; ?></h4>
            </div>
            <div class="modal-body text-center">
              <p class="<?php echo $_POST['idAutor']; ?>">Seguro que quieres borrarlo</p>
              <button id="borraElautor" type="button" class="btn btn-primary">Sí</button>
            </div>
          </div>
    <?php
          
        }else{
          if(isset($_POST['idEditorial'])){
    ?>
         <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" id="headerModalAdmin">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title"><?php echo $actividad; ?></h4>
            </div>
            <div class="modal-body text-center">
              <p class="<?php echo $_POST['idEditorial']; ?>">Seguro que quieres borrarlo</p>
              <button id="borrarEditorial" type="button" class="btn btn-primary">Sí</button>
            </div>
          </div> 
    <?php
          }else{
            if(isset($_POST['idcategoria'])){
     ?>
                 <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header" id="headerModalAdmin">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title"><?php echo $actividad; ?></h4>
                    </div>
                    <div class="modal-body text-center">
                      <p class="<?php echo $_POST['idcategoria']; ?>">Seguro que quieres editarlo</p>
                      <h1 class="<?php echo $_POST['nombre']; ?>"></h1>
                      <button id="editarCategoria" type="button" class="btn btn-primary">Sí</button>
                    </div>
                  </div> 
     <?php

            }else{

    ?>
          <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header" id="headerModalAdmin">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><?php echo $actividad; ?></h4>
              </div>
              <div class="modal-body text-center">
                <p><?php echo $actividad; ?> se completo correctamente</p>
                <img src="img/palomita.png" >
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
    <?php
            }
        }
     }
   }
    ?>
          
    

              
    </div>
</div>