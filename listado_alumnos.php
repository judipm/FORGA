
<?php 
include "modelos/bbdd/datos.php";
$listado_alumnos = listado_alumnos();

include "vistas/listado_alumnos.html";

?>