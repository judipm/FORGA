<?php
include_once "config.php";

function listado_alumnos(){
    $mbd = new PDO('mysql:host='.SERVIDOR_BBDD.';dbname='.BBDD, USER_BBDD, PASSWORD_BBDD); 
    $alumnado = $mbd->query('SELECT * FROM alumnado');
    $array = $alumnado->fetchAll(PDO::FETCH_ASSOC);
    return($array);
}
function nuevo_alumno($i){ //me da pereza meter todo, está función está totalmente sin hacer
    $mbd = new PDO('mysql:host='.SERVIDOR_BBDD.';dbname='.BBDD, USER_BBDD, PASSWORD_BBDD); 
    $sql = "INSERT INTO datos (in) VALUES (?,?,?,?,?,?) ";
    $mbd->prepare($sql)->execute([$i]);
}



//esto es lo que usé de prueba para la prueba de las gráficas, por ahora no quiero borrarlo hasta que consiga hacer las gráficas reales.
function listado(){
    $mbd = new PDO('mysql:host='.SERVIDOR_BBDD.';dbname='.BBDD, USER_BBDD, PASSWORD_BBDD); 
    $pacientes = $mbd->query('SELECT * FROM datos');
    $array = $pacientes->fetchAll(PDO::FETCH_ASSOC);
    return($array);
}
function nuevos_datos($info_1, $info_2, $info_3, $info_4, $info_5, $info_6){
    $mbd = new PDO('mysql:host='.SERVIDOR_BBDD.';dbname='.BBDD, USER_BBDD, PASSWORD_BBDD); 
    $sql = "INSERT INTO datos (info_1, info_2, info_3, info_4, info_5, info_6) VALUES (?,?,?,?,?,?) ";
    $mbd->prepare($sql)->execute([$info_1, $info_2, $info_3, $info_4, $info_5, $info_6]);
}
?>