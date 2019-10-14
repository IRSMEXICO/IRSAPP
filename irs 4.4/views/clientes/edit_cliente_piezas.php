<?php
require_once("../../model/acciones.php");
$id= $_GET['nik'];
$pieza= new consul();
$informacion_c = $pieza->cat_cliente_pieza_info($id);
$cliente=$pieza->cliente();
?>
<!DOCTYPE html>
<html lang="es">
<head>	
		<?php
				foreach ($informacion_c as $row) { 
		?>

		<link href="css/style_nav.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!--**BOOTSTRAP**-->
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	      <title>Datos de Catalogo de Clientes-Piezas</title>
	<style>
		.content {
			margin-top: 80px;
		}
	</style>
		<script language="javascript">
function callme()
{
document.form1.file_input.value=<?php echo $row['foto'];?>;
}

</script>

</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
<?php include('../../views/clientes/nav.php');?>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Datos del Catalogo de Piezas &raquo; Editar datos</h2>
			<hr />
			<form class="form-horizontal" action="../../controller/add_actividad.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="id_pieza" value="<?php echo $row['id_pieza']; ?>">
			<input type="hidden" name="foto_actual" name="foto_actual" value="<?php echo $row['foto']; ?>">
      <input type="hidden" name="foto_remove" name="foto_remove" value="<?php echo $row['foto']; ?>">  
      
				<div class="form-group">
					<label class="col-sm-3 control-label">ID</label>
					<div class="col-sm-3">
						<input type="text" name="id_piezas" value="<?php echo $row ['id_pieza']; ?>" class="form-control" readonly onmousedown="return false;" placeholder="NIK" required>
					</div>
				</div>
           <div class="form-group">
					<label class="col-sm-3 control-label">Cliente</label>
              <div class="col-sm-3">
                     <select name="id_cliente" id="cliente" class="form-control notItemOne">
						 <?php foreach($cliente as $cli){?>
                        <option value="<?php echo $cli['id_cliente']; ?>"><?php echo $cli['cliente']; ?>
                        </option>
						<?php }?>
                        </select>
                    </div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Piezas</label>
					<div class="col-sm-3">
						<input type="text" name="piezas" value="<?php echo $row ['piezas']; ?>" class="form-control" placeholder="Piezas" required>
					</div> 
				</div>

				<div class="form-group">
	          <label class="col-sm-3 control-label" for="foto">Logo Actual</label>
              <div style="margin-left: 0.9rem" class="prevPhoto col-sm-3">
                	 <img src="<?php echo $row['foto']; ?>">
						 </div>
						 <label class="col-sm-3 control-label" for="foto">logo nuevo</label><br>
						 <img id="imgSalida" width="30%" height="50%" src="" />
                
                <div class="upimg">
					        <input name="file_input" id="file_input" type="file" accept="image/*" />
                </div>
               <div id="form_alert"></div>
                </div>		

				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="save_piezas" class="btn btn-info" value="Guardar datos">
						<a href="index_cliente_piezas.php" class="btn btn-danger">Cancelar</a>
						<a href="index_cliente_piezas.php" class="btn btn-warning">Regresar al Catalogo</a>
					
					</div>
				</div>
			</form>
		</div>
	</div>
	<?php }	?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/functions.js"></script>
	<script type="text/javascript">
	$(window).load(function(){

$(function() {
 $('#file_input').change(function(e) {
	 addImage(e); 
	});

	function addImage(e){
	 var file = e.target.files[0],
	 imageType = /image.*/;
   
	 if (!file.type.match(imageType))
	  return;
 
	 var reader = new FileReader();
	 reader.onload = fileOnload;
	 reader.readAsDataURL(file);
	}
 
	function fileOnload(e) {
	 var result=e.target.result;
	 $('#imgSalida').attr("src",result);
	}
   });
 });

</script>
</body>
</html>
