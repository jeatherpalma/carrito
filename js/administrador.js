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


	

});