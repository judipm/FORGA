<?php

include "modelos/bbdd/datos.php";

nuevos_datos($_POST["info_1"], $_POST["info_2"], $_POST["info_3"], $_POST["info_4"], $_POST["info_5"], $_POST["info_6"]);

header('location: index.php');
?>