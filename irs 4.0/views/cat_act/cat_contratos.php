<?php 
include("../../model/sesiones.php");//valida sesiona activa esta linea va en cada php que muestre info o que interacciones con el cliente
require_once("../../model/acciones.php");
$info_contrato = new consul();
$contrato = $info_contrato->cat_contrato();
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
			<h2>Catalogo de Contratos</h2>
			<hr />
			<br />

			<div class="table-responsive">
			<table class="table table-striped table-hover">
				<tr>
				
					<th>ID</th>
                    <th>Tipo de Contrato</th>
                    <th>Acciones </th>
					<th><a href="contratos.php" button type="button"  title="Agregar datos"class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar Datos </button></th>
					
				</tr>
				<?php foreach ($contrato as $con) { ?>
						<tr>
							<td><?php echo $con['id_contrato']; ?></td>
							<td><?php echo $con['tipo_contrato']; ?></td>
							<td>
								<a href="mod_contrato.php?id=<?php echo $con['id_contrato'];?>&con=<?php echo $con['tipo_contrato']; ?>" title="Editar datos" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Editar Datos</a>
								<a href="../../controller/del_contrato.php?id=<?php echo $con['id_contrato'];?>" title="Eliminar" onclick="return confirm('¿Estas seguro que deseas eliminar el contrato <?php echo $con['tipo_contrato'];?>?');" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Eliminar</a>
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
