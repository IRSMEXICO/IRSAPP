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

  .img_piezas img{
  	 width: 100px;
  	 height: auto;
   	margin: auto;
	}
  </style>
        
    </head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
		<?php include('../../views/colaboradores/nav.php');?>
	</nav>
	<div class="container">
		<div class="content">
    <h2>&raquo;En Construccion (Editando) &raquo; </h2>
			<h2>Inspectores Asignados a la Orden de Servicio &raquo; Agregar datos</h2>
			<hr />
			<form class="form-horizontal" action="../../controller/orden_servicio.php" method="post">
              <table class="table ">
                <tr>
                  <td>
                     <?php foreach($clientes as $cli){?>
                       <label><b>Cliente:  &nbsp;</label>
                       <input class="form-control" style="width:100%;text-align: center;" name="cliente" readonly value="<?php echo $cli ['cliente'];?>">
                     <?php } ?>
                     </td>
                  </tr>
                     <tr>
                  <td>
                <label><b>Usuario: </b></label>
                   <select name="usuarios" id="usuarios">
                   <option value="">SELECCIONAR USUARIO:</option>
                     <?php foreach($usuarios as $rowU){?>
                      <option value="<?php echo $rowU['id']; ?>"><?php echo $rowU['usuario']; ?></option>
                     <?php } ?>
            </select>
               <input class="form-control" type="text" name="correo_usuario" id="correo_usuario" readonly value="SIN CORREO ASIGNADO">
            </br>
            <label><b>Folio:</b></label>
            <br><input style="width:50%;text-align: center;"type="text" class="folio" value="Folio">
            </br>
            <label><b>Supervisor IRS: </b></label> 
            <select name="supervisor" id="supervisor">
            <option value="">SELECCIONAR SUPERVISOR:</option>
                     <?php 
                     $Colaboradores = $co7->Colaboradores();
                     foreach($Colaboradores as $rowCo){?>
                      <option value="<?php echo $rowCo['Id_usuario']; ?>"><?php echo $rowCo['tipo_usuario']; ?></option>
                     <?php } ?>
            </select>
                <input class="form-control" type="text" name="correo_irs" id="correo_irs" readonly value="SIN CORREO ASIGNADO">
            </br>
            </td>
            </tr>
            <br>
            <tr> 
            <td>
            <label><b>Fecha Inicio:&nbsp; </b></label>
            <input class="form-control" type="date" id="start" name="fecha_inicio" readonly value="0000-00-00">
            </td>
            <td>
            <label><b>Area de Trabajo:</b></label>
            <input class="form-control" type="text" id="area_trabajo" name="area_trabajo" readonly value="SIN DATOS">
            </td>
            <td>
            <label><b>Trazabilidad: &nbsp;</b></label>
            <input class="form-control" type="text" id="trazabilidad" readonly value="SIN DATOS">
            </td>
            <td>
            <label><b>Jornada en Horas:</b></label>
            <br><input class="form-control" style="width:100%;text-align: center;"type="time" id="time2" readonly value="00:00" >
            </td>
            <td>
            <label><b>Total de personas: &nbsp;</b></label>
            <br><input class="form-control" style="width:50%;text-align: center;"type="number" id="totalGeneral" readonly value="00">
            </td>
            </tr>
            <br>
            <tr> 
            <td>
            <label><b>Turno: &nbsp;</b></label>
            </br><label>Dia:    &nbsp;</label></br>
            </br><label>Tarde:  &nbsp;</label></br>
            </br><label>Noche:  &nbsp;</label>
            </td>
            <td>
            <label><b>Acomodo Personas:</b></label>
            <br><input class="form-control" style="width:50%;text-align: center;"type="number" class="suma"readonly value="00" >
            <br><input class="form-control"style="width:50%;text-align: center;" type="number" class="suma" readonly value="00" >
            <br><input class="form-control"style="width:50%;text-align: center;"type="number" class="suma" readonly value="00">
            </td>
            <td><label><b>Inicio Jornadas: &nbsp;</b></label>
            <br><input class="form-control"style="width:100%;text-align: center;"type="time" id="dia"readonly value="00:00" >
            <br><input class="form-control"style="width:100%;text-align: center;" type="time" id="tarde" readonly value="00:00" >
            <br><input class="form-control"style="width:100%;text-align: center;"type="time" id="noche"  readonly value="00:00">
            </td>
            <td><label><b>Fin Jornadas: &nbsp;</b></label>
            <br><input class="form-control"style="width:100%;text-align: center;"  id="resultado" readonly value="00:00" >
            <br><input class="form-control"style="width:100%;text-align: center;"  id="resultado2" readonly value="00:00">
            <br><input class="form-control"style="width:100%;text-align: center;"  id="resultado3" readonly value="00:00">
            </td>
            </tr>
            </tr>
            </br>
            </br>
            </br>
            </br>
            </table>
            </form>
			
		</div>
	</div>
            
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script type="text/javascript">
      $(document).ready(function(){
          var correo_usuario = $('#correo_usuario');
        $('#usuarios').change(function(){
            var usuarios = $(this).val();
            if(usuarios !== ''){
                $.ajax({
                data: {usuarios: usuarios},
                dataType: 'json',
                type: 'POST',
                url: 'acciones.php',
            }).done(function(data){
                var len = data.length;
                $("#correo_usuario").val('');
                for( var i = 0; i<len; i++){
                  var usuario_email = data[i]['email'];
                  $("#correo_usuario").val(usuario_email);
                }
               
            });
        } else {
            $("#correo_usuario").val('SIN CORREO ASIGNADO');
        }
    });
});
    </script>

<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script type="text/javascript">
  function SumarTiempos(){
	
  var input1 = document.getElementById('time1');
  var input2 = document.getElementById('time2');
  var strMsg = '';
  
 
  var date1 = input1.valueAsDate;
  var date2 = input2.valueAsDate;
    

  var s = (date1.getDate() + date2.getDate());
  
  var ms = s % 1000;
  s = (s - ms) / 1000;
  var secs = s % 60;
  s = (s - secs) / 60;
  var mins = s % 60;
  var hrs = (s - mins) / 60;
  
  strMsg = hrs + ':' + mins + ':' + secs;
  
document.getElementById('resultado').value = strMsg;
}
    </script>
</body>
</html>


