<?php 
include "modelos/bbdd/datos.php";
$listado_alumnos = listado_alumnos();
foreach($listado_alumnos as $alumno){
?>

<script>
    var tabla = "<tr><th>Apellidos</th><th>Nombre</th><th>Sexo</th><th>Edad</th><th>Situación actual</th><td></td></tr>";
    tabla =+ "<tr>";
    tabla =+ "<td>" + <?= $alumno["Apellidos"]; ?> + "</td>";
    tabla =+ "<td>" + <?= $alumno["Nombre"]; ?> + "</td>";
    tabla =+ "<td>" + <?= $alumno["Sexo"]; ?> + "</td>";
    tabla =+ "<td>" + <?= $alumno["Situacion"]; ?> + "</td>";
    tabla =+ "</tr>";                

    document.getElementById("listado").innerHTML = tabla;
    
function situacion_laboral(num){
    switch(num){
        case 1:
            document.getElementById("listado").innerHTML = $alumnado["Situacion"] == "Desempleado";
            break;
        case 2:
            document.getElementById("listado").innerHTML = $alumnado["Situacion"] == "Ocupado" ;
    }   
}
function sexo(num){
    switch(num){
        case 1:
            document.getElementById("listado").innerHTML = $alumnado["Sexo"] == "Mujer";
            break;
        case 2:
            document.getElementById("listado").innerHTML = $alumnado["Sexo"] == "Hombre";
            
    }   
}
function edad(num){
    switch(num){
        case 1:
            document.getElementById("listado").innerHTML = $alumnado["Edad"] < 35;
            break;
        case 2:
            document.getElementById("listado").innerHTML = $alumnado["Edad"] < 60 && $alumnado["Edad"] >= 35;
            break;
        case 3:
            document.getElementById("listado").innerHTML = $alumnado["Edad"] >= 60;
    }   
}
</script>

<?php 
}
include "vistas/listado_alumnos.html";
?>