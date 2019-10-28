<?php
include("../../model/sesiones.php");//valida sesiona activa esta linea va en cada php que muestre info o que interacciones con el cliente
$id = $_GET['nik'];
require_once("../../model/orden_servicio.php");
$col= new consul();
$co= new consul();
$co1= new consul();
$co2= new consul();
$co3= new consul();
$co4= new consul();
$co5= new consul();
$co6= new consul();
$clientes= $col->clientes_id($id);
$usuarios= $co->usuarios_cliente($id);
$area=$co1->cliente_area($id);
$piezas=$co3->cliente_pieza($id);
$actividades=$co4->actividades($id);
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
			<form class="form-horizontal" action="../../controller/orden_servicio.php" method="post">
            <table class="table table-bordered">
            <tr>
            <td>
            <label>Usuario: </label>
            <select name="usuarios">
            <?php foreach($usuarios as $rowU){?>
            <option value="<?php echo $rowU['id']; ?>"><?php echo $rowU['usuario']; ?></option>
            <?php } ?>
            </select>
            </td>
            <td>
            <label>Jordnada en Horas:</label>
            <select name="jornadas_horas">
            <option value="8">8 horas</option>
            <option value="10">10 horas</option>
            <option value="12">12 horas</option>
            <option value="7.5">7.5 horas</option>
            </select>
            </td>
            <td>
            <label>Actividad a realizar: &nbsp;</label>
            <select name="actividades">
            <?php foreach($actividades as $act){?>
            <option value="<?php echo $act['id_actividad']; ?>"><?php echo $act['tipo_actividad']; ?></option>
            <?php } ?>
            </select>
            </td>
            </tr> 
            <tr> 
            <td><label>Fecha Inicio: </label><input type="date" id="start" name="fecha_inicio"
            value="2019-10-19"
            min="2018-01-01" max="2048-12-31">
            </td>
            <td>
            <label>TOAT: &nbsp;</label><input type="text" name="toat" required>
            </td>
            <td>
            <label>Serv. Contratado: &nbsp;</label>
            <select name="contrato">
            <?php
            $contrato=$co5->contrato();
            foreach($contrato as $cont){ ?>
            <option value="<?php echo $cont['id_contrato'];?>"><?php echo $cont['tipo_contrato'];?>  </option>
            <?php } ?>
            </select>
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
            <td>
            <label>Acomodo Turno: &nbsp;</label>
            <select name="acomodo_turno">
            <option value="DIA">Dia 10 personas</option>
            <option value="TARDE">N/A</option>
            <option value="NOCHE">Noche 10 personas</option>
            </select>
            </td>
            <td>
            <label>Seleciona Empleado: &nbsp;</label>
            <select name="empleado">
            <?php $empleado=$co6->empleados($id);
            foreach($empleado as $emp){?>
            <option value="<?php echo $emp['id_empleado'] ?>"><?php echo $emp['num_empleado']."-".$emp['nom_empleado'] ?></option>
            <?php } ?>
            </select>
            </td>
            </tr>
            <tr>
            <td>
            <label>Area de Trabajo</label>
            <select name="area_trabajo">
            <?php foreach($area as $rowA){?>
            <option value="<?php echo $rowA['id_area']; ?>"><?php echo $rowA['id_area']."-".$rowA['area'];?></option>
                <?php } ?>
            </td>
            <td>
            <label>Horarios PACTD: &nbsp;</label>
            <select name="horarios_pactd">
            <option value="">Inicio Jor. - Fin Jor.</option>
            <option value="DIA">6:00am - 6:00pm</option>
            <option value="TARDE">N/A - N/A</option>
            <option value="NOCHE">6:00pm - 6:00am</option>
            </select>
            </td>
            <td>
            <label>Precio CLNT: &nbsp</label>
            <input name="precio_clnt" type="text">
            </td>
            </tr>
            <tr>
            <td>
            <label>Correo Usuario: &nbsp;</label>
            <select name="correo_usuario">
            <?php foreach($usuarios as $rowUs){?>
            <option value="<?php echo $rowUs['email'] ?>"><?php echo $rowUs['email']  ?></option>
            <?php } ?>
            </select>
            </td>
            <td>
            <label>Captura de Reporte: &nbsp: &nbsp;</label>
            <select name="captura_reporte">
            <option value="HORA">HORA</option>
            <option value="TURNO">TURNO</option>
            </select>
            </td>
            <td>
            <label>Sueldo Por Hora</label>
            <input name="sueldo_hora" type="text">
            </td>
            </tr>
            <tr>
            <td>
            <label>Correo IRS: &nbsp;</label>
            <select name="correo_irs">
            <option value="DIANA@IRSMEXICO.COM">DIANA@IRSMEXICO.COM</option>
            <option value="FELIPA@IRSMEXICO.COM">FELIPA@IRSMEXICO.COM</option>
            </select>
            </td>
            <td>
            <label>Trazabilidad: &nbsp;</label>
            <select name="trazabilidad">
            <option values="si">SI</option>
            <option value="no">NO</option>
            </select>
            </td>
            <td>
            <label>Comentario</label>
            <textarea name="comentario" placeholder="Escribe un comentario.."></textarea>
            </td>
            </tr>
            <tr>
            <td>
            <label>Dias Laborales : &nbsp;</label><br>  
            <input type="checkbox" name="Days[]" value="lunes">Lunes<br>
            <input type="checkbox" name="Days[]" value="martes">Martes<br>
            <input type="checkbox" name="Days[]" value="miercoles">Miercoles<br>
            <input type="checkbox" name="Days[]" value="jueves">Jueves<br>
            <input type="checkbox" name="Days[]" value="viernes">Viernes<br>
            <input type="checkbox" name="Days[]" value="sabado">Sabado<br>
            <input type="checkbox" name="Days[]" value="domingo">Domingo<br>
            </td>
            <td>
            <label>Selecciona Grupo o turno: &nbsp;</label><br>  
            <input type="checkbox" name="gpo_turno[]" value="1d"> 1 - Dia - 6:00am a 6:00pm<br>
            <input type="checkbox" name="gpo_turno[]" value="1d"> 1 - Dia - 6:00am a 6:00pm<br>
            <input type="checkbox" name="gpo_turno[]" value="1d"> 1 - Dia - 6:00am a 6:00pm<br>
            <input type="checkbox" name="gpo_turno[]" value="1d"> 1 - Dia - 6:00am a 6:00pm<br>
            <input type="checkbox" name="gpo_turno[]" value="1d"> 1 - Dia - 6:00am a 6:00pm<br>
            <input type="checkbox" name="gpo_turno[]" value="1d"> 1 - Dia - 6:00am a 6:00pm<br>
            <input type="checkbox" name="gpo_turno[]" value="1d"> 1 - Dia - 6:00am a 6:00pm<br>
            <input type="checkbox" name="gpo_turno[]" value="1d"> 1 - Dia - 6:00am a 6:00pm<br>
            <input type="checkbox" name="gpo_turno[]" value="1d"> 1 - Dia - 6:00am a 6:00pm<br>
            <input type="checkbox" name="gpo_turno[]" value="1d"> 1 - Dia - 6:00am a 6:00pm<br>
            </td>  
            <td>
            <label>Selecciona Grupo o turno: &nbsp;</label><br>  
            <input type="checkbox" name="gpo_turno[]" value="1d"> 1 - Dia - 6:00am a 6:00pm<br>
            <input type="checkbox" name="gpo_turno[]" value="1d"> 1 - Dia - 6:00am a 6:00pm<br>
            <input type="checkbox" name="gpo_turno[]" value="1n"> 3 - Noche - 6:00pm a 6:00am<br>
            <input type="checkbox" name="gpo_turno[]" value="1n"> 3 - Noche - 6:00pm a 6:00am<br>
            <input type="checkbox" name="gpo_turno[]" value="1n"> 3 - Noche - 6:00pm a 6:00am<br>
            <input type="checkbox" name="gpo_turno[]" value="1n"> 3 - Noche - 6:00pm a 6:00am<br>
            <input type="checkbox" name="gpo_turno[]" value="1n"> 3 - Noche - 6:00pm a 6:00am<br>
            <input type="checkbox" name="gpo_turno[]" value="1n"> 3 - Noche - 6:00pm a 6:00am<br>
            <input type="checkbox" name="gpo_turno[]" value="1n"> 3 - Noche - 6:00pm a 6:00am<br>
            <input type="checkbox" name="gpo_turno[]" value="1n"> 3 - Noche - 6:00pm a 6:00am<br>
            </td>             
            </tr>
            <div class="form-group">
			<label class="col-sm-3 control-label">&nbsp;</label>
			<div class="col-sm-6">
            <td>	
			<input type="submit" name="add_orden" class="btn btn-info" value="Generar orden">
            </td>
            <td>
            <a href="orden_servicio.php" class="btn btn-danger">Cancelar</a>
            </td>
            <td>
            <a href="orden_servicio.php" class="btn btn-warning">Regresar</a>
            </td>
            </div>
			</div>
                </tr>
                </table>
			</form>
			
		</div>
	</div>
	
		

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
</body>
</html>