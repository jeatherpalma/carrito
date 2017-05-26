<div>
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Registro</h4>
      </div>
      <div class="modal-body">
        <div class="container">
          <form id="formularioRegistro" action="register.php" method="POST">

          <div class="form-group row">
            <div class="col-xs-12 col-sm-8 col-md-6">
              <label for="usuario">Email</label>
              <input class="form-control" type="email" placeholder="ejemplo@dominio.com" name="usuario"/>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-xs-12 col-sm-8 col-md-3">
                <label for="name">Nombre</label>
                <input class="form-control" type="text" placeholder="Nombre" name="name"/>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-3">
              <label for="apellidos">Apellidos</label>
               <input class="form-control" type="text" placeholder="Apellido" name="apellidos"/>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-xs-12 col-sm-8 col-md-3">
              <input class="form-control" type="passwod" placeholder="**" name="password"/>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-3">
               <input class="form-control" type="password" placeholder="Confirma tu contraseña" name=""/>
            </div>
          </div>

          <div class="form-group row">
              <div class="col-xs-12 col-sm-8 col-md-6">
               <input class="form-control" type="text" placeholder="(000)-000-00-00" name="telefono"/>
            </div>
          </div>

          <div class="row text-center">
            <div class="col-xs-12 col-sm-8 col-md-6">
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span>Registrar</button>
            </div>
          </div>

        </form>
      </div>
      </div>
      <div class="modal-footer">
        <button id="closeFormularioRegistro" type="button" class="btn btn-default" >Close</button>
      </div>
    </div>

  </div>
</div>