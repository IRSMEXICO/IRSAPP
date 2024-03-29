<?php
require_once("../../model/acciones.php");
$id= $_GET['nik'];
$mod_cliente= new consul();
$m_cliente = $mod_cliente->cat_cliente_area_info($id);
$clientes=$mod_cliente->cliente();
?>
<!DOCTYPE html>
<html lang="es">
<head>

<link href="../../content/css/style_nav.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!--**BOOTSTRAP**-->
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	      <title>Datos de Catalogo de Clientes-Areas</title>
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
			<h2>Datos del Catalogo de Areas &raquo; Editar datos</h2>
			<hr />
      <?php
              foreach ($m_cliente as $row) { 
	      ?>
						<tr>
			<form class="form-horizontal" action="../../controller/add_actividad.php" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">ID</label>
					<div class="col-sm-2">
						<input type="text" name="id_area" value="<?php echo $row ['id_area']; ?>" class="form-control" readonly onmousedown="return false;" placeholder="NIK" required>
					</div>
				</div>
        	<div class="form-group">
        	<div class="form-group">
					<label class="col-sm-3 control-label">Cliente</label>
                    <div class="col-sm-3 control-label">
                    <select name="id_cliente" id="id_cliente" class="form-control" required>
                         <?php
                        foreach ($clientes as $cnt) { 
                    ?>
                        <option value="<?php echo $cnt['id_cliente']; ?>"> <?php echo $cnt['cliente']; ?></option>
                        <?php
                        }
                    ?>
                        </select>
                    </div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Area</label>
					<div class="col-sm-3">
						<input type="text" name="area" value="<?php echo $row ['area']; ?>" class="form-control" placeholder="Area" required>
					</div> 
				</div>
              <?php }?>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="mod_area" class="btn btn-info" value="Guardar datos">
						<a href="index_cliente_area.php" class="btn btn-danger">Cancelar</a>
						<a href="index_cliente_area.php" class="btn btn-warning">Regresar al Catalogo</a>
					</div>
				</div>
			</form>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>