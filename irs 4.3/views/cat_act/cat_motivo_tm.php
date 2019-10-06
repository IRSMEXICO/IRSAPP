<?php 
include("../../model/sesiones.php");//valida sesiona activa esta linea va en cada php que muestre info o que interacciones con el cliente
require_once("../../model/acciones.php");
$info_motivo= new consul();
$motivos = $info_motivo->cat_mot();
?>
<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Datos de Catalogo de Motivos TM</title>

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
			<h2>Catalogo de Motivos TM</h2>
			<hr />
			<br />		
			<div class="table-responsive">
			<table class="table table-striped table-hover">
				<tr>
				
					<th>ID</th>
					<th>Motivo_tm </th>
                    <th>Acciones </th>
					<th><a href="motivos_tm.php" button type="button"  title="Agregar datos"class="btn btn-success">Agregar Datos </button></th>
					
				</tr>
				<?php foreach ($motivos as $mot) { ?>
						<tr>
							<td><?php echo $mot['id_motivo_tm']; ?></td>
							<td><?php echo $mot['tipo_motivo_tm']; ?></td>
							<td>
								<a href="mod_motivo_tm.php?id=<?php echo $mot['id_motivo_tm'];?>&mot=<?php echo $mot['tipo_motivo_tm']; ?>" title="Editar datos" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
								<a href="../../controller/del_motivo_tm.php?id=<?php echo $mot['id_motivo_tm'];?>" title="Eliminar" onclick="return confirm('¿Estas seguro que deseas eliminar la actividad <?php echo $mot['tipo_motivo_tm'];?>?');" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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
