<?php 
	session_start();
	$nombre = $_POST['nombre'];
	if(isset($_SESSION['carrito'])){
		if($nombre){
			$arreglo = $_SESSION['carrito'];
			$arregloAux =array();
			for ($i=0; $i <count($arreglo) ; $i++) { 
				if($arreglo[$i]['Nombre']!=$nombre){
					//Creamos el arreglo que será guardado en la variable de sesion
	       			$arregloDatosNuevos[] = array(
	       				'Id'=>$$arreglo[$i]['Id'],
	       				'Nombre' =>$arreglo[$i]['Nombre'],
	       				'Precio' => $arreglo[$i]['Precio'],
	       				'Imagen' => $arreglo[$i]['Imagen'],
	       				'Cantidad' =>$arreglo[$i]['Cantidad']
	       				);

	       			$arregloAux = array_merge($arregloAux,$arregloDatosNuevos);
       				

				}
			}
			$_SESSION['carrito']=$arregloAux;
			if(count($arregloAux)==0){
				unset($_SESSION['carrito']);
			}
		}
	}

?>