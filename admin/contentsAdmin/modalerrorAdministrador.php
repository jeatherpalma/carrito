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
        <div class="modal-header" id="headerModalErrorAdmin">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?php echo $actividad; ?></h4>
        </div>
        <div class="modal-body text-center">
          <p><?php echo $actividad; ?> tubo un error favor de checar duplicidad</p>
          <img src="img/error.png">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
</div>