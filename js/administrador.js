$(document).ready(function() {
	$("#barraNavegacionAdmin").load("http://localhost/carrito/admin/barraNavegacion.php");
	$(".agregarAutor").click(function(){
		$("#addAutor").load("http://localhost/carrito/admin/addAutor.php");
	});

	$(".agregarCategoria").click(function(){
       $("#addAutor").load("http://localhost/carrito/admin/addCategory.php");
	});

	$(".addBook").click(function(){
		$("#addAutor").load("http://localhost/carrito/admin/addNewBook.php");
       
	});

	$(".agregarEditorial").click(function(){
		$("#addAutor").load("http://localhost/carrito/admin/addEditorial.php");
       
	});

	$("#barraNavegacionAdmin").on("click", "a.addBook", function(){
        $("#addAutor").load("http://localhost/carrito/admin/addNewBook.php");
	});

	$("#barraNavegacionAdmin").on("click", "a.agregarCategoria", function(){
       $("#addAutor").load("http://localhost/carrito/admin/addCategory.php");
	});

	$("#barraNavegacionAdmin").on("click", "a.agregarAutor", function(){
		$("#addAutor").load("http://localhost/carrito/admin/addAutor.php");
	});

	$("#barraNavegacionAdmin").on("click", "a.agregarEditorial", function(){
		$("#addAutor").load("http://localhost/carrito/admin/addEditorial.php");
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
		var tipo = $("#tipoCategoria").val();
        var parametros = {
        	"tipo" : tipo
        };

        ejecutaArchivo(parametros,"http://localhost/carrito/filePhp/addCategory.php");
        if(modal){
        	var actividad2 = "Agregar categoria";
			document.getElementById("tipoCategoria").value = "";
        	$( "#modalAdministrador" ).load( "http://localhost/carrito/admin/modalAdministrador.php",{'actividad':actividad2});
        	$("#modalAdministrador").modal();
        	modal = false;
        }else{
        	var actividad2 = "Agregar categoria";
        	$( "#modalAdministrador" ).load( "http://localhost/carrito/admin/modalerrorAdministrador.php",{'actividad':actividad2});
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
        	$( "#modalAdministrador" ).load( "http://localhost/carrito/admin/modalAdministrador.php",{'actividad':actividad2});
        	$("#modalAdministrador").modal();
        	modal = false;
        }else{
        	var actividad2 = "Agregar editorial";
        	$( "#modalAdministrador" ).load( "http://localhost/carrito/admin/modalerrorAdministrador.php",{'actividad':actividad2});
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
        	$( "#modalAdministrador" ).load( "http://localhost/carrito/admin/modalAdministrador.php",{'actividad':actividad2});
        	$("#modalAdministrador").modal();
        	modal = false;
        }else{
        	var actividad2 = "Agregar autor";
        	$( "#modalAdministrador" ).load( "http://localhost/carrito/admin/modalerrorAdministrador.php",{'actividad':actividad2});
        	$("#modalAdministrador").modal();

        }
		

	});

	

	

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