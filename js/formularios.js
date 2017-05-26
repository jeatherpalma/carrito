$(document).ready(function() {
	$('#linkRegistrar').click(function() {
		
		$("#modalRegistro").load('http://localhost/carrito/contents/formularioregistro.php');
	});

	$("#linkLogin").click(function() {
		
		$("#modalLogin").load('http://localhost/carrito/contents/formulariologin.php');
	});
});	