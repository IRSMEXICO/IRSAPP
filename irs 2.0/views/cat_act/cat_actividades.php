<?php 
include("../../model/sesiones.php");//valida sesiona activa esta linea va en cada php que muestre info o que interacciones con el cliente
require_once("../../model/acciones.php");
$info_actividades = new consul();
$actividades = $info_actividades->cat_actividades();
?>
<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Datos de Catalogo de Actividades</title>

	<!-- Bootstrap -->
	<link href="../../content/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../content/css/style_nav.css" rel="stylesheet">

	<style>
		.content {
			margin-top: 135px;
		}
	</style>

</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
	
		<?php include('nav.php');?>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Catalogo de Actividades</h2>
			<hr />

			<br />
			<div class="table-responsive">
			<table class="table table-striped table-hover">
				<tr>
				
					<th>ID</th>
                    <th>Codigo</th>
					<th>Actividad </th>
                    <th>Acciones </th>
					<th><a href="actividades.php" button type="button"  title="Agregar datos"class="btn btn-success">Agregar Datos </button></th>
					
				</tr>
				<?php foreach ($actividades as $actividad) { ?>
						<tr>
							<td><?php echo $actividad['id_codigo']; ?></td>
							<td><?php echo $actividad['codigo']; ?></td>
							<td><?php echo $actividad['tipo_actividad']; ?></td>
							<td>
								<a href="mod_act.php?id=<?php echo $actividad['id_codigo'];?>&act=<?php echo $actividad['tipo_actividad']; ?>" title="Editar datos" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
								<a href="../../controller/del_actividad.php?id=<?php echo $actividad['id_codigo'];?>" title="Eliminar" onclick="return confirm('¿Estas seguro que deseas eliminar la actividad <?php echo $actividad['id_codigo'];?>?');" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
							</td>
							 <td>
							 </tr>
				<?php } ?>
			</table>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="../../content/js/bootstrap.min.js"></script>
</body>
</html>
