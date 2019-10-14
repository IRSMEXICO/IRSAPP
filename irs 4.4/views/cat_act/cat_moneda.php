<?php 
include("../../model/sesiones.php");//valida sesiona activa esta linea va en cada php que muestre info o que interacciones con el cliente
require_once("../../model/acciones.php");
$info_moneda = new consul();
$moneda = $info_moneda->cat_moneda();
?>
<!DOCTYPE html>
<html lang="es">
<head>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Datos de Catalogo de Monedas</title>

	<!-- Bootstrap -->
	<link href="../../content/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../content/css/style_nav.css" rel="stylesheet">

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
			<h2>Catalogo de Monedas</h2>
			<hr />
			<br />
			<form style="float: right;" action= "moneda.php">
			<button style="float: right;"  type="submit"  class="btn btn-success" value="Agregar Datos" ><span class="fas fa-plus-circle" ></span> Agregar Datos </button>
	</form>
			<br />
			<br />
			<div class="table-responsive">
			<table class="table table-hover">
			<thead class="thead-light">
				<tr>
				
					<th>ID</th>
                    <th>Tipo de Moneda</th>
                    <th>Acciones </th>	
					
				</tr>
				</thead>
				<?php foreach ($moneda as $mon) { ?>
						<tr>
							<td><?php echo $mon['id_moneda']; ?></td>
							<td><?php echo $mon['tipo_moneda']; ?></td>
							<td>
								<a href="mod_moneda.php?id=<?php echo $mon['id_moneda'];?>&mod=<?php echo $mon['tipo_moneda']; ?>" title="Editar datos" class="btn btn-info btn-sm"><span class="fa fa-refresh fa-spin"></span> Editar Datos</a>
								<a href="../../controller/del_moneda.php?id=<?php echo $mon['id_moneda'];?>" title="Eliminar" onclick="return confirm('¿Estas seguro que deseas eliminar el contrato <?php echo $mon['tipo_moneda'];?>?');" class="btn btn-danger btn-sm"><span class="fas fa-trash-alt" ></span> Eliminar</a>
							</td>
							
							 </tr>
				<?php } ?>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="../../content/js/bootstrap.min.js"></script>
</body>
</html>