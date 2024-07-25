<script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!--Librería para gráficos-->
<?php 
include "modelos/bbdd/datos.php";

$mes_abril = listado_mes(4);
$mes_mayo = listado_mes(5);
$mes_junio = listado_mes(6);
$mes_julio = listado_mes(7);
$mes_agosto = listado_mes(8);
$listado_alumnos = listado_alumnos();
$listado = listado();

include "vistas/principal.html";
?>
<script>
    var ctx = document.getElementById("chart1"); //seleccionamos el elemento CANVAS
    var data = { 
        labels: [ //esta es la información que va debajo de la gráfica
            <?php foreach($listado as $datos):?>
            "<?php echo $datos["mes"];?>",
            <?php endforeach; ?>
            ],
        datasets: [{
            label: "Info 1",
            data: [
                <?php foreach($listado as $datos): ?>
                <?php echo $datos["info_1"]; ?>,
                <?php endforeach; ?>
            ],                
        backgroundColor: [
            "#FF6384",
            "#63FF84",
            "#84FF63",
            "#8463FF",
            "#6384FF",
            "#f0f01b"
            ]
        }]
    };
    var chart1 = new Chart(ctx, {
        type: "pie", //valores line, bar
        data: data,
    }); 

    //AQUÍ EMPIEZA EL GRÁFICO DE BARRAS

    var ctx2 = document.getElementById("chart2"); //seleccionamos el elemento CANVAS
    var data2 = { 
        labels: [ //esta es la información que va debajo de la gráfica
            <?php foreach($listado as $datos):?>
            "<?php echo $datos["mes"];?>",
            <?php endforeach; ?>
            ],
        datasets: [{
            label: "Info 1", 
            data: [
                <?php foreach($listado as $datos): ?>
                <?php echo $datos["info_1"]; ?>,
                <?php endforeach; ?>
            ],                
        backgroundColor: "#FF6384",
        borderWidth: 3
        }]
    };
    var options = {
        scales: {
            yAxes: [{ //será sobre el eje Y
                ticks:{
                    beginAtZero:true //comenzará desde 0
                }
            }]
        }
    };
    var chart2 = new Chart(ctx2, {
        type: "bar", //valores line, bar
        data: data2,
        options: options 
    });
</script>