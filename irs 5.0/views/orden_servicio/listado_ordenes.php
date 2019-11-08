<?php
include("../../model/sesiones.php");//valida sesiona activa esta linea va en cada php que muestre info o que interacciones con el cliente
require_once("../../model/orden_servicio.php");
$id = $_GET['nik'];
$col= new consul();
$ordenes = $col->ordenes($id);
?>
<!DOCTYPE html>



<html lang="es">
<head>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!--**BOOTSTRAP**-->
        <!--*BUSQUEDA EN TABLAS**-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.2.1/jquery.quicksearch.js"></script>
        <script src="../../content/js/busqueda.js"></script>
        <!--**FIN BUSQUEDA EN TABLAS**-->		
        <link href="../../content/css/style_nav.css" rel="stylesheet">
		<script src='https://kit.fontawesome.com/a076d05399.js'></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <style>
    .content {
      margin-top: 135px;
    }

  .hidetext { -webkit-text-security: disc; /* Default */ }
  </style>
        
    </head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
		<?php include('../../views/colaboradores/nav.php');?>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Orden de servicio</h2>
			<hr />	
			<br />
			<br />
			<form style="float: right;" action= "add_colaboradores.php">
			<input type="text" class="form-control pull-right"  id="search" placeholder="Buscar">
			</form>
			<br />
			<br />
			<div class="row">
			
			<div class="table-responsive">
			<table id="mytable" class="table table-hover">
				<thead class="thead-light">
				<tr>
				
					<th>ID orden</th>
					<th>Usuario</th>
                    <th>fecha inicio</th>
					<th>jornadas</th>
					<th>Actividaes</th>
					<th>Acciones</th>
					
				   </tr>
				 </thead>
				 

<?php
foreach ($ordenes as $cols) { 
	?>
						<tr>
							
							<td><?php echo $cols['id_orden']?></td>
							<td><?php echo $cols['usuario']?></td>
							<td><?php echo $cols['fecha_inicio']?></td>
							<td><?php echo $cols['jornadas']." hrs"?></td>
							<td><?php echo $cols['tipo_actividad']?></td>
							<td>
								<a href="detalle_orden.php?nik=<?php echo $cols['id_orden']?>" title="Ver detalle de Orden" class="btn btn-info btn-sm "> <span class="fa fa-refresh fa-spin"></span>Ver detalles</a>
								<a href="mostrar_orden.php?nik=<?php echo $cols['id_orden']?>" title="Modificar Orden" class="btn btn-info btn-sm "> <span class="fa fa-refresh fa-spin"></span>modificar orden</a>
							</td>
							</tr>
							<?php }	?>
			</table>
			</div> <!--div table responsive-->
		
	</div>
	
		

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
</body>
</html>