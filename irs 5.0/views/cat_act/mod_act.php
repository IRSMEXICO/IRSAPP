<?php
include("../../model/sesiones.php");
$id = $_GET['id'];
$tipo_act =  $url = $_GET['act'];
?>
<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Datos de Catalogo de Actividades</title>

	<!-- Bootstrap -->

	<link href="../../content/css/style_nav.css" rel="stylesheet">
	<style>
		.content {
			margin-top: 80px;
		}
	</style>
	

</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
<?php include('../../views/nav.php');?>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Datos del Catalogo de Actividades &raquo; Editar datos</h2>
			<hr />
			<form class="form-horizontal" action="../../controller/add_actividad.php" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">ID</label>
					<div class="col-sm-2">
						<input type="text" name="id" value="<?php echo $id ?>" class="form-control" readonly onmousedown="return false;" placeholder="NIK" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Tipo de actividad</label>
					<div class="col-sm-3">
						
						<input type="text" name="tipo_actividad" value="<?php echo $tipo_act ?>" class="form-control" placeholder="tipo_actividad" required>
					</div> 
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="save_act" class="btn btn-info" value="Guardar datos">
						<a href="cat_actividades.php" class="btn btn-danger">Cancelar</a>
						<a href="cat_actividades.php" class="btn btn-warning">Regresar al Catalogo</a>
					
					</div>
				</div>
			</form>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="../../content/js/bootstrap.min.js"></script>
	
</body>
</html>