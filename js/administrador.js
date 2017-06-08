$(document).ready(function() {
	if($("title").html()=="Admin Books Mex"){
		$("#contenido").load("http://localhost/carrito/admin/contentsAdmin/loginAdmin.php")
	}
	$("#barraNavegacionAdmin").load("http://localhost/carrito/admin/contentsAdmin/barraNavegacion.php");
	$(".agregarAutor").click(function(){
		$("#addAutor").load("http://localhost/carrito/admin/contentsAdmin/addAutor.php");
		$("#oculto").html("");	
	});

	$(".agregarCategoria").click(function(){
       $("#addAutor").load("http://localhost/carrito/admin/contentsAdmin/addCategory.php");
       $("#oculto").html("");
	});

	$(".addBook").click(function(){
		$("#addAutor").load("http://localhost/carrito/admin/contentsAdmin/addNewBook.php");
		$("#oculto").html("");
       
	});

	$(".agregarEditorial").click(function(){
		$("#addAutor").load("http://localhost/carrito/admin/contentsAdmin/addEditorial.php");
		$("#oculto").html("");
       
	});

	$("#barraNavegacionAdmin").on("click", "a.addBook", function(){
        $("#addAutor").load("http://localhost/carrito/admin/contentsAdmin/addNewBook.php");
        $("#oculto").html("");
	});

	$("#barraNavegacionAdmin").on("click", "a.agregarCategoria", function(){
       $("#addAutor").load("http://localhost/carrito/admin/contentsAdmin/addCategory.php");
       $("#oculto").html("");
	});

	$("#barraNavegacionAdmin").on("click", "a.agregarAutor", function(){
		$("#addAutor").load("http://localhost/carrito/admin/contentsAdmin/addAutor.php");
		$("#oculto").html("");
	});

	$("#barraNavegacionAdmin").on("click", "a.agregarEditorial", function(){
		$("#addAutor").load("http://localhost/carrito/admin/contentsAdmin/addEditorial.php");
		$("#oculto").html("");	
	});

	$(".eliminarAutor").click(function(){
		$("#addAutor").load("http://localhost/carrito/admin/contentsAdmin/deleteAutor.php");
		$("#oculto").html("");
       
	});

	$("#barraNavegacionAdmin").on("click", "a.eliminarAutor", function(){
        $("#addAutor").load("http://localhost/carrito/admin/contentsAdmin/deleteAutor.php");
        $("#oculto").html("");
	});


	$("#agregarAutor").click(function(){
		var x = document.getElementById("demoAcc");
	    if (x.className.indexOf("w3-show") == -1) {
	        x.className += " w3-show";
	        x.previousElementSibling.className += " w3-green";
	    } else { 
	        x.className = x.className.replace(" w3-show", "");
	        x.previousElementSibling.className = 
	        x.previousElementSibling.className.replace(" w3-green", "");
	    }
	});

	$("#agregarCategoria").click(function(){
		var x = document.getElementById("demoAcc2");
	    if (x.className.indexOf("w3-show") == -1) {
	        x.className += " w3-show";
	        x.previousElementSibling.className += " w3-green";
	    } else { 
	        x.className = x.className.replace(" w3-show", "");
	        x.previousElementSibling.className = 
	        x.previousElementSibling.className.replace(" w3-green", "");
	    }
	});

	$("#agregarEditorial").click(function(){
		var x = document.getElementById("demoAcc3");
	    if (x.className.indexOf("w3-show") == -1) {
	        x.className += " w3-show";
	        x.previousElementSibling.className += " w3-green";
	    } else { 
	        x.className = x.className.replace(" w3-show", "");
	        x.previousElementSibling.className = 
	        x.previousElementSibling.className.replace(" w3-green", "");
	    }
	});

	$("#agregarLibro").click(function(){
		var x = document.getElementById("demoAcc4");
	    if (x.className.indexOf("w3-show") == -1) {
	        x.className += " w3-show";
	        x.previousElementSibling.className += " w3-green";
	    } else { 
	        x.className = x.className.replace(" w3-show", "");
	        x.previousElementSibling.className = 
	        x.previousElementSibling.className.replace(" w3-green", "");
	    }
	});
    
    //Variable para el modal 
    var modal = false;
	$("#addAutor").on("click", "#addCategory", function(){
		$("#oculto").load("");
		var tipo = $("#tipoCategoria").val();
        var parametros = {
        	"tipo" : tipo
        };

        ejecutaArchivo(parametros,"http://localhost/carrito/filePhp/addCategory.php");
        if(modal){
        	var actividad2 = "Agregar categoria";
			document.getElementById("tipoCategoria").value = "";
        	$( "#modalAdministrador" ).load( "http://localhost/carrito/admin/contentsAdmin/modalAdministrador.php",{'actividad':actividad2});
        	$("#modalAdministrador").modal();
        	modal = false;
        }else{
        	var actividad2 = "Agregar categoria";
        	$( "#modalAdministrador" ).load( "http://localhost/carrito/admin/contentsAdmin/modalerrorAdministrador.php",{'actividad':actividad2});
        	$("#modalAdministrador").modal();

        }
		

	});

	$("#addAutor").on("click", "#addEditorial", function(){
		var nombre = $("#nombreEditorial").val();
        var parametros = {
        	"nombre" : nombre
        };
        

        ejecutaArchivo(parametros,"http://localhost/carrito/filePhp/addEditory.php");
        if(modal){
        	var actividad2 = "Agregar editorial";
			document.getElementById("nombreEditorial").value = "";
        	$( "#modalAdministrador" ).load( "http://localhost/carrito/admin/contentsAdmin/modalAdministrador.php",{'actividad':actividad2});
        	$("#modalAdministrador").modal();
        	modal = false;
        }else{
        	var actividad2 = "Agregar editorial";
        	$( "#modalAdministrador" ).load( "http://localhost/carrito/admin/contentsAdmin/modalerrorAdministrador.php",{'actividad':actividad2});
        	$("#modalAdministrador").modal();

        }
		

	});

	$("#addAutor").on("click", "#addAutor", function(){
		
		var nombre = $("#nombreAutor").val();
		var apellido = $("#apellido").val();
        var parametros = {
        	"nombre" : nombre,
        	"apellido": apellido
        };

        ejecutaArchivo(parametros,"http://localhost/carrito/filePhp/registerNewAutor.php");
        if(modal){
        	var actividad2 = "Agregar autor";
			document.getElementById("nombreAutor").value = "";
			document.getElementById("apellido").value = "";
        	$( "#modalAdministrador" ).load( "http://localhost/carrito/admin/contentsAdmin/modalAdministrador.php",{'actividad':actividad2});
        	$("#modalAdministrador").modal();
        	modal = false;
        }else{
        	var actividad2 = "Agregar autor";
        	$( "#modalAdministrador" ).load( "http://localhost/carrito/admin/contentsAdmin/modalerrorAdministrador.php",{'actividad':actividad2});
        	$("#modalAdministrador").modal();

        }
		

	});

	$("#addAutor").on("click", "#eliminarAutorAll", function(){
		var tipo = $("#tipoCategoria").val();
	     $("#oculto").load("http://localhost/carrito/admin/contentsAdmin/listAllAutors.php")


	})
	$("#addAutor").on("keyup","#autor",function(){
		var str = $(this).val()
		$("#oculto").load("http://localhost/carrito/admin/contentsAdmin/listAllAutors.php",{'str':str}) 
	})

	$("#oculto").on("click",".removeAutor",function(){
		var idAutor = $(this).attr("id");
	
		var actividad = "Eliminar autor";
        	$("#modalAdministrador" ).load( "http://localhost/carrito/admin/contentsAdmin/modalAdministrador.php",{'actividad':actividad,'idAutor':idAutor});
        	$("#modalAdministrador").modal();

	})

	$("#modalAdministrador").on("click","#borraElautor",function(){
			var idAutor = $("p").attr('class')
			var parametros = {
				"idAutor": idAutor
			}			

			var url = 'http://localhost/carrito/filePhp/deleteAutor.php'
			ejecutaArchivo(parametros,url)
			if (modal) {
				$("#modalAdministrador").modal('hide')
				$("#oculto").load("http://localhost/carrito/admin/contentsAdmin/listAllAutors.php")
				modal = false

			}else{
				var actividad = "Eliminar autor";
				var error = 'incorrecto'
				$("#modalAdministrador" ).load( "http://localhost/carrito/admin/contentsAdmin/modalAdministrador.php",{'actividad':actividad,'error':error});

			}
	})


	//Evento para el boton de login
	$("#contenido").on("click","#botonLogin",function(){
		var user = $("#usuario").val();
		var pass = $("#password").val();


		var parametros = {
			"usuario": user,
			"password": pass
		};



		var url = "http://localhost/carrito/filePhp/loginAdmin.php";
		//Ejecutamos el archivo php asincronamente
		ejecutaArchivo(parametros,url);
		if(modal){

			location.reload();
		}else{
			alert("Login incorrecto");
		}
		
	})

	

	

	function ejecutaArchivo (parametros,urlFile) {
		$.ajax({
        	data : parametros,
        	url: urlFile,
        	type: 'POST',
        	async: false,
        	ajaxSend : function(data){
        		 
        	},
        	success: function(data){
        		if(data == 'success'){
        		 	modal = true;	
        		}
        		
        	},
        	error : function(data){
        		
        	}
        	
        });
	}
	

});