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
		var actividad = "Agregar carrito";
		var urlimagen = $(".imgCat").attr('src')
        $( "#modalRegistro" ).load( "http://localhost/carrito/contents/modalAlert.php",{'actividad':actividad,'imagen':urlimagen});
        $("#modalRegistro").modal()

		
	});
	$("#modalRegistro").on("click","#verCarrito",function(){
		$("#modalRegistro").modal('hide')
		$("#contenidoPrincipal").load("http://localhost/carrito/contents/verCarrito.php")
	})
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

	//Metodo para el registro del usuario
	//Metodo para el registro del usuario
	$("#modalRegistro").on("click","#registroUser",function(){
		//Variable para el estado del registro
		login = false
		//Datos del usuario
		var user = $("#usuario").val()
		var pass = $("#contrasena").val()
		var pass2 = $("#contrasena2").val()
		var nombre = $("#nombre").val()
		var apellidos = $("#apellidos").val()
		var telefono = $("#telefono").val()
		//Se crea el arreglo para mandarlo por post
		var parametros={
			'usuario':user,
			'contrasena':pass,
			'nombre':nombre,
			'apellidos':apellidos,
			'telefono':telefono
		};


		
		
		//URL del archivo que e va a ejecutar
		var url = "http://localhost/carrito/filePhp/registerUser.php";
		if(pass==pass2){
			//Ejecutamos el archivo
			addCarrito(parametros,url);
			//comprobamos el estado del login
			if(login){
				var actividad = "Registro";
        		$( "#modalRegistro" ).load( "http://localhost/carrito/contents/modalAlert.php",{'actividad':actividad});
			}else{
				document.getElementById("contrasena").value = "";
				document.getElementById("contrasena2").value = "";
				document.getElementById("nombre").value = "";
				document.getElementById("usuario").value = "";
				document.getElementById("apellidos").value = "";
				document.getElementById("telefono").value = "";
				$("#etiquetaError").html("Error de registro checa tus campos").css("color", "red");
			}
		}else{
				document.getElementById("contrasena").value = "";
				document.getElementById("contrasena2").value = "";
				$("#etiquetaError").html("*Las contraeñas no coinciden").css("color", "red");
		}
		
	})

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