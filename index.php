<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="refresh" content="30">
	
	<title>Parcial III Linux</title>
	
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	
	<!-- Scripts de Graficas -->
	<script type="text/javascript" src="js/donut-ram.js"></script>
	<script type="text/javascript" src="js/gauge-cpu.js"></script>
</head>

<body>
	<!-- Divs -->
	<div id="piechart_3d" style="width: 400px; height: 300px;"></div>
	<div id="chart_div" style="width: 400px; height: 120px;"></div>
	
	<!-- PHP calls -->
	<?php exec ("scripts/ram.py", $salida) ?>
	<?php exec ("scripts/cpu.py", $salida) ?>
</body>

</html>