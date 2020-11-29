<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">

	<title>Parcial III Linux</title>

	<script type="text/javascript" src="../js/refresh.js"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<!-- Scripts de Graficas -->
	<script type="text/javascript" src="../js/donut-ram.js"></script>
	<script type="text/javascript" src="../js/gauge-cpu.js"></script>
	<script type="text/javascript" src="../js/treemap-disk.js"></script>
	<script type="text/javascript" src="../js/table-process.js"></script>
</head>

<body>
	<!-- Header -->
	<nav>
		<ul class="navbar navbar-dark bg-dark nav py-md-3 shadow justify-content-center">
			<li class="nav-item text-light">
				<h2><strong>Linux Dashboard</strong></h2>
			</li>
		</ul>
		<ul class="nav py-md-2 shadow justify-content-center">
			<li class="nav-item">
				<a class="nav-link active" href="#">Recursos</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="usuarios.php">Usuarios</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Acerca de</a>
			</li>
		</ul>
	</nav>

	<!-- Contenedores -->
	<div class="container py-md-4">
		<div class="card-deck p-md-2">
			<div class="card shadow mb-1">
				<div class="card-header">
					<strong>Top Procesos</strong>
				</div>
				<div class="card-body">
					<!-- Tabla de Procesos -->
					<div id="table_div"></div>
				</div>
			</div>
		</div>
		<div class="card-deck p-md-2">
			<div class="card shadow mb-1">
				<div class="card-header">
					<strong>Uso de CPU</strong>
				</div>
				<div class="card-body">
					<div class="container" style="height: 100%;">
						<div class="row justify-content-md-center" style="height: 100%;">
							<table style="height: 100%;">
								<tbody>
									<tr>
										<td class="align-middle">
											<!-- Uso de CPU -->
											<div id="chart_div" style="width: 360px; height: 150px;"></div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="card shadow mb-1">
				<div class="card-header">
					<strong>Uso de RAM</strong>
				</div>
				<div class="card-body">
					<div class="row justify-content-center" style="height: 200px;">
						<!-- Uso de RAM -->
						<div id="piechart_3d" style="height: 225px; margin-top: -20px;"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="card-deck p-md-2">
			<div class="card shadow mb-2">
				<div class="card-header">
					<strong>Uso de Disco</strong>
				</div>
				<div class="card-body">
					<!-- Uso de Disco -->
					<div id="chart_disk"></div>
				</div>
			</div>
		</div>
		<div class="row justify-content-center py-md-1">
			<span id="date" class="text-black-50"></span>
		</div>
	</div>

	<!-- PHP calls -->
	<?php exec("sudo ../scripts/ram.py") ?>
	<?php exec("sudo ../scripts/cpu.py") ?>
	<?php exec("sudo ../scripts/disk.py") ?>
	<?php exec("sudo ../scripts/process.py") ?>

	<!-- Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
	</script>

	<!-- Otros JS -->
	<script type="text/javascript" src="../js/update-time.js"></script>
</body>

</html>