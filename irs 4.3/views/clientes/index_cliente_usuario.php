<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>

<link href="css/style_nav.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!--**BOOTSTRAP**-->
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Datos de Catalogo de Clientes-Usuario</title>

	<style>
		.content {
			margin-top: 135px;
		}
	</style>

</head>
<body>
<div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">
          <img src="../img/irs.png" width="130" height="30" alt="">
      </a>
    
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <!--Clientes-->
          <li class="nav-item active dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Clientes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="index_cliente.php">Clientes</a>
          <a class="dropdown-item" href="index_cliente_area.php">Areas</a>
          <a class="dropdown-item" href="index_cliente_usuario.php">Usuarios</a>
		  <a class="dropdown-item" href="index_cliente_piezas.php">Piezas</a>
        </div>
      </li>
          <!--**Clientes**-->

          <!--COLABORADORES-->
          <li class="nav-item active">
            <a class="nav-link" href="#">Colaboradores</a>
          </li>
          <!--**COLABORADORES**-->

           <!--ORDEN SERVICIO-->
           <li class="nav-item active">
            <a class="nav-link" href="#">Orden de Servicio</a>
          </li>
          <!--**ORDEN SERVICIO**-->
          
           <!--REGISTRO AVANCES-->
           <li class="nav-item active">
            <a class="nav-link" href="#">Registro Avances</a>
          </li>
          <!--**REGISTRO AVANCES**-->

            <!--REPORTES-->
            <li class="nav-item active">
            <a class="nav-link" href="#">Reportes</a>
          </li>
          <!--**REPORTES**-->

          <!--CATALOGOS-->
          <li class="nav-item active dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Catalogos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="cat_act/cat_contratos.php">Contratos</a>
          <a class="dropdown-item" href="cat_act/cat_actividades.php">Actividades</a>
          <a class="dropdown-item" href="cat_act/cat_rate.php">Rates</a>
          <a class="dropdown-item" href="cat_act/cat_turno.php">Turnos</a>
          <a class="dropdown-item" href="cat_act/cat_moneda.php">Monedas</a>
          <a class="dropdown-item" href="cat_act/cat_captura.php">Tipo Captura</a>
          <a class="dropdown-item" href="cat_act/cat_reg.php">Tipo de Registro</a>
          <a class="dropdown-item" href="cat_act/cat_motivo_tm.php">Motivos TM</a>
        </div>
      </li>
      <li  class="nav-item active">
            <a style=" float: right;" class="nav-link" href="../model/cerrar.php">Cerrar Sesión</a>
          </li>
      <!--**CATALOGOS**-->
        </ul>
      </div>
    </nav>
    </div>
	<div class="container">
		<div class="content">
			<h2>Catalogo de Cliente-Usuario</h2>
			<hr />
			
			
			<?php
			
			if(isset($_GET['aksi']) == 'delete'){
				// escaping, additionally removing everything that could be (html/javascript-) code
				$nik = mysqli_real_escape_string($con,(strip_tags($_GET["nik"],ENT_QUOTES)));
				$cek = mysqli_query($con, "SELECT * FROM cat_cliente_usuario WHERE id='$nik'");
				if(mysqli_num_rows($cek) == 0){
					//echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hId_usuarioden="true">&times;</button> No se encontraron datos.</div>';
				}else{
					$delete = mysqli_query($con, "DELETE FROM cat_cliente_usuario WHERE id='$nik'");
					if($delete){
						echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hId_usuarioden="true">&times;</button> Datos eliminado correctamente.</div>';
					}else{
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hId_usuarioden="true">&times;</button> Error, no se pudo eliminar los datos.</div>';
					}
				}
			}
			
			?>
			
			<?php $filter = (isset($_GET['filter']) ? strtolower($_GET['filter']) : NULL);  ?>
			
			<br />

			<form style="float: right;" action= "add_cliente_usuario.php">
				<input type="submit"  class="btn btn-success" value="Agregar Datos">
			</form>
			<br />
			<br />
			<div class="table-responsive">
			<table class="table table-striped table-hover">
				<tr>
				
					<th>ID Usuario</th>
					<th>Cliente</th>
                    <th>Nombre de usuario</th>
					<th>E-mail</th>
					<th>Cuenta</th>
					<th>Contraseña</th>
                    <th>Acciones </th>
										
				</tr>
				<?php
				if ($filter){
					$sql = mysqli_query($con, "SELECT Us.id, Bri.cliente, Us.usuario, Us.email, Us.cuenta, Us.contra
					
					FROM cat_cliente_usuario Us 
					INNER JOIN cat_cliente Bri ON Us.cliente = Bri.id_cliente");
				}else{
					$sql = mysqli_query($con, "SELECT Us.id, Bri.cliente, Us.usuario, Us.email, Us.cuenta, Us.contra
					
						FROM cat_cliente_usuario Us 
						INNER JOIN cat_cliente Bri ON Us.cliente = Bri.id_cliente");
				}
				if(mysqli_num_rows($sql) == 0){
					echo '<tr><td colspan="8">No hay datos.</td></tr>';
				}else{
					$no = 1;
					while($row = mysqli_fetch_assoc($sql)){
						echo '
						<tr>
							
							<td>'.$row['id'].'</td>
							<td>'.$row['cliente'].'</td>
							<td>'.$row['usuario'].'</td>
							<td>'.$row['email'].'</td>
							<td>'.$row['cuenta'].'</td>
							<td class="hidetext">'.$row['contra'].' </td>
							
							';
							//holi
						echo '
							
							<td>
							
								<a href="edit_cliente_usuario.php?nik='.$row['id'].'" title="Editar datos" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-edit" aria-hId_usuarioden="true"></span>Editar datos</a>
								<a href="index_cliente_usuario.php?aksi=delete&nik='.$row['id'].'" title="Eliminar" onclick="return confirm(\'Estas Seguro que Deseas Borrar el Usuario: '.$row['usuario'].'?\')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hId_usuarioden="true"></span>Eliminar</a>
							</td>
						
						
						';
					
						$no++;
					}
				}
				?>
			</table>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
