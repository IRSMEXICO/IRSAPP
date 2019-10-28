<?php
require_once("../../model/acciones.php");
$id_cliente_usuario=$_GET['nik'];
$cliente= new consul();
$informacion_c = $cliente->cat_cliente_info($id_cliente_usuario);
$info_cleinte =$cliente->cliente();

?>
<!DOCTYPE html>
<html lang="es">
<head>

		<link href="../../content/css/style_nav.css" rel="stylesheet">
		<script src='https://kit.fontawesome.com/a076d05399.js'></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!--**BOOTSTRAP**-->
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Datos de Catalogo de Clientes-Usuario</title>
		<script type="text/javascript">
         function mostrarPassword(){
		 var cambio = document.getElementById("txtPassword");
		   if(cambio.type == "password"){
			cambio.type = "text";
			$('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
		}else{
			cambio.type = "password";
			$('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
		}
	} 
	$(document).ready(function () {
	//CheckBox mostrar contraseña
	$('#ShowPassword').click(function () {
		$('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
	});
});
</script>
	<style>
		.content {
			margin-top: 80px;
		}
	</style>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
<?php include('../../views/clientes/nav.php');?>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Datos del Catalogo de Usuario &raquo; Editar datos</h2>
			<hr />
			<?php
			foreach($informacion_c as $row){
				?>
			<form class="form-horizontal" action="../../controller/add_actividad.php" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">ID Usuario</label>
					<div class="col-sm-2">
						<input type="text" name="id" value="<?php echo $row ['id']; ?>" class="form-control" readonly onmousedown="return false;" placeholder="NIK" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Nombre de usuario</label>
					<div class="col-sm-4">
						<input type="text" name="usuario" value="<?php echo $row ['usuario']; ?>" class="form-control" placeholder="tipo_usuario" required>
					</div> 
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Cliente</label>
                    <div class="col-sm-4">
                         <select name="id_cliente" id="id_cliente" class="form-control" required>
                         <?php foreach ($info_cleinte as $cli){?>
                        <option value="<?php echo $cli['id_cliente']; ?>"><?php echo $cli['cliente']; ?> </option>
                        <?php }?>
                        </select>
                    </div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Email</label>
					<div class="col-sm-4">
						<input type="email" name="email" value="<?php echo $row ['email']; ?>" class="form-control" placeholder="email" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Cuenta</label>
					<div class="col-sm-4">
						<input type="text" name="cuenta" value="<?php echo $row ['cuenta']; ?>" class="form-control"  placeholder="cuenta" required>
					</div> 
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Contraseña</label>
					<div class="col-sm-4">
           			 <div class="input-group">
            			<input id="txtPassword" type="password" name="contra" value="<?php echo $row ['contra']; ?>" class="form-control" placeholder="Contraseña" required>
            		<div class="input-group-append">
            			<button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
          			</div>
          			 </div>
					</div>
					</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="save_usuario_cliente" class="btn btn-info" value="Guardar datos">
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
}
?>