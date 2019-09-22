<?php 
include("../../model/sesiones.php");//valida sesiona activa esta linea va en cada php que muestre info o que interacciones con el cliente
require_once("../../model/acciones.php");
$info_turno = new consul();
$turno = $info_turno->cat_turno();
?>
<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Datos de Catalogo de Turnos</title>

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
			<h2>Catalogo de Turnos</h2>
			<hr />

			<br />

			
			<div class="table-responsive">
			<table class="table table-striped table-hover">
				<tr>
				
					<th>ID</th>
                    <th>Tipo de Turno</th>
                    <th>Acciones </th>
					<th><a href="turno" button type="button"  title="Agregar datos"class="btn btn-success">Agregar Datos </button></th>
					
				</tr>
				<?php foreach ($turno as $tur) { ?>
						<tr>
							<td><?php echo $tur['id_turno']; ?></td>
							<td><?php echo $tur['tipo_turno']; ?></td>
							<td>
								<a href="mod_contrato?id=<?php echo $tur['id_turno'];?>&tur=<?php echo $tur['tipo_turno'];?>" title="Editar datos" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
								<a href="../../controller/del_turno?id=<?php echo $tur['id_turno'];?>" title="Eliminar" onclick="return confirm('¿Estas seguro que deseas eliminar el contrato <?php echo $tur['tipo_turno'];?>?');" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
							</td>
							 <td>
							 </tr>
				<?php } ?>
			</table>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
