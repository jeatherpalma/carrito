<!--Formulario de login-->
  <div>
    <div class="modal-dialog">

      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Iniciar sesion</h4>
        </div>
      


      <div class="modal-body">
        <div class="container">
            <div class="form-group row">
              <div class="col-xs-12 col-sm-8 col-md-6">
                <label id="etiqueEmail" for="usuario">Email</label>
                <input id="email" type="text" class="form-control" name="usuario" placeholder="Email"> 
              </div>
              
            </div>
            <div class="form-group row">
            <div class="col-xs-12 col-sm-8 col-md-6">
              <label id="etiquePassword" for="password">Contraseña</label>
              <input id="password" type="password" class="form-control" name="password" placeholder="******">
            </div>
              
            </div>
            <div class="col-xs-12 col-sm-8 col-md-6">
              <button id="loginUser" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
            </div>
        </div>
      </div>


      <div class="modal-footer">
        <label id="etiquetaError" for="usuario"></label>
      </div>
    </div>
    </div>
  </div>