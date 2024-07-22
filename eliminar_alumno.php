<?php
include "modelos/bbdd/datos.php";
eliminar_usuario($_GET["id"]);
header('location: listado_alumnos.php');
?>