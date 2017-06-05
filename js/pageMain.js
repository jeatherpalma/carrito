$(document).ready(function() {
	$("#barraNavegacion").load("http://localhost/carrito/contents/barraNavegacion2.php");
	$("#piePagina").load("http://localhost/carrito/contents/footerPag.php");
	$("#contenido").load("http://localhost/carrito/contents/contenedorTerror.php");
	$("#ca2").load("http://localhost/carrito/contents/carrusel.php");
	$("#contenidoPrincipal").load("http://localhost/carrito/contents/paginaPrincipal.php");
	


	$("#barraNavegacion").on("click", "#linkRegistrar", function(){
        $("#modalRegistro").load('http://localhost/carrito/contents/formularioregistro.php');
	});

	$("#barraNavegacion").on("click", "#linkLogin", function(){
        $("#modalLogin").load('http://localhost/carrito/contents/formulariologin.php');
	});

	$("#barraNavegacion").on("click","a.categorias",function(){
		
		var categoria = $(this).html();
		$("#contenidoPrincipal").load("http://localhost/carrito/contents/categorias.php?categoria="+categoria+"");
	});

	$("#barraNavegacion").on("click","#verCarrito",function(){
		$("#contenidoPrincipal").load("http://localhost/carrito/contents/verCarrito.php");
	});
	$("#contenidoPrincipal").on("click",'.removeProduct',function(){
		var nombre = $(this).attr("id");
		var parametros = {
			"nombre": nombre
		};
		var url = "http://localhost/carrito/filePhp/removeAllProduct.php";
		addCarrito(parametros,url);
		$("#contenidoPrincipal").load("http://localhost/carrito/contents/verCarrito.php");
		$("#barraNavegacion").load("http://localhost/carrito/contents/barraNavegacion2.php");
	});

	$("#contenidoPrincipal").on("click",".agregarCarrito",function(){
		var idlibro = $(this).attr('id');
		var cantidad = 1;
		var parametros = {
			"idlibro": idlibro,
			"cantidad" : cantidad
		};
   
		/*var nombre = $(".name").html();
		var costo = $(".costo").html();
		var imagen = $(".imgCat").attr('src');*/
		var urlFile = "http://localhost/carrito/filePhp/addCarrito.php";
		addCarrito(parametros,urlFile);
		$("#barraNavegacion").load("http://localhost/carrito/contents/barraNavegacion2.php");

		
	});
	//Variable detecta login correcto
	var login = false;
	//Metodo para el login del usuario
	$("#modalLogin").on("click","#loginUser",function(){
		var user = $("#email").val();
		var pass = $("#password").val();
		var parametros={
			"us":user,
			"pss":pass
		};
		var url = "http://localhost/carrito/contents/inicioSesion.php";
		addCarrito(parametros,url);
		if(login){
			$("#modalLogin").modal('hide')
			$("#barraNavegacion").load("http://localhost/carrito/contents/barraNavegacion2.php");
		}else{
			document.getElementById("email").value = "";
			document.getElementById("password").value = "";
			$("#etiquetaError").html("*Email o contraseña incorrecto").css("color", "red");
			
		}
	});

	//Cerrar seción
	$("#barraNavegacion").on("click","#cerrarSecion",function(){
		var parametros = {};
		var url = "http://localhost/carrito/contents/loggout.php";
		addCarrito(parametros,url);
		$("#barraNavegacion").load("http://localhost/carrito/contents/barraNavegacion2.php");
		login = false;
	});

	//Función que ejecuta los php
	function addCarrito (parametros,url) {
		$.ajax({
        	data : parametros,
        	url: url,
        	type: 'POST',
        	async: false,
        	ajaxSend : function(data){
        		 
        	},
        	success: function(data){
        		if(data == 'success'){
        		 	login = true;	
        		}
        		
        	},
        	error : function(data){
        		
        	}
        	
        });
	}

	
	//Ver más imagen
	$("#contenidoPrincipal").on("click",".imgCat",function(){
		var idlibro = $(".agregarCarrito").attr("id");
		$("#modalDescripcion").load("http://localhost/carrito/contents/descripcionProducto.php",{"idlibro":idlibro});
		$("#modalDescripcion").modal();
	});



});