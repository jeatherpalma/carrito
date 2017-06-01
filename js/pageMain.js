$(document).ready(function() {
	$("#barraNavegacion").load("http://localhost/carrito/contents/barraNavegacion2.php");
	$("#piePagina").load("http://localhost/carrito/contents/footerPag.php");
	$("#contenido").load("http://localhost/carrito/contents/contenedorTerror.php");
	$("#ca2").load("http://localhost/carrito/contents/carrusel.php");
	$("#contenidoPrincipal").load("http://localhost/carrito/contents/paginaPrincipal.php");


	$("#barraNavegacion").on("click", "#linkLogin", function(){
        $("#modalRegistro").load('http://localhost/carrito/contents/formularioregistro.php');
	});

	$("#barraNavegacion").on("click", "#linkRegistrar", function(){
        $("#modalLogin").load('http://localhost/carrito/contents/formulariologin.php');
	});

	$("#barraNavegacion").on("click","a.categorias",function(){
		
		var categoria = $(this).html();
		$("#contenidoPrincipal").load("http://localhost/carrito/contents/categorias.php?categoria="+categoria+"");
	});


});