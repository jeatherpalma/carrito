<?php  
	session_start();
	require_once '../loginDatabase.php';
	$idlibro = $_POST['idlibro'];
	$cantidad = $_POST['cantidad'];
	if(isset($_SESSION['carrito'])){
		if($idlibro){
		$arreglo = $_SESSION['carrito'];
		$posicion = 0;
		$encontrado = false;

		//Ciclo que busca si el producto que viene ya se ecnuentra en el arreglo
		//para aumentar la cantidad
		for ($i=0; $i < count($arreglo); $i++) { 
			if($arreglo[$i]['Id']==$idlibro){
				$posicion = $i;
				$encontrado = true;
			}
		}

		if($encontrado){
			$arreglo[$posicion]['Cantidad'] =$arreglo[$posicion]['Cantidad']+$cantidad;
			$_SESSION['carrito'] = $arreglo;
		}else{
			$nombre = "";
			$precio = 0;
			$imagen ="";
			$sql = "SELECT * FROM libro WHERE idlibro='$idlibro'";
			$resultado = $conn->query($sql);
      		if($resultado->num_rows>0){
       			while ($row=$resultado->fetch_assoc()) {
       				$nombre = $row['nombre'];
       				$precio = $row['costo'];
       				$imagen = $row['imagen'];
       				echo $nombre," " ,$precio," ",$imagen;
       			}
       		}

       			//Creamos el arreglo que será guardado en la variable de sesion
       			$arregloDatosNuevos[] = array(
       				'Id'=>$idlibro,
       				'Nombre' =>$nombre,
       				'Precio' => $precio,
       				'Imagen' => $imagen,
       				'Cantidad' =>$cantidad
       				);

       			$arreglo = array_merge($arreglo,$arregloDatosNuevos);
       			$_SESSION['carrito']=$arreglo;
		}
		}

	}else{
		//Se agrega el nuevo producto al arreglo
		if($idlibro){
			$nombre = "";
			$precio = 0;
			$imagen ="";
			$sql = "SELECT * FROM libro WHERE idlibro='$idlibro'";
			$resultado = $conn->query($sql);
      		if($resultado->num_rows>0){
       			while ($row=$resultado->fetch_assoc()) {
       				$nombre = $row['nombre'];
       				$precio = $row['costo'];
       				$imagen = $row['imagen'];
       			}

       			//Creamos el arreglo que será guardado en la variable de sesion
       			$arregloProducto[] = array(
       				'Id'=>$idlibro,
       				'Nombre' =>$nombre,
       				'Precio' => $precio,
       				'Imagen' => $imagen,
       				'Cantidad' =>1
       				);


       			//Lo guardamos en la variable de sesión
       			$_SESSION['carrito']=$arregloProducto;

       		}
		}
	}



?>