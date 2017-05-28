<div class="panel panel-success">
    <div class="panel-heading" id="headerAddnewUser">Agregar nuevo Libro</div>
    <div class="panel-body">
        <form action="../filePhp/ftpFiles.php" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                    <div class="col-xs-12 col-sm-8 col-md-6">
                        <label class="control-label">Nombre</label>
                        <input type="text" placeholder="Nombre" name="name" class="form-control"/>
                    </div>
                </div>
                
                <div class="form-group row">
                   <div class="col-xs-12 col-sm-8 col-md-6">
                        <label class="control-label">Descripción</label>
                        <textarea class="form-control" name="descripcion" id="" cols="15" rows="5" placeholder="Descripcion del producto"></textarea>
                    </div>
                </div>  

                <div class="form-group row">
                   <div class="col-xs-12 col-sm-6 col-md-3">
                        <label for="sel1">Categorias</label>
                        <select name="categoria" class="form-control" id="sel1">
                        <?php  
                            require_once '../loginDatabase.php';
                            $sql = "SELECT Tipo FROM categorias";
                            $resultado = $conn->query($sql);
                            if($resultado->num_rows>0){
                                while ($row=$resultado->fetch_assoc()) {
                                    ?>
                                    <option><?php echo utf8_encode($row['Tipo']);?></option>
                                    <?php
                                }
                                
                            }

                        ?>
                            
                        
                        </select>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <label for="autores">Autor</label>
                            <select name="autores" id="sel2" class="form-control">
                              <?php  
                                    require_once '../loginDatabase.php';
                                    $sql = "SELECT nombre,Apellido FROM autor";
                                    $resultado = $conn->query($sql);
                                    if($resultado->num_rows>0){
                                        while ($row=$resultado->fetch_assoc()) {
                                            ?>
                                            <option><?php echo utf8_encode($row['nombre'])." ".utf8_encode($row['Apellido']);?></option>
                                            <?php
                                        }
                                        
                                    }

                                ?>  
                            </select>
                        
                    </div>
                </div> 

                <div class="form-group row">
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <label class="control-label">Coto</label>
                        <input type="text" placeholder="$ 0.00" name="costo" class="form-control"/>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <label class="control-label">Número de páginas</label>
                        <input type="text" placeholder="0" name="paginas" class="form-control"/>
                    </div>
                </div> 

                <div class="form-group row">
                    <div class="col-xs-12 col-sm-8 col-md-6">
                        <label class="control-label">Seleccciona la imagen</label>
                        <input type="file" name="image" class="file" />
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-xs-12 col-sm-8 col-md-6">
                        <input type="submit"  value="Agregar libro" class="btn btn-success form-control"/>
                    </div>
                </div>  
        
    </form>
    </div>
</div>