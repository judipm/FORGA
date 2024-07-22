<?php 

	include "modelos/bbdd/datos.php";
	$listado = listado_alumnos();
	$datos_usuario = datos_un_usuario($_GET["id"]);
	
	include "vistas/edita_alumno.html"; 

?>
