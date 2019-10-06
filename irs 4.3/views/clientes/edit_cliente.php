<?php
require_once("../../model/acciones.php");
$id_cliente = $_GET['nik'];
$cliente= new consul();
$informacion_c = $cliente->cliente_cons($id_cliente);
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
		<title>Datos de Catalogo de Clientes</title>
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
<body onload="javascript:callme()">
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
			<h2>Datos del Catalogo de Clientes &raquo; Editar datos</h2>
			<hr />
	
			<form name="form1" class="form-horizontal" action="../../controller/add_actividad.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="id_cliente" value="<?php echo $row['id_cliente']; ?>">
			<input type="hidden" name="foto_actual" name="foto_actual" value="<?php echo $row['foto']; ?>">
			<input type="hidden" name="foto_remove" name="foto_remove" value="<?php echo $row['foto']; ?>">
				<div class="form-group">
					<label class="col-sm-3 control-label">ID</label>
					<div class="col-sm-2">
						<input type="text" name="id_cliente" value="<?php echo $row ['id_cliente']; ?>" class="form-control" readonly onmousedown="return false;" placeholder="NIK" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Cliente</label>
					<div class="col-sm-3">
						
						<input type="text" name="cliente" value="<?php echo $row ['cliente']; ?>" class="form-control" placeholder="Cliente" required>
					</div> 
				</div>

				<div class="form-group">
	                  <label class="col-sm-3 control-label" for="foto">Logo Actual</label>
                      <div style="margin-left: 0.9rem" class="prevPhoto col-sm-3">
                    	 <img src="../../content/img/<?php echo $row['foto']; ?>">
						 </div>
						 <label class="col-sm-3 control-label" for="foto">logo nuevo</label><br>
						 <img id="imgSalida" width="30%" height="50%" src="" />
                
                      <div class="upimg">
					  <input name="file_input" value="<?php echo $row['foto']; ?>" id="file_input" type="file" accept="image/*" />
                      </div>
                   <div id="form_alert"></div>
                </div>	

				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="save_cliente" class="btn btn-info" value="Guardar datos">
						<a href="index_cliente.php" class="btn btn-danger">Cancelar</a>
						<a href="index_cliente.php" class="btn btn-warning">Regresar al Catalogo</a>
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