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

	$('#barraNavegacionAdmin').on('click','.logout',function(){
		var parametros = {}
		var urlink = 'http://localhost/carrito/filePhp/logOut.php'
		ejecutaArchivo(parametros,urlink)
		location.reload()

	})

	$(".eliminarAutor").click(function(){
		$("#addAutor").load("http://localhost/carrito/admin/contentsAdmin/deleteAutor.php");
		$("#oculto").html("");
       
	});

	$('.eliminarEditorial').click(function(){
		$("#addAutor").load("http://localhost/carrito/admin/contentsAdmin/deleteEditorial.php");
        $("#oculto").html("");		
    })

    $("#barraNavegacionAdmin").on("click", "a.eliminarEditorial", function(){
        $("#addAutor").load("http://localhost/carrito/admin/contentsAdmin/deleteEditorial.php");
        $("#oculto").html("");	
	});

	$("#barraNavegacionAdmin").on("click", "a.eliminarAutor", function(){
        $("#addAutor").load("http://localhost/carrito/admin/contentsAdmin/deleteAutor.php");
        $("#oculto").html("");
	});

	$('.editarCategoria').click(function(){
		$("#addAutor").load("http://localhost/carrito/admin/contentsAdmin/editarCategoria.php");
        $("#oculto").html("");		
    })

    $("#barraNavegacionAdmin").on("click", "a.editarCategoria", function(){
        $("#addAutor").load("http://localhost/carrito/admin/contentsAdmin/editarCategoria.php");
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
		$("#oculto").html("");
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

	//Eliminación de editoriales
	$("#addAutor").on("click", "#eliminarAllEditorials", function(){
		var tipo = $("#tipoCategoria").val();
	     $("#oculto").load("http://localhost/carrito/admin/contentsAdmin/listAllEditorial.php")


	})
	$("#addAutor").on("keyup","#ediorial",function(){
		var str = $(this).val()
		$("#oculto").load("http://localhost/carrito/admin/contentsAdmin/listAllEditorial.php",{'str':str}) 
	})



	$("#oculto").on("click",".removeAutor",function(){
		var idAutor = $(this).attr("id");
	
		var actividad = "Eliminar autor";
        	$("#modalAdministrador" ).load( "http://localhost/carrito/admin/contentsAdmin/modalAdministrador.php",{'actividad':actividad,'idAutor':idAutor});
        	$("#modalAdministrador").modal();

	})

	$("#oculto").on("click",".removeEditorial",function(){
		var idEditorial = $(this).attr("id");
	
		var actividad = "Eliminar editorial";
        	$("#modalAdministrador" ).load( "http://localhost/carrito/admin/contentsAdmin/modalAdministrador.php",{'actividad':actividad,'idEditorial':idEditorial});
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

	$("#modalAdministrador").on("click","#borrarEditorial",function(){
			var idEditorial = $("p").attr('class')
			var parametros = {
				"idEditorial": idEditorial
			}			

			var url = 'http://localhost/carrito/filePhp/deleteEditorial.php'
			ejecutaArchivo(parametros,url)
			if (modal) {
				$("#modalAdministrador").modal('hide')
				$("#oculto").load("http://localhost/carrito/admin/contentsAdmin/listAllEditorial.php")
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
			document.getElementById("usuario").value = "";
			document.getElementById("password").value = "";
			$("#labelError").html("*Email o contraseña incorrecto").css("color", "red");
		}
		
	})

	
	//Evento agregar libro
	$("#addAutor").on("click","#agregarLibro",function(){
		var file = document.getElementById('image').files[0]
		var nombre = $("#nombre").val()
		var descripcion = $("#descripcion").val()
		var editorial = $('#editorial').val()
		var categoria = $("#categorias").val()
		var paginas = $("#paginas").val()
		var costo = $("#costo").val()
		var autor = $('#autor').val()
		

		var formData = new FormData();
		formData.append('categoria',categoria);
		formData.append('nombre',nombre);
		formData.append('image',file);
		formData.append('editorial',editorial);
		formData.append('paginas',paginas);
		formData.append('costo',costo);
		formData.append('autor',autor);
		formData.append('descripcion',descripcion);




		var urlin = 'http://localhost/carrito/filePhp/ftpFiles.php'
		
		if (window.XMLHttpRequest) {
    	
    		var request = new XMLHttpRequest();
 		} else {
    		var request = new ActiveXObject("Microsoft.XMLHTTP");
		} 
		 request.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
    			
     			if(this.response=='success'){
     				var actividad2 = "Agregar libro";
					document.getElementById("nombre").value = "";
					document.getElementById("descripcion").value = "";
					document.getElementById("image").value = "";
					document.getElementById("costo").value = "";
					document.getElementById("paginas").value = "";
		        	$( "#modalAdministrador" ).load( "http://localhost/carrito/admin/contentsAdmin/modalAdministrador.php",{'actividad':actividad2});
		        	$("#modalAdministrador").modal();
     			}else{
     				var actividad2 = "Agregar libro";
     				$( "#modalAdministrador" ).load( "http://localhost/carrito/admin/contentsAdmin/modalerrorAdministrador.php",{'actividad':actividad2});
		        	$("#modalAdministrador").modal();
     			}
    	   
    	    }
         };
		
		request.open("POST", urlin	);
		request.send(formData);

		
		
		
	})	

	//Edicion  de las categorias
	$("#addAutor").on("click", "#editAllCategorias", function(){
		var tipo = $("#tipoCategoria").val();
	     $("#oculto").load("http://localhost/carrito/admin/contentsAdmin/listCategorias.php")


	})
	$("#addAutor").on("keyup","#categorias",function(){
		var str = $(this).val()
		$("#oculto").load("http://localhost/carrito/admin/contentsAdmin/listCategorias.php",{'str':str}) 
	})



	$("#oculto").on("click",".editCategoria",function(){
		var idcategoria = $(this).attr("id");
		var valor = $('#oculto div input').val()
	
		var actividad = "Editar categoria";
        	$("#modalAdministrador" ).load( "http://localhost/carrito/admin/contentsAdmin/modalAdministrador.php",{'actividad':actividad,'idcategoria':idcategoria,'nombre':valor});
        	$("#modalAdministrador").modal();

	})

	$("#modalAdministrador").on("click","#editarCategoria",function(){
			var idCategoria = $("p").attr('class')
			var nombre = $('h1').attr('class')
			var parametros = {
				"idCategoria": idCategoria,
				'Nombre':nombre
			}			

			var url = 'http://localhost/carrito/filePhp/editCategoria.php'
			ejecutaArchivo(parametros,url)
			if (modal) {
				$("#modalAdministrador").modal('hide')
				$("#oculto").load("http://localhost/carrito/admin/contentsAdmin/listCategorias.php")
				modal = false

			}else{
				var actividad = "Editar categoria";
				var error = 'incorrecto'
				$("#modalAdministrador" ).load( "http://localhost/carrito/admin/contentsAdmin/modalAdministrador.php",{'actividad':actividad,'error':error});

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