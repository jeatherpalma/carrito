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
          
          <div class="form-group row">
            <div class="col-xs-12 col-sm-8 col-md-6">
              <label for="usuario">Email</label>
              <input id="usuario" class="form-control" type="email" placeholder="ejemplo@dominio.com" name="usuario"/>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-xs-12 col-sm-8 col-md-3">
                <label for="name">Nombre</label>
                <input id="nombre" class="form-control" type="text" placeholder="Nombre" name="name"/>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-3">
              <label for="apellidos">Apellidos</label>
               <input id="apellidos" class="form-control" type="text" placeholder="Apellido" name="apellidos"/>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-xs-12 col-sm-8 col-md-3">
              <input id="contrasena" class="form-control" type="password" placeholder="**" name="password"/>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-3">
               <input id="contrasena2" class="form-control" type="password" placeholder="Confirma tu contraseña" name=""/>
            </div>
          </div>

          <div class="form-group row">
              <div class="col-xs-12 col-sm-8 col-md-6">
               <input id="telefono" class="form-control" type="text" placeholder="(000)-000-00-00" name="telefono"/>
            </div>
          </div>

          <div class="row text-center">
            <div class="col-xs-12 col-sm-8 col-md-6">
              <button id="registroUser" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span>Registrar</button>
            </div>
          </div>

      </div>
      </div>
      <div class="modal-footer">
       <label id="etiquetaError" for="usuario"></label>
      </div>
    </div>

  </div>
</div>