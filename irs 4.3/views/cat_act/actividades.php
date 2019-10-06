<?php 
include("../../model/sesiones.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Latihan MySQLi</title>

	<!-- Bootstrap -->
	<link href="../../content/catalogos/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../content/catalogos/css/style_nav.css" rel="stylesheet">
	<style>
		.content {
			margin-top: 80px;
		}
	</style>

	
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<?php include("nav.php");?>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Datos del Catalogo de Actividades &raquo; Agregar datos</h2>
			<hr />
			<form class="form-horizontal" action="../../controller/add_actividad.php" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">Tipo de Actividad</label>
 					<div class="col-sm-2">
						<input type="text" name="tipo_actividad" class="form-control" placeholder="Tipo de Actividades" required>
					</div>
				</div>
				
				
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="add_actividad" class="btn btn-sm btn-primary" value="Guardar datos">
						<a href="cat_actividades.php" class="btn btn-sm btn-danger">Cancelar</a>
						<a href="cat_actividades.php" class="btn btn-sm btn-warning">Regresar al Catalogo</a>
					</div>
				</div>
			</form>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="../../content/catalogos/js/bootstrap.min.js"></script>
	
</body>
</html>
