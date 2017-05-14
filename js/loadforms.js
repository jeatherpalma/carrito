$(document).ready(function() {
	$('#linkRegistrar').click(function() {
		/* Act on the event */
		$("#modalRegistro").load('http://localhost/carrito/formularioregistro.php');
	});

	$("#linkLogin").click(function() {
		/* Act on the event */
		$("#modalLogin").load('http://localhost/carrito/formulariologin.php');
	});	

	$("#closeFormularioRegistro").click(function() {
		$("#formularioRegistro").reset();
		console.log("limpio");
	});
});