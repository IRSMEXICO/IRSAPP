<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Agregar Roles</title>

<!--BOOTSTRAP-->
		<link href="../../content/css/style_nav.css" rel="stylesheet">

		<!--**BOOTSTRAP**-->
       
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<style>

.content {
  margin-top: 50px;
}
</style>
 </head>
 <body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<?php include('../../views/nav.php');?>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Datos del Catalogo de Roles &raquo; Agregar datos</h2>
			<hr />
			<form class="form-horizontal" action="../../controller/add_actividad.php" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">Roles</label>
 					<div class="col-sm-3">
						<input type="text" name="tipo_rol" class="form-control" placeholder="Roles" required>
					</div>
				</div>
				
				
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="add_rol" class="btn btn-info" value="Guardar datos">
						<a href="cat_roles.php" class="btn btn-danger">Cancelar</a>
						<a href="cat_roles.php" class="btn btn-warning">Regresar al Catalogo</a>
					</div>
				</div>
			</form>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="../../content/catalogos/js/bootstrap.min.js"></script>
	
</body>
</html>