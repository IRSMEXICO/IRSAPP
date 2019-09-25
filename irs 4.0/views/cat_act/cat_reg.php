<?php 
include("../../model/sesiones.php");//valida sesiona activa esta linea va en cada php que muestre info o que interacciones con el cliente
require_once("../../model/acciones.php");
$info_registro = new consul();
$registro = $info_registro->cat_registro();
?>
<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Datos de Catalogo de Contratos</title>

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
			<h2>Catalogo de Registros</h2>
			<hr />
		
			<div class="table-responsive">
			<table class="table table-striped table-hover">
				<tr>
				
					<th>ID</th>
                    <th>Tipo de Registro</th>
                    <th>Acciones </th>
					<th><a href="tregistro.php" button type="button"  title="Agregar datos"class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar Datos </button></th>
					
				</tr>
				<?php foreach ($registro as $reg) { ?>
						<tr>
							<td><?php echo $reg['id_registro']; ?></td>
							<td><?php echo $reg['tipo_registro']; ?></td>
							<td>
								<a href="mod_registro.php?id=<?php echo $reg['id_registro'];?>&reg=<?php echo $reg['tipo_registro'];?>" title="Editar datos" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Editar Datos</a>
								<a href="../../controller/del_registro.php?id=<?php echo $reg['id_registro'];?>" title="Eliminar" onclick="return confirm('¿Estas seguro que deseas eliminar el contrato <?php echo $reg['tipo_registro'];?>?');" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Eliminar</a>
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
