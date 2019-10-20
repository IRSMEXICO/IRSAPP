<?php
include("../../model/sesiones.php");//valida sesiona activa esta linea va en cada php que muestre info o que interacciones con el cliente
$id = $_GET['nik'];
require_once("../../model/orden_servicio.php");
$col= new consul();
$clientes= $col->clientes_id($id);
$usuarios= $col->usuarios_cliente($id);
$area=$col->cliente_area($id);
$piezas=$col->cliente_pieza($id);
foreach($clientes as $rowC){
?>
<!DOCTYPE html>



<html lang="es">
<head>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!--**BOOTSTRAP**-->
        <!--*BUSQUEDA EN TABLAS**-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.2.1/jquery.quicksearch.js"></script>
        <script src="../../content/js/busqueda.js"></script>
        <!--**FIN BUSQUEDA EN TABLAS**-->		
        <link href="../../content/css/style_nav.css" rel="stylesheet">
		<script src='https://kit.fontawesome.com/a076d05399.js'></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <style>
    .content {
      margin-top: 135px;
    }

  .hidetext { -webkit-text-security: disc; /* Default */ }
  </style>
        
    </head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
		<?php include('../../views/colaboradores/nav.php');?>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Datos del Catalogo de Areas &raquo; Agregar datos</h2>
			<hr />
			<form class="form-horizontal" action="" method="post">
            <table>
                <tr>
                <th><h4> Cliente <?php echo $rowC['cliente'];?></th>
                </tr>
            <tr>
            <td>
            <label>Usuario: </label><select name="usuarios">
            <?php foreach($usuarios as $rowU){?>
            <option value="<?php echo $rowU['id']; ?>"><?php echo $rowU['usuario']; ?></option>
            <?php } ?>
            </select>
            </td>
            </tr> 
            <tr> 
            <td><label>Fecha Inicio: </label><input type="date" id="start" name="fecha_inicio"
            value="2019-10-19"
            min="2018-01-01" max="2048-12-31">
            </td>
            </tr>
            <tr>
            <td>
            <label>No. de Parte</label>
            <select name="num_parte">
            <?php foreach($piezas as $rowP){?>
            <option value="<?php echo $rowP['id_pieza']?>"><?php echo $rowP['id_pieza']."-".$rowP['piezas']?></option>
            <?php } ?> 
            </select> 
            </td>
            </tr>
            <tr>
            <td>
            <label>Area de Trabajo</label>
            <select name="area_trabajo">
            <?php foreach($area as $rowA){?>
            <option value="<?php echo $rowA['id_area']?>"><?php echo $rowA['id_area']."-".$rowA['area']?></option>

                <?php } ?>
            </td>
            </tr>
            <tr>
            <td>
            <label>Correo Usuario</label>
            <select name="correo_usuario">
            <?php foreach($usuarios as $rowU){?>
            <option value="<?php echo $rowU['email'] ?>"><?php echo $rowU['email']  ?></option>
            <?php } ?>
            </select>
            </td>
            </tr>
                <?php } ?>
                <img style="width: 10%;" src="../../content/img/construccion.jpg">
				<!-- BOTONES DE AGREGAR O REGRESAR -->
			<tr>
            <td>	<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="add_area" class="btn btn-info" value="Generar orden">
						<a href="orden_servicio.php" class="btn btn-danger">Cancelar</a>
            <a href="orden_servicio.php" class="btn btn-warning">Regresar</a>
					</div>
				</div>
               </td>
                </tr>
                </table>
			</form>
			
		</div>
	</div>
	
		

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
</body>
</html>