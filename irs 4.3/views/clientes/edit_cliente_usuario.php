<?php
ob_start();
?>
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
			margin-top: 80px;
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
          <a class="dropdown-item" href="ndex_cliente.php">Clientes</a>
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
			<h2>Datos del Catalogo de Usuario &raquo; Editar datos</h2>
			<hr />
			<?php
			$nik = mysqli_real_escape_string($con,(strip_tags($_GET["nik"],ENT_QUOTES)));
			$sql = mysqli_query($con, "SELECT * FROM cat_cliente_usuario WHERE id='$nik'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: index_cliente_usuario.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			if(isset($_POST['save'])){
				
				$tipo_usuario		 = mysqli_real_escape_string($con,(strip_tags($_POST["usuario"],ENT_QUOTES)));//Escanpando caracteres 
				$email   = mysqli_real_escape_string($con,(strip_tags($_POST["email"],ENT_QUOTES)));//Escanpando caracteres 
				$cuenta	 = mysqli_real_escape_string($con,(strip_tags($_POST["cuenta"],ENT_QUOTES)));
			    $contra	 = mysqli_real_escape_string($con,(strip_tags($_POST["contra"],ENT_QUOTES)));//Escanpando caracteres 
				$cliente	 = mysqli_real_escape_string($con,(strip_tags($_POST["cliente"],ENT_QUOTES)));
				
				$update = mysqli_query($con, "UPDATE cat_cliente_usuario SET  cliente='$cliente', usuario='$tipo_usuario', email='$email',
							cuenta='$cuenta', contra='$contra' WHERE id='$nik'");
				
				if($update){

					header("Location: edit_cliente_usuario.php?nik=".$nik."&pesan=sukses");
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hId_usuarioden="true">&times;</button>Error, no se pudo guardar los datos. Email o Cuenta ya se encuentran registrados </div>';
				}
			}
			
			if(isset($_GET['pesan']) == 'sukses'){
				echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hId_usuarioden="true">&times;</button>Los datos han sido guardados con éxito.</div>';
			}
			?>
			<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">ID Usuario</label>
					<div class="col-sm-2">
						<input type="text" name="id" value="<?php echo $row ['id']; ?>" class="form-control" readonly onmousedown="return false;" placeholder="NIK" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Nombre de usuario</label>
					<div class="col-sm-3">
						<input type="text" name="usuario" value="<?php echo $row ['usuario']; ?>" class="form-control" placeholder="tipo_usuario" required>
					</div> 
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Cliente</label>

                    <?php

                        $query_cliente = mysqli_query($con, "SELECT id_cliente, cliente FROM cat_cliente");
                        $result_cliente = mysqli_num_rows($query_cliente);
                        
                    ?>
                    <div class="col-sm-3">
                         <select name="cliente" id="cliente" class="form-control" required>
                    
                    <?php

                        if($result_cliente > 0){
                            while ($cliente = mysqli_fetch_array($query_cliente)){

                    ?>
                        <option value="<?php echo $cliente['id_cliente']; ?>"><?php echo $cliente['cliente']; ?>
                        </option>
                    <?php
                            }
                        }
                    ?>
                        </select>
                    </div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Email</label>
					<div class="col-sm-3">
						<input type="email" name="email" value="<?php echo $row ['email']; ?>" class="form-control" placeholder="email" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Cuenta</label>
					<div class="col-sm-3">
						<input type="text" name="cuenta" value="<?php echo $row ['cuenta']; ?>" class="form-control"  placeholder="cuenta" required>
					</div> 
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Contraseña</label>
					<div class="col-sm-3">
						<input type="text" name="contra" value="<?php echo $row ['contra']; ?>" class="form-control" placeholder="contra" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="save" class="btn btn-info" value="Guardar datos">
						<a href="index_cliente_usuario.php" class="btn btn-danger">Cancelar</a>
						<a href="index_cliente_usuario.php" class="btn btn-warning">Regresar al Catalogo</a>
					</div>
				</div>
			</form>
		</div>
	</div>					 
		
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>
<?php
ob_end_flush();
?>