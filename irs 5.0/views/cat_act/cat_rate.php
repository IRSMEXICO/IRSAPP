<?php 
include("../../model/sesiones.php");//valida sesiona activa esta linea va en cada php que muestre info o que interacciones con el cliente
require_once("../../model/acciones.php");
$info_rate= new consul();
$rate = $info_rate->cat_rate();
?>
<!DOCTYPE html>
<html lang="es">
<head>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Datos de Catalogo de Rate</title>

	<!-- Bootstrap -->
	<link href="../../content/css/bootstrap.min.css" rel="stylesheet">
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
<?php include('nav.php');?>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Catalogo de Tipo de Rate</h2>
			<hr />
			<br />
			<form class="form-inline my-2 my-lg-0"style="float: right;" action= "rate.php">
			<input type="text" class="form-control mr-sm-2" id="search" placeholder="Buscar">
			<button style="float: right;"  type="submit"  class="btn btn-success" value="Agregar Datos" ><span class="fas fa-plus-circle" ></span> Agregar Datos </button>
</form>
			<br />
			<br />
			<div class="table-responsive">
			<table id="mytable" class="table table-hover">
			<thead class="thead-light">
				<tr>
				
					<th>ID</th>
					<th>Rate </th>
                    <th>Acciones </th>
										
				</tr>
				</thead>
				<?php foreach ($rate as $rat) { ?>
						<tr>
							<td><?php echo $rat['id_rate']; ?></td>
							<td><?php echo $rat['tipo_rate']; ?></td>
							<td>
								<a href="mod_rate.php?id=<?php echo $rat['id_rate'];?>&mot=<?php echo $rat['tipo_rate']; ?>" title="Editar datos" class="btn btn-info btn-sm"><span class="fa fa-refresh fa-spin"></span> Editar Datos</a>
								<a href="../../controller/del_rate.php?id=<?php echo $rat['id_rate'];?>" title="Eliminar" onclick="return confirm('¿Estas seguro que deseas eliminar la actividad <?php echo $mot['tipo_rate'];?>?');" class="btn btn-danger btn-sm"><span class="fas fa-trash-alt" ></span> Eliminar</a>
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
