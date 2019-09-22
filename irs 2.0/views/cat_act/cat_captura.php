<?php 
include("../../model/sesiones.php");//valida sesiona activa esta linea va en cada php que muestre info o que interacciones con el cliente
require_once("../../model/acciones.php");
$info_captura = new consul();
$captura = $info_captura->cat_captura();
?>
<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Datos de Catalogo de Captura</title>

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
			<h2>Catalogo de Captura</h2>
			<hr />
			<br />

			
			<div class="table-responsive">
			<table class="table table-striped table-hover">
				<tr>
				
					<th>ID</th>
                    <th>Tipo de Captura</th>
                    <th>Acciones </th>
					<th><a href="captura" button type="button"  title="Agregar datos"class="btn btn-success">Agregar Datos </button></th>
					
				</tr>
				<?php foreach ($captura as $cap) { ?>
						<tr>
							<td><?php echo $cap['id_captura']; ?></td>
							<td><?php echo $cap['tipo_captura']; ?></td>
							<td>
								<a href="mod_captura?id=<?php echo $cap['id_captura'];?>&cap=<?php echo $cap['tipo_captura']; ?>" title="Editar datos" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
								<a href="../../controller/del_captura?id=<?php echo $cap['id_captura'];?>" title="Eliminar" onclick="return confirm('¿Estas seguro que deseas eliminar la captura <?php echo $actividad['tipo_captura'];?>?');" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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
