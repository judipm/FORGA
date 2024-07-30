<?php
include_once "config.php";

function listado_alumnos(){
    $mbd = new PDO('mysql:host='.SERVIDOR_BBDD.';dbname='.BBDD, USER_BBDD, PASSWORD_BBDD); 
    $alumnado = $mbd->query('SELECT * FROM alumnado');
    $array = $alumnado->fetchAll(PDO::FETCH_ASSOC);
    return($array);
}
function eliminar_usuario($id){
    $mbd = new PDO('mysql:host='.SERVIDOR_BBDD.';dbname='.BBDD, USER_BBDD, PASSWORD_BBDD);
    $sql = "DELETE FROM alumnado WHERE id = '$id'";
    $usuarios = $mbd->query($sql);
    $borrado = $usuarios->fetchAll(PDO::FETCH_ASSOC);
    return $borrado;
}
function nuevo_alumno($apellidos, $nombre, $fecha_atencion, $asistencia, $tipo_asistencia, $tipo_ausencia, $sexo, $prestacion, $nivel_estudios, $edad, $carnet, $vehiculo, $entrevista, $tipo_atencion, $situacion, $caso_ocupado, $discapacidad) {
    $mbd = new PDO('mysql:host='.SERVIDOR_BBDD.';dbname='.BBDD, USER_BBDD, PASSWORD_BBDD);
    $sql = "INSERT INTO alumnado (Apellidos, Nombre, Fecha_atencion, Asistencia, Info_asistencia, Info_ausencia, Sexo, Prestacion, Nivel_estudios, Edad, Carnet, Vehiculo, Tipo_entrevista, Tipo_atencion, Situacion, Ocupado, Discapacidad) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
     $mbd->prepare($sql)->execute([$apellidos, $nombre, $fecha_atencion, $asistencia, $tipo_asistencia, $tipo_ausencia, $sexo, $prestacion, $nivel_estudios, $edad, $carnet, $vehiculo, $entrevista, $tipo_atencion, $situacion, $caso_ocupado, $discapacidad]);    
}
function actualizar_alumno ($id, $apellidos, $nombre, $fecha_atencion, $asistencia, $tipo_asistencia, $tipo_ausencia, $sexo, $prestacion, $nivel_estudios, $edad, $carnet, $vehiculo, $entrevista, $tipo_atencion, $situacion, $caso_ocupado, $discapacidad){
    $mbd = new PDO('mysql:host='.SERVIDOR_BBDD.';dbname='.BBDD, USER_BBDD, PASSWORD_BBDD);
    $sql = "UPDATE alumnado SET Apellidos =?, Nombre =?, Fecha_atencion =?, Asistencia =?, Info_asistencia =?, Info_ausencia =?, Sexo =?, Prestacion =?, Nivel_estudios =?, Edad =?, Carnet =?, Vehiculo =?, Tipo_entrevista =?, Tipo_atencion =?, Situacion =?, Ocupado =?, Discapacidad =? WHERE id =?";
    $mbd->prepare($sql)->execute([$apellidos, $nombre, $fecha_atencion, $asistencia, $tipo_asistencia, $tipo_ausencia, $sexo, $prestacion, $nivel_estudios, $edad, $carnet, $vehiculo, $entrevista, $tipo_atencion, $situacion, $caso_ocupado, $discapacidad, $id]);
}
function listado_mes($mes){
    $mbd = new PDO('mysql:host='.SERVIDOR_BBDD.';dbname='.BBDD, USER_BBDD, PASSWORD_BBDD); 
    $sql = "SELECT Fecha_atencion, Asistencia, Tipo_entrevista,
            MONTH(Fecha_atencion) AS mes, /* la función MONTH() selecciona el mes dentro de una fecha tipo date */
            COUNT(MONTH(Fecha_atencion)) as recuentoTotal,  /* esta cuenta el total de fechas atentidas en el mes seleccionado */
            SUM(Asistencia = 'Si') as la_asistencia, /* una suma de todos los que confirmaron asistencia */
            SUM(Tipo_entrevista = 'IPI') as IPI, /* una suma de todos los IPI */
            SUM(Tipo_entrevista = 'No IPI') as NoIPI, /* una suma de todos los No IPI */
            SUM(Tipo_entrevista = 'IPI GX') as GX /* una suma de todos los IPI GX */
            FROM alumnado
            WHERE MONTH(Fecha_atencion) =". $mes; /* marcamos el mes para el que queremos sacar los datos */
    $alumnado = $mbd->query($sql);
    $array = $alumnado->fetchAll(PDO::FETCH_ASSOC);
    return($array);
}
function datos_un_usuario($id){	
	
		$mbd = new PDO('mysql:host='.SERVIDOR_BBDD.';dbname='.BBDD, USER_BBDD, PASSWORD_BBDD);
		$sql = "SELECT * FROM alumnado WHERE id='" . $id ."'";
		$usuarios = $mbd->query($sql);
		$usuario = $usuarios->fetch(PDO::FETCH_ASSOC);
		return $usuario;
    }

//esto es lo que usé de prueba para la prueba de las gráficas, por ahora no quiero borrarlo hasta que consiga hacer las gráficas reales.
function listado(){
    $mbd = new PDO('mysql:host='.SERVIDOR_BBDD.';dbname='.BBDD, USER_BBDD, PASSWORD_BBDD); 
    $pacientes = $mbd->query('SELECT * FROM datos');
    $array = $pacientes->fetchAll(PDO::FETCH_ASSOC);
    return($array);
}
?>
