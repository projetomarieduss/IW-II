<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa</title>
</head>
<body>

<div id="regions_div" style="width: 900px; height: 500px;"></div>
<?php

$hab=[20000,30000,4000000,3500000,60000,700000,80000,2540000];
$lug=['Germany','United States','Brazil','Canada','France','RU','Australia','Milan'];
$tam= count($hab);
?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {
        'packages':['geochart'],
      });
      google.charts.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {
        var data = google.visualization.arrayToDataTable([
          ['País', 'População'],
         
          <?php
          for ($i=0; $i<$tam ; $i++) { 
         ?>
          ['<?= $lug[$i];?>',  <?= $hab[$i];?> ],
         <?php

}
          
          ?>
        ]);

        var options = {};

        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

        chart.draw(data, options);
      }
    </script>
 
    
 

    
</body>
</html>