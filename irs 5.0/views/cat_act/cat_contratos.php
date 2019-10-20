<?php 
include("../../model/sesiones.php");//valida sesiona activa esta linea va en cada php que muestre info o que interacciones con el cliente
require_once("../../model/acciones.php");
$info_contrato = new consul();
$contrato = $info_contrato->cat_contrato();
?>
<!DOCTYPE html>
<html lang="es">
<head>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Datos de Catalogo de Contratos</title>

	<!-- Bootstrap -->
	
	<link href="../../content/css/style_nav.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
  	    <script src="../content/js/jquery.nivo.slider.js"></script>
	      <script src="../../content/js/jquery.quicksearch.js" type="text/javascript"></script>
		  <script>
		  // Write on keyup event of keyword input element
$(document).ready(function(){
$("#search").keyup(function(){
_this = this;
// Show only matching TR, hide rest of them
$.each($("#mytable tbody tr"), function() {
if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
$(this).hide();
else
$(this).show();
});
});
});
		  </script>
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
			<h2>Catalogo de Contratos</h2>
			<hr />
			<br />
			<form style="float: right;" action= "contratos.php">
			<input type="text" id="search" placeholder="buscar">
			<button style="float: right;"  type="submit"  class="btn btn-success" value="Agregar Datos" ><span class="fas fa-plus-circle" ></span> Agregar Datos </button>
</form>
			<br />
			<br />
			<div class="table-responsive">
			<table id="mytable" class="table table-hover">
				<thead class="thead-light">
				<tr>
				
					<th>ID</th>
                    <th>Tipo de Contrato</th>
                    <th>Acciones </th>
										
				</tr>
				</thead>
				<?php foreach ($contrato as $con) { ?>
						<tr>
							<td><?php echo $con['id_contrato']; ?></td>
							<td><?php echo $con['tipo_contrato']; ?></td>
							<td>
								<a href="mod_contrato.php?id=<?php echo $con['id_contrato'];?>&con=<?php echo $con['tipo_contrato']; ?>" title="Editar datos" class="btn btn-info btn-sm"><span class="fa fa-refresh fa-spin"></span> Editar Datos</a>
								<a href="../../controller/del_contrato.php?id=<?php echo $con['id_contrato'];?>" title="Eliminar" onclick="return confirm('¿Estas seguro que deseas eliminar el contrato <?php echo $con['tipo_contrato'];?>?');" class="btn btn-danger btn-sm"><span class="fas fa-trash-alt" ></span> Eliminar</a>
							</td>
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
