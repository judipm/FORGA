<?php
include_once "config.php";

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