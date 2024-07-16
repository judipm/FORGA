<script>
    function elegirfilm(num){
    switch(num){
        case 1:
            document.getElementById("listado").innerHTML = '<img src="img/sociedad.jpg" width="350"/>';
            break;
        case 2:
            document.getElementById("listado").innerHTML = '<img src="img/titanic.jpg" width="350"/>';
            break;
        case 3:
            document.getElementById("listado").innerHTML = '<img src="img/abremejaime.jpg" width="350"/>';
            break;
        case 4:
            document.getElementById("listado").innerHTML = '<img src="img/it.jpg" width="350"/>';
    }   
}
</script>
<?php 
include "modelos/bbdd/datos.php";

$listado_alumnos = listado_alumnos();

include "vistas/listado_alumnos.html";
?>