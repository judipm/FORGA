<?php 

	include "modelos/bbdd/datos.php";
	
	$datos_usuario = datos_un_usuario($_GET["id"]);
	
	include "vistas/edita_alumno.html"; 

?>
