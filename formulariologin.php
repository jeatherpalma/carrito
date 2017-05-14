<!--Formulario de login-->
  <div >
    <div class="modal-dialog">

      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Iniciar sesion</h4>
        </div>
      


      <div class="modal-body">
        <div class="container">
          <form action="inicioSesion.php" method="POST" role="form">

            <div class="form-group row">
              <div class="col-xs-12 col-sm-8 col-md-6">
                <label for="usuario"><span class="glyphicon glyphicon-user"></span>Email</label>
                <input id="email" type="text" class="form-control" name="usuario" placeholder="Email"> 
              </div>
              
            </div>
            <div class="form-group row">
            <div class="col-xs-12 col-sm-8 col-md-6">
              <label><span class="glyphicon glyphicon-eye-open"></span>Contraseña</label>
              <input type="password" class="form-control" name="password" placeholder="******">
            </div>
              
            </div>
            <div class="col-xs-12 col-sm-8 col-md-6">
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
            </div>
          </form>
        </div>
      </div>


      <div class="modal-footer"></div>
    </div>
    </div>
  </div>