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
$co7= new consul(); 
$clientes= $col->clientes_id($id);
$usuarios= $co->usuarios_cliente($id);
$area=$co1->cliente_area($id);
$piezas=$co3->cliente_pieza($id);
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
      margin-top: 80px;
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
    <h2>&raquo;En Construccion (Editando) &raquo; </h2>
			<h2>Orden de Servicio &raquo; Agregar datos</h2>
			<hr />
			<form class="form-horizontal" action="../../controller/orden_servicio.php" method="post">
              <table class="table ">
                <tr>
                  <td>
                     <?php foreach($clientes as $cli){?>
                       <label><b>Cliente:  &nbsp;</b></label><input style="width:30%;text-align: center;" name="cliente" readonly value="<?php echo $cli ['cliente'];?>"><br>
                     <?php } ?>
                     </tr>
                     <tr>
                  <td>
                <label><b>Usuario: </b></label>
                   <select name="usuarios">
                     <?php foreach($usuarios as $rowU){?>
                      <option value="<?php echo $rowU['id']; ?>"><?php echo $rowU['usuario']; ?></option>
                     <?php } ?>
            </select>
            <select name="correo_usuario">
            <?php foreach($usuarios as $rowUs){?>
            <option value="<?php echo $rowUs['email'] ?>"><?php echo $rowUs['email']  ?></option>
            <?php } ?>
            </select>
            </br>
            <label><b>Supervisor IRS: </b></label> 
            <select name="supervisor">
                     <?php 
                     $Colaboradores = $co7->Colaboradores();
                     foreach($Colaboradores as $rowCo){?>
                      <option value="<?php echo $rowCo['id_usuario']; ?>"><?php echo $rowCo['tipo_usuario']; ?></option>
                     <?php } ?>
            </select>
            <select name="correo_irs">
            <option value="DIANA@IRSMEXICO.COM">DIANA@IRSMEXICO.COM</option>
            <option value="FELIPA@IRSMEXICO.COM">FELIPA@IRSMEXICO.COM</option>
            </select>
            </br>
            </td>
            </tr>
            <br>
            <tr> 
            <td>
            <label><b>Fecha Inicio:&nbsp; </b></label><input type="date" id="start" name="fecha_inicio" value="2019-10-19" min="2018-01-01" max="2048-12-31">
            </td>
            <td>
            <label><b>Area de Trabajo:</b></label>
            <select name="area_trabajo">
            <?php foreach($area as $rowA){?>
            <option value="<?php echo $rowA['id_area']; ?>"><?php echo $rowA['id_area']."-".$rowA['area'];?></option>
                <?php } ?>
            </td>
            <td>
            <label><b>Trazabilidad: &nbsp;</b></label>
            <select name="trazabilidad">
            <option values="si">SI</option>
            <option value="no">NO</option>
            </select>
            </td>
            <td>
            <label><b>Jornada en Horas:</b></label>
            <select name="jornadas_horas">
            <option value="8">8 horas</option>
            <option value="10">10 horas</option>
            <option value="12">12 horas</option>
            <option value="7.5">7.5 horas</option>
            </select>
            </td>
            <td>
            <label><b>Captura de Reporte: &nbsp;</b></label>
            <select name="captura_reporte">
            <option value="HORA">HORA</option>
            <option value="TURNO">TURNO</option>
            </select>
            </td>
            </tr> 
            <tr> 
            <td>
            <label><b>Total de personas: &nbsp;</b></label>
            <br><input style="width:30%;text-align: center;"type="number" name="totalpersonas" disabled=»disabled» />
            </td>
            <td>
            <label><b>Turno: &nbsp;</b></label>
            <br><label>Dia:    &nbsp;</label>
            <br><label>Tarde:  &nbsp;</label>
            <br><label>Noche:  &nbsp;</label>
            </td>
            <td>
            <label><b>Acomodo Personas:</b></label>
            <br><input style="width:30%;text-align: center;"type="number" name="dia" required>
            <br><input style="width:30%;text-align: center;" type="number" name="tarde" required>
            <br><input style="width:30%;text-align: center;"type="number" name="noche" required>
            </td>
            <td><label><b>Inicio Jornadas: &nbsp;</b></label>
            <br><input style="width:50%;text-align: center;"type="time" name="dia" >
            <br><input style="width:50%;text-align: center;" type="time" name="tarde" >
            <br><input style="width:50%;text-align: center;"type="time" name="noche" >
            </td>
            <td><label><b>Fin Jornadas: &nbsp;</b></label>
            <br><input style="width:50%;text-align: center;"type="time" name="dia" >
            <br><input style="width:50%;text-align: center;" type="time" name="tarde" >
            <br><input style="width:50%;text-align: center;"type="time" name="noche" >
            </td>
            <tr>
            <td>
            <label><b>Dias Laborales : &nbsp;</b></label><br>  
            <input type="checkbox" name="Days[]" value="lunes">Lunes<br>
            <input type="checkbox" name="Days[]" value="martes">Martes<br>
            <input type="checkbox" name="Days[]" value="miercoles">Miercoles<br>
            <input type="checkbox" name="Days[]" value="jueves">Jueves<br>
            <input type="checkbox" name="Days[]" value="viernes">Viernes<br>
            <input type="checkbox" name="Days[]" value="sabado">Sabado<br>
            <input type="checkbox" name="Days[]" value="domingo">Domingo<br>
            </td>
            <td>
            <label><b>Serv. Contratado: &nbsp;</b></label>
            <select name="contrato">
            <?php
            $contrato=$co5->contrato();
            foreach($contrato as $cont){ ?>
            <option value="<?php echo $cont['id_contrato'];?>"><?php echo $cont['tipo_contrato'];?>  </option>
            <?php } ?>
            </select>
            </td>
            <tr>
            </tr>
            <tr>
            </tr>
            <tr>
            </tr>
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