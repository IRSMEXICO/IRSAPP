<?php
require_once("../../model/acciones.php");
$cliente_info= new consul();
$cliente = $cliente_info->cliente(); 
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
	<title>Datos de Catalogo de Clientes-Piezas</title>
	<style>
		.content {
			margin-top: 80px;
		}
	</style>
</head>
<body>
<?php include('../../views/clientes/nav.php');?>

	<div class="container">
		<div class="content">
			<h2>Datos del Catalogo de Piezas &raquo; Agregar datos</h2>
			<hr />    
      <form class="form-horizontal" action="../../controller/add_actividad.php" method="post" enctype="multipart/form-data">
         <div class="form-group">
					<label class="col-sm-3 control-label">Cliente</label>
          <div class="col-sm-3 control-label">
            <select name="id_cliente" id="id_cliente" class="form-control" required>

          <?php
                        foreach ($cliente as $row) { 
                    ?>
                        <option value="<?php echo $row['id_cliente']; ?>"> <?php echo $row['cliente']; ?></option>
                        <?php
                        }
                    ?>
                        </select>
                    </div>
				</div>
			
                <div class="form-group">
        					<label class="col-sm-3 control-label">Piezas</label>
				        	<div class="col-sm-3">
						        <input type="text" name="piezas" class="form-control" placeholder="Piezas" required>
					      </div>
				        </div>

                <div class="form-group">
	                  <label class="col-sm-3 control-label" for="foto">Foto</label>
                      <div style="margin-left: 0.9rem" class="prevPhoto col-sm-3">
                     <span class="delPhoto notBlock">X</span>
                     <label for="foto"></label>
                      </div>
                        <div class="upimg">
                        <input type="file" name="foto" id="foto">
                      </div>
                   <div id="form_alert"></div>
                </div>	

				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="add_pieza" class="btn btn-info" value="Guardar datos">
						<a href="index_cliente_piezas.php" class="btn btn-danger">Cancelar</a>
            <a href="index_cliente_piezas.php" class="btn btn-warning">Regresar al Catalogo</a>
					</div>
				</div>
			</form>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/functions.js"></script>
	
</body>
</html>

