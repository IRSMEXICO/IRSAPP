<?php
include("../../model/sesiones.php");//valida sesiona activa esta linea va en cada php que muestre info o que interacciones con el cliente
require_once("../../model/acciones.php");
$id_col = $_GET['nik'];
$col=new consul();
$colaboradores=$col->colaboradores_cons($id_col);
$roles=$col->rol();
?>
<!DOCTYPE html>



<html lang="es">
<head>

<script src="../content/js/functions.js"></script>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!--**BOOTSTRAP**-->
		<link href="../../content/css/style_nav.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!--Mostrar contraseña-->
        
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
 <!--//Mostrar contraseña-->
        <style>
    .content {
      margin-top: 135px;
    }
	.notItemOne option:first-child{
		display: none;
	}
  </style>
        <!--**SLIDER**-->
    </head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
<?php include('../../views/colaboradores/nav.php');?>

	</nav>
	<div class="container">
		<div class="content">
			<h2>Datos de Colaboradores &raquo; Editar datos</h2>
			<hr />
			<hr />
			<?php
foreach ($colaboradores as $row) { 
	?>
			<form class="form-horizontal" action="../../controller/add_actividad.php" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">Id_usuario</label>
					<div class="col-sm-4">
						<input type="text" name="Id_usuario" value="<?php echo $row ['Id_usuario']; ?>" class="form-control" readonly onmousedown="return false;" placeholder="NIK" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Nombre de usuario</label>
					<div class="col-sm-4">
						<input type="text" name="tipo_usuario" value="<?php echo $row ['tipo_usuario']; ?>" class="form-control" placeholder="tipo_usuario" required>
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
					<label class="col-sm-3 control-label">Rol</label>
                    <div class="col-sm-4 control-label">
                    <select name="id_rol" id="id_rol" class="form-control notItemOne" required>
                         <?php
                        foreach ($roles as $ro) { 
                    ?>
                        <option value="<?php echo $ro['id_rol']; ?>"> <?php echo $ro['tipo_rol']; ?></option>
                        <?php
                        }
                    ?>
                        </select>
                    </div>
				</div>
				<?php } ?>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="save_colaboradores" class="btn btn-info" value="Guardar datos">
						<a href="index_colaboradores.php" class="btn btn-danger">Cancelar</a>
						<a href="index_colaboradores.php" class="btn  btn-warning">Regresar al Catalogo</a>
					</div>
				</div>
			</form>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	
	
</body>
</html>