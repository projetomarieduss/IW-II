<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplos de gráficos com JS e PHP</title>
</head>
<body>

<div id="curve_chart" style="width: 900px; height: 500px"></div>

<?php
 $dados= [12,34,43,23,56,86];
 $meses=['janeiro','fevereiro','março','abril', 'maio','junho'];
 $tam= count($dados);

?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Meses', 'Valor'],

          <?php
          for ($i=0; $i<$tam ; $i++) { 
         ?>
          ['<?= $meses[$i];?>',  <?= $dados[$i];?> ],
         <?php

}
          
          ?>
        ]);

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>

    
</body>
</html>