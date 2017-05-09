<?php 

     
   require_once 'loginDatabase.php';

   $us=utf8_encode($_GET['us']);

   $sql = "SELECT * FROM user WHERE email = '$us'";
   //$sql = "SELECT * FROM user";
   $resultado = $conn->query($sql);
   if(!$_GET['actual']){
      $_GET['actual'] = "";
   } 

   if($resultado->num_rows > 0){
   	echo "<form action='editarUsuario.php' method='POST'> <table>";
   	while ($row=$resultado->fetch_assoc()) {
 ?>
        <tr>
          <td colspan="2"><?php echo $_GET['actual']; ?></td>
        </tr>
        <tr>
        	<td>Usuario: </td>
        	<td><input type="text" name="us" value="<?php echo $row['email']; ?>"/></td>
        </tr>

        <tr>
        	<td>Nombre: </td>
        	<td><input type="text" name="name" value="<?php echo $row['nombre']; ?>"/></td>
        </tr>

        <tr>
        	<td>Apellidos: </td>
        	<td><input type="text" name="apellido" value="<?php echo $row['apellidos']; ?>"/></td>
        </tr>

        <tr>
        	<td>Teléfono: </td>
        	<td><input type="text" name="tel" value="<?php echo $row['telefono']; ?>"/></td>
        </tr>
        
        <tr>

          <td>
            <input type="hidden" name="usOriginal" value="<?php echo $us; ?>">
            <input type="submit" value="Guardar"/>
          </td>
          <td><a href="deleteUser.php?email=<?php $us; ?>">Borrar</a></td>
        </tr>
        
        <tr>
          <td colspan="2"><hr/></td>
        </tr>

        

<?php
   	}
   	echo "</table></form>";
   }

   $conn->close();


?>