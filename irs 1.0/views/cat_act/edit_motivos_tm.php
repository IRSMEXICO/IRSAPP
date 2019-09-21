<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Datos de Catalogo de Motivos TM</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style_nav.css" rel="stylesheet">
	<style>
		.content {
			margin-top: 80px;
		}
	</style>
	

</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<?php include("nav.php");?>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Datos del Catalogo de Motivos TM &raquo; Editar datos</h2>
			<hr />
			
			<?php
			// escaping, additionally removing everything that could be (html/javascript-) code
			$nik = mysqli_real_escape_string($con,(strip_tags($_GET["nik"],ENT_QUOTES)));
			$sql = mysqli_query($con, "SELECT * FROM cat_motivos_tm WHERE ID='$nik'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: index_motivos_tm.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			if(isset($_POST['save'])){
				
				$tipo_motivo_tm		 = mysqli_real_escape_string($con,(strip_tags($_POST["tipo_motivo_tm"],ENT_QUOTES)));//Escanpando caracteres 
				
				
				$cek = mysqli_query($con, "SELECT * FROM cat_motivos_tm WHERE tipo_motivo_tm ='$tipo_motivo_tm'");

				if(mysqli_num_rows($cek) == 0){
					$update = mysqli_query($con, "UPDATE cat_motivos_tm SET  tipo_motivo_tm='$tipo_motivo_tm' WHERE ID='$nik'") or die(mysqli_error());
				
				if($update){
					echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Los datos han sido guardados con éxito.</div>';
					//header("Location: edit_motivos_tm.php?nik=".$nik."&pesan=sukses");
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error, no se pudo guardar los datos.</div>';
				}
			}else{
				echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. El Tipo de Motivos TM ya exite!</div>';
			}
			}
			/*
			if(isset($_GET['pesan']) == 'sukses'){
				echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Los datos han sido guardados con éxito.</div>';
			}*/
			?>
			<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">ID</label>
					<div class="col-sm-2">
						<input type="text" name="ID" value="<?php echo $row ['ID']; ?>" class="form-control" readonly onmousedown="return false;" placeholder="NIK" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Tipo de Motivos TM</label>
					<div class="col-sm-3">
						
						<input type="text" name="tipo_motivo_tm" value="<?php echo $row ['tipo_motivo_tm']; ?>" class="form-control" placeholder="tipo_motivo_tm" required>
					</div> 
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="save" class="btn btn-sm btn-primary" value="Guardar datos">
						<a href="index_motivos_tm.php" class="btn btn-sm btn-danger">Cancelar</a>
						<a href="index_motivos_tm.php" class="btn btn-sm btn-warning">Regresar al Catalogo</a>
					
					</div>
				</div>
			</form>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>