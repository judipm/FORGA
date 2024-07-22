
<?php 
include "modelos/bbdd/datos.php";
$listado_alumnos = listado_alumnos();

$situacion_laboral = $_POST["situacion"];
$sexo = $_POST["sexo"];
$edad = $_POST["edad"];
    
include "vistas/listado_alumnos_filtrado.html";

?>