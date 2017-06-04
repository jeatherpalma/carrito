<a href="#" class="cart-box" id="cart-info" title="Ver carrito">
	<?php 
	session_start();
		if(isset($_SESSION['carrito'])){
			echo count($_SESSION['carrito']);
			$arreglo = $_SESSION['carrito'];
			echo $arreglo[0]["Cantidad"];
		}else{
			echo 0;
		}
	 ?>
</a>

<div class="shopping-cart-box">
	<a href="" class="close-shopping-cart-box">Close</a>
	<h3>Tu carrito de compras</h3>
	<div id="shopping-cart-results">
		
	</div>
</div>