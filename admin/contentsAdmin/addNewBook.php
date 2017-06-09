<div class="panel panel-success">
    <div class="panel-heading" id="headerAddnewUser">Agregar nuevo Libro</div>
    <div class="panel-body">
        <!--<form action="../filePhp/ftpFiles.php" method="POST" enctype="multipart/form-data">-->
      
                <div class="form-group row">
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <label class="control-label">Nombre</label>
                        <input id="nombre" type="text" placeholder="Nombre" name="name" class="form-control"/>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <label for="autor">Autor</label>
                        <select id="autor" name="autor" class="form-control">
                        <?php  
                            require_once '../../filePhp/loginDatabase.php';
                            $sql = "SELECT nombre FROM autor";
                            $resultado = $conn->query($sql);
                            if($resultado->num_rows>0){
                                while ($row=$resultado->fetch_assoc()) {
                                    ?>
                                    <option><?php echo utf8_encode($row['nombre']);?></option>
                                    <?php
                                }
                                
                            }

                        ?>
                            
                        
                        </select>
                    </div>
                </div>
                
                <div class="form-group row">
                   <div class="col-xs-12 col-sm-8 col-md-6">
                        <label class="control-label">Descripción</label>
                        <textarea id="descripcion" class="form-control" cols="15" rows="5" placeholder="Descripcion del producto"></textarea>
                    </div>
                </div>  

                <div class="form-group row">
                   <div class="col-xs-12 col-sm-6 col-md-3">
                        <label for="categoria">Categoria</label>
                        <select id="categorias" name="categoria" class="form-control">
                        <?php  
                            require_once '../../filePhp/loginDatabase.php';
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
                        <label for="editorial">Editorial</label>
                        <select id="editorial" name="editorial" class="form-control">
                        <?php  
                            require_once '../../filePhp/loginDatabase.php';
                            $sql = "SELECT nombre FROM editorial";
                            $resultado = $conn->query($sql);
                            if($resultado->num_rows>0){
                                while ($row=$resultado->fetch_assoc()) {
                                    ?>
                                    <option><?php echo utf8_encode($row['nombre']);?></option>
                                    <?php
                                }
                                
                            }

                        ?>
                            
                        
                        </select>
                    </div>
                    
                </div> 

                <div class="form-group row">
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <label class="control-label">Costo</label>
                        <input id="costo" type="text" placeholder="$ 0.00" name="costo" class="form-control"/>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <label class="control-label">Páginas</label>
                        <input id="paginas" type="text" placeholder="0" name="paginas" class="form-control"/>
                    </div>
                   
                </div> 

                <div class="form-group row">
                    <div class="col-xs-12 col-sm-8 col-md-6">
                        <label class="control-label">Seleccciona la imagen</label>
                        <input id="image" type="file" name="image" class="file" />
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-xs-12 col-sm-8 col-md-6">
                        <button id="agregarLibro"  class="btn btn-success form-control">Agregar libro</button>
                    </div>
                </div>  
        
    
    </div>
</div>