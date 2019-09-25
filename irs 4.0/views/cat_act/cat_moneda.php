<?php 
include("../../model/sesiones.php");//valida sesiona activa esta linea va en cada php que muestre info o que interacciones con el cliente
require_once("../../model/acciones.php");
$info_moneda = new consul();
$moneda = $info_moneda->cat_moneda();
?>
<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Datos de Catalogo de Monedas</title>

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
			<h2>Catalogo de Monedas</h2>
			<hr />
			<br />

			<div class="table-responsive">
			<table class="table table-striped table-hover">
			<table class="table table-striped table-hover">
				<tr>
				
					<th>ID</th>
                    <th>Tipo de Moneda</th>
                    <th>Acciones </th>	
					<th><a href="moneda.php" button type="button"  title="Agregar datos"class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar Datos </button></th>
					
				</tr>
				<?php foreach ($moneda as $mon) { ?>
						<tr>
							<td><?php echo $mon['id_moneda']; ?></td>
							<td><?php echo $mon['tipo_moneda']; ?></td>
							<td>
								<a href="mod_moneda.php?id=<?php echo $mon['id_moneda'];?>&mod=<?php echo $mon['tipo_moneda']; ?>" title="Editar datos" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Editar Datos</a>
								<a href="../../controller/del_moneda.php?id=<?php echo $mon['id_moneda'];?>" title="Eliminar" onclick="return confirm('¿Estas seguro que deseas eliminar el contrato <?php echo $mon['tipo_moneda'];?>?');" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Eliminar</a>
							</td>
							 <td>
							 </tr>
				<?php } ?>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="../../content/js/bootstrap.min.js"></script>
</body>
</html>