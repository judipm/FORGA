<script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!--Librería para gráficos-->
<?php 
include "modelos/bbdd/datos.php";

$mes_abril = listado_mes(4);
$mes_mayo = listado_mes(5);
$mes_junio = listado_mes(6);
$mes_julio = listado_mes(7);
$mes_agosto = listado_mes(8);
$mes_septiembre = listado_mes(9);
$mes_octubre = listado_mes(10);
$mes_noviembre = listado_mes(11);
$mes_diciembre = listado_mes(12);
$listado_alumnos = listado_alumnos();
$listado = listado();

include "vistas/principal.html";
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.1/xlsx.full.min.js"></script>
<script>
    //EXPORTAR LOS ARCHIVOS A UN EXCEL
    function exportarTablaAExcel(idTabla, nombreArchivo) {
        var wb = XLSX.utils.book_new();
        var ws = XLSX.utils.table_to_sheet(document.getElementById(idTabla));
        XLSX.utils.book_append_sheet(wb, ws, "Hoja1");
        XLSX.writeFile(wb, nombreArchivo);
    }

    var ctx = document.getElementById("chart1"); //seleccionamos el elemento CANVAS "chart1"
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

    var ctx2 = document.getElementById("chart2"); //seleccionamos el elemento CANVAS "chart2"
    var data2 = { 
        labels: [ //esta es la información que va debajo de la gráfica
            <?php foreach($mes_abril as $datos):?>
            "<?php echo $datos["mes"];?>",
            <?php endforeach; ?>
            ],
        datasets: [{
            label: "Info 1", 
            data: [
                <?php foreach($mes_abril as $datos): ?>
                <?php echo $datos["recuentoTotal"]; ?>,
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

// GRAFICOS DE BARRAS CON PLOTLY

    var trace1 = {
      x: ['Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
      y: [<?php foreach($mes_abril as $mes){echo $mes["recuentoTotal"];}?>, <?php foreach($mes_mayo as $mes){echo $mes["recuentoTotal"];}?>,<?php foreach($mes_junio as $mes){echo $mes["recuentoTotal"];}?>, <?php foreach($mes_julio as $mes){echo $mes["recuentoTotal"];}?>, <?php foreach($mes_agosto as $mes){echo $mes["recuentoTotal"];}?>, <?php foreach($mes_septiembre as $mes){echo $mes["recuentoTotal"];}?>, <?php foreach($mes_octubre as $mes){echo $mes["recuentoTotal"];}?>, <?php foreach($mes_noviembre as $mes){echo $mes["recuentoTotal"];}?>, <?php foreach($mes_diciembre as $mes){echo $mes["recuentoTotal"];}?>],
      name: 'Total de personas atendidas',
      type: 'bar'
    };

    var trace2 = {
      x: ['Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
      y: [<?php foreach($mes_abril as $mes){echo $mes["la_asistencia"];}?>, <?php foreach($mes_mayo as $mes){echo $mes["la_asistencia"];}?>,<?php foreach($mes_junio as $mes){echo $mes["la_asistencia"];}?>, <?php foreach($mes_julio as $mes){echo $mes["la_asistencia"];}?>, <?php foreach($mes_agosto as $mes){echo $mes["la_asistencia"];}?>, <?php foreach($mes_septiembre as $mes){echo $mes["recuentoTotal"];}?>, <?php foreach($mes_octubre as $mes){echo $mes["recuentoTotal"];}?>, <?php foreach($mes_noviembre as $mes){echo $mes["recuentoTotal"];}?>, <?php foreach($mes_diciembre as $mes){echo $mes["recuentoTotal"];}?>],
      name: 'Asistieron a la entrevista',
      type: 'bar'
    };

    var trace3 = {
      x: ['Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
      y: [<?php foreach($mes_abril as $mes){echo $mes["NoIPI"];}?>, <?php foreach($mes_mayo as $mes){echo $mes["NoIPI"];}?>,<?php foreach($mes_junio as $mes){echo $mes["NoIPI"];}?>, <?php foreach($mes_julio as $mes){echo $mes["NoIPI"];}?>, <?php foreach($mes_agosto as $mes){echo $mes["NoIPI"];}?>, <?php foreach($mes_septiembre as $mes){echo $mes["NoIPI"];}?>, <?php foreach($mes_octubre as $mes){echo $mes["NoIPI"];}?>, <?php foreach($mes_noviembre as $mes){echo $mes["NoIPI"];}?>, <?php foreach($mes_diciembre as $mes){echo $mes["NoIPI"];}?>],
      name: 'No IPI',
      type: 'bar'
    };

    var trace4 = {
      x: ['Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
      y: [<?php foreach($mes_abril as $mes){echo $mes["IPI"];}?>, <?php foreach($mes_mayo as $mes){echo $mes["IPI"];}?>,<?php foreach($mes_junio as $mes){echo $mes["IPI"];}?>, <?php foreach($mes_julio as $mes){echo $mes["IPI"];}?>, <?php foreach($mes_agosto as $mes){echo $mes["IPI"];}?>, <?php foreach($mes_septiembre as $mes){echo $mes["IPI"];}?>, <?php foreach($mes_octubre as $mes){echo $mes["IPI"];}?>, <?php foreach($mes_noviembre as $mes){echo $mes["IPI"];}?>, <?php foreach($mes_diciembre as $mes){echo $mes["IPI"];}?>],
      name: 'IPI',
      type: 'bar'
    };

    var trace5 = {
      x: ['Abril', 'Mayo', 'Junio', 'Julio', 'Agosto'],
      y: [<?php foreach($mes_abril as $mes){echo $mes["GX"];}?>, <?php foreach($mes_mayo as $mes){echo $mes["GX"];}?>,<?php foreach($mes_junio as $mes){echo $mes["GX"];}?>, <?php foreach($mes_julio as $mes){echo $mes["GX"];}?>, <?php foreach($mes_agosto as $mes){echo $mes["GX"];}?>, <?php foreach($mes_septiembre as $mes){echo $mes["GX"];}?>, <?php foreach($mes_octubre as $mes){echo $mes["GX"];}?>, <?php foreach($mes_noviembre as $mes){echo $mes["GX"];}?>, <?php foreach($mes_diciembre as $mes){echo $mes["GX"];}?>],
      name: 'IPI GX',
      type: 'bar'
    };
    var data = [trace1, trace2, trace3, trace4, trace5];

    var layout = {barmode: 'group'};

    Plotly.newPlot('myDiv', data, layout);
</script>