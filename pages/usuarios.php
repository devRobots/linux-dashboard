<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="refresh" content="30">

	<title>Parcial III Linux</title>

	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<!-- Scripts de Graficas -->
	<script type="text/javascript" src="../js/table-user.js"></script>
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
				<a class="nav-link" href="dashboard.php">Recursos</a>
			</li>
			<li class="nav-item">
				<a class="nav-link active" href="#">Usuarios</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Acerca de</a>
			</li>
		</ul>
	</nav>

	<!-- Contenedores -->
	<div class="container py-md-4">
		<div class="card-deck p-md-2">
			<div class="col-4">
				<div class="card shadow">
					<div class="card-header">
						<strong>Usuario nuevo</strong>
					</div>
					<div class="card-body ">
						<form action="../php/crearUsuario.php">
							<div class="form-group">
								<label for="txtUsuario">Nombre de usuario</label>
								<input type="name" class="form-control form-control-sm" id="txtUsuario" name="txtUsuario" required>
							</div>
							<div class="form-group">
								<label for="txtContraseña">Contraseña</label>
								<input type="password" class="form-control form-control-sm" id="txtContraseña" name="txtContraseña" required>
							</div>
							<div class="form-group">
								<label for="txtDescripcion">Descripcion</label>
								<input type="textarea" class="form-control form-control-sm" id="txtDescripcion" name="txtDescripcion">
							</div>
							<div class="form-group">
								<label for="cmbShell">Shell</label>
								<select class="form-control form-control-sm" id="cmbShell" name="cmbShell">
									<option>/bin/bash</option>
									<option>/bin/sh</option>
									<option>/bin/false</option>
								</select>
							</div>
							<div class="form-group form-check">
								<input type="checkbox" class="form-check-input" id="checkHome" name="checkHome">
								<label class="form-check-label" for="radHome">
									Crear home
								</label>
							</div>
							<button type="submit" class="btn btn-primary btn-block">Crear Usuario</button>
						</form>
					</div>
				</div>
			</div>
			<div class="col-8">
				<div class="card shadow">
					<div class="card-header">
						<strong>Lista de usuarios</strong>
					</div>
					<div class="card-body">
						<div id="table_div"></div>
					</div>
				</div>
				<div class="row justify-content-center my-md-3">
					<span id="date" class="text-black-50"></span>
				</div>
			</div>
		</div>
	</div>

	<!-- PHP calls -->
	<?php exec("sudo ../scripts/usuarios.py") ?>

	<!-- Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
	</script>

	<!-- Otros JS -->
	<script type="text/javascript" src="../js/update-time.js"></script>
</body>

</html>