<?php 
	include "modelos/bbdd/datos.php";
	$carnet = implode(",", $_POST['carnet']);
	actualizar_alumno($_POST["id"],$_POST['apellidos'], $_POST['nombre'], $_POST['fecha_atencion'], $_POST['asistencia'], $_POST['tipo_asistencia'], $_POST['tipo_ausencia'], $_POST['sexo'], $_POST['prestacion'], $_POST['nivel_estudios'], $_POST['edad'], $carnet, $_POST['vehiculo'], $_POST['entrevista'], $_POST['tipo_atencion'], $_POST['situacion'], $_POST['caso_ocupado'], $_POST['discapacidad']);
	
	header('location: listado_alumnos.php');

?>

