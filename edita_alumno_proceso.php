<?php 

	
	include "modelos/bbdd/usuario.php";
	
	actualizar_usuario($_POST['apellidos'], $_POST['nombre'], $_POST['fecha_atencion'], $_POST['asistencia'], $_POST['tipo_asistencia'], $_POST['tipo_ausencia'], $_POST['sexo'], $_POST['prestacion'], $_POST['nivel_estudios'], $_POST['edad'], $_POST['carnet'], $_POST['vehiculo'], $_POST['entrevista'], $_POST['tipo_atencion'], $_POST['situacion'], $_POST['caso_ocupado'], $_POST['discapacidad']);
	
	header('Location: ficha_usuario.php?id_usuario=' . $_POST["id"]);

?>

