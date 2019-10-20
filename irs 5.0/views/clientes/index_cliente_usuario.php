<?php
require_once("../../model/acciones.php");
$cliente= new consul();
$informacion_c = $cliente->cat_cliente_info();
?>
<!DOCTYPE html>
<html lang="es">
<head>

<link href="../../content/css/style_nav.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src='https://kit.fontawesome.com/a076d05399.js'></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
		<!--**BOOTSTRAP**-->
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Datos de Catalogo de Clientes-Usuario</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
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
			margin-top: 135px;
		}
	</style>

</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
<?php include('../../views/clientes/nav.php');?>
	</nav>
	<div class="container">
		<div class="content">
		<h2>Catalogo de Cliente-Usuario</h2>
			<hr />
			<br />

			<form style="float: right;" action= "add_cliente_usuario.php">
			<input type="text" id="search" placeholder="buscar">
				<input type="submit"  class="btn btn-success" value="Agregar Datos">
			</form>
			<br />
			<br />
			<div class="table-responsive">
			<table id="mytable" class="table table-striped table-hover">
				<tr>
				
					<th>ID Usuario</th>
					<th>Cliente</th>
                    <th>Nombre de usuario</th>
					<th>E-mail</th>
					<th>Cuenta</th>
					<th>Contraseña</th>
                    <th>Acciones </th>
										
				</tr>
				<?php foreach ($informacion_c  as $row){?>
						<tr>
							
							<td><?php echo $row['id']?></td>
							<td><?php echo $row['cliente']?></td>
							<td><?php echo $row['usuario']?></td>
							<td><?php echo $row['email']?></td>
							<td><?php echo $row['cuenta']?></td>
							<td class="hidetext" ><?php echo $row['contra']?></td>
							<td>
								<a href="edit_cliente_usuario.php?nik=<?php echo $row['id']?>" title="Editar datos" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-edit" aria-hId_usuarioden="true"></span>Editar datos</a>
								<a href="../../controller/del_cliente_usuario.php?id=<?php echo $row['id'];?>" title="Eliminar" onclick="return confirm('¿Esta seguro de borrar al cliente <?php echo $data['cliente'];?>);" class="btn btn-danger btn-sm">Eliminar</a>
							</td>
				<?php }?>
			</table>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="../../content/js/bootstrap.min.js"></script>
</body>
</html>
