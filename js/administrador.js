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

	$("#barraNavegacionAdmin").on("click", "a.addBook", function(){
        $("#addAutor").load("http://localhost/carrito/admin/addNewBook.php");
	});

	$("#barraNavegacionAdmin").on("click", "a.agregarCategoria", function(){
       $("#addAutor").load("http://localhost/carrito/admin/addCategory.php");
	});

	$("#barraNavegacionAdmin").on("click", "a.agregarAutor", function(){
		$("#addAutor").load("http://localhost/carrito/admin/addAutor.php");
	});
});