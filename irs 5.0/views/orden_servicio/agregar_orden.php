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
$col= new consul();
$colaboradores = $col->clientes();

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
                   <select name="usuarios" id="usuarios">
                   <option value="">SELECCIONAR USUARIO:</option>
                     <?php foreach($usuarios as $rowU){?>
                      <option value="<?php echo $rowU['id']; ?>"><?php echo $rowU['usuario']; ?></option>
                     <?php } ?>
            </select>
               <input class="form-control" type="text" name="correo_usuario" id="correo_usuario" readonly value="SIN CORREO ASIGNADO">
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
            <br><input style="width:100%;text-align: center;"type="time" id="time2" min="00:00" max="12:00" onchange="SumarTiempos()" >
            
            <!-- <select id="time2" onchange="SumarTiempos()">
            <option value="08:00:00" >8 horas</option>
            <option value="10:00:00" >10 horas</option>
            <option value="12:00:00" >12 horas</option>
            <option value="07:30:00" >7.5 horas</option>
            </select> -->
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
            <br><input style="width:30%;text-align: center;"type="number" id="totalGeneral" disabled=»disabled» />
            </td>
            <td>
            <label><b>Turno: &nbsp;</b></label>
            <br><label>Dia:    &nbsp;</label>
            <br><label>Tarde:  &nbsp;</label>
            <br><label>Noche:  &nbsp;</label>
            </td>
            <td>
            <label><b>Acomodo Personas:</b></label>
            <br><input style="width:30%;text-align: center;"type="number" class="suma" >
            <br><input style="width:30%;text-align: center;" type="number" class="suma" >
            <br><input style="width:30%;text-align: center;"type="number" class="suma">
            </td>
            <td><label><b>Inicio Jornadas: &nbsp;</b></label>
            <br><input style="width:100%;text-align: center;"type="time" id="time1"onchange="SumarTiempos()" >
            <br><input style="width:100%;text-align: center;" type="time" id="tarde" onchange="SumarTiempos()" >
            <br><input style="width:100%;text-align: center;"type="time" id="time1"  onchange="SumarTiempos()">
            </td>
            <td><label><b>Fin Jornadas: &nbsp;</b></label>
            <br><input style="width:100%;text-align: center;"  id="resultado" disabled >
            <br><input style="width:100%;text-align: center;"  id="resultado2" disabled>
            <br><input style="width:100%;text-align: center;"  id="resultado" disabled>
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
            <label><b>Servicio Contratado por: &nbsp;</b></label>
            <br><select name="serv_contratado">
            <option value="piezas">PIEZAS</option>
            <option value="horas">HORAS</option>
            <option value="dias">DIAS</option>
            <option value="indefinido">INDEFINIDO</option>
            <option value="kilos">KILOS</option>
            </select>
            </td>
            <td>
            <label><b>Cantidad: &nbsp;</b></label>
            <br><input style="width:50%;text-align: center;"type="number" id="cantidad"  />
            </td>
            <tr>
            <td>
            <label><b>Productos o Numeros de Parte en los que se va a trabajar &nbsp;</b></label>
            </td>
            </tr>
            </table>
            <form class="form-inline my-2 my-lg-0" style="float: right;"  action="add_colaboradores.php" method="POST" autocomplete="off">
			<button style="float: right;"  type="submit"  class="btn btn-success" value="Agregar Datos" ><span class="fas fa-plus-circle" ></span> Agregar </button>
			</form>
            <div class="table-responsive">
			<table id="mytable" class="table table-hover">
				<thead class="thead">
				<tr>
				
					<th>Producto/ Numero de parte</th>
          <th>Rate x Hora(piezas)</th>
					<th>Actividad a Realizar</th>
					<th>Instructivo de Operación</th>
          <th>Imagen Piezas</th>
          
					
				   </tr>
				 </thead>
         
				 

<!--<?php
foreach ($colaboradores as $cols) { 
	?>
						<tr>
							
							<td><?php echo $cols['id_cliente']?></td>
							<td><?php echo $cols['cliente']?></td>
							<td class="img_piezas"><img src="<?php echo $cols['foto'];?>" alt="<?php echo $cols['cliente'];?>"></td>
							<td>
							<a href="../../controller/del_colaboradores.php?id=<?php echo $cols['Id_usuario']?>" title="Eliminar" onclick="return confirm('¿Esta seguro de borrar el Nombre de usuario <?php echo $cols['tipo_usuario']?>?');" class="btn btn-danger btn-sm"><span class="fas fa-trash-alt" ></span></a>
								
							</td>
							</tr>
							<?php }	?>
			</table>-->
      
      <table>
            <tr>
            <td>
            <label><b>Precio Cliente: &nbsp;</b></label>
            <input style="width:30%;text-align: center;"type="number" id="precio_cliente"/>
            </td>
            </tr>
            <tr>
            <td>
            <label><b>Sueldo por Hora: &nbsp;</b></label>
            <input style="width:30%;text-align: center;"type="number" id="sueldo_hora"/>
            </td>
            </tr>
            <tr>
            <td>
            </br>
            </br>
            <hr />
            <form class="form-group">
		      	<label class="col-sm-3 control-label">&nbsp;</label>
			      <div class="col-sm-6">
            <td>	
			      <input type="submit" name="add_orden" class="btn btn-info" value="Generar orden">
            </td>
            
                </tr>
            
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
      $(document).ready(function(){
          var correo_usuario = $('#correo_irs');
        $('#supervisor').change(function(){
            var supervisor = $(this).val();
            if(supervisor !== ''){
                $.ajax({
                data: {supervisor: supervisor},
                dataType: 'json',
                type: 'POST',
                url: 'acciones.php',
            }).done(function(data){
                var len = data.length;
                $("#correo_irs").val('');
                for( var i = 0; i<len; i++){
                  var supervisor_email = data[i]['email'];
                  $("#correo_irs").val(supervisor_email);
                }
               
            });
        } else {
            $("#correo_irs").val('SIN CORREO ASIGNADO');
        }
    });
});
    </script>

<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script type="text/javascript">
  function SumarTiempos(){
	
  var input1 = document.getElementById('time1');
  var input2 = document.getElementById('time2');
  var input3 = document.getElementById('tarde');
  var strMsg = '';
  
 
  var date1 = input1.valueAsDate;
  var date2 = input2.valueAsDate;
  var date3= input3.valueAsDate;
    

  var s = (date1.getTime() + date2.getTime());
  
  
  var ms = s % 1000;
  s = (s - ms) / 1000;
  var secs = s % 60;
  s = (s - secs) / 60;
  var mins = s % 60;
  var hrs = (s - mins) / 60;
  
  strMsg = hrs + ':' + mins + ':' + secs;
  
document.getElementById('resultado').value = strMsg;

if(date3 >= 1){
var f = (date2.getTime() + date3.getTime());
var ms2 = f % 1000;
  f = (f - ms2) / 1000;
  var secs2 = s % 60;
  f = (f - secs2) / 60;
  var mins2 = f % 60;
  var hrs2 = (f - mins2) / 60;
  
  strMsg2 = hrs2 + ':' + mins2 + ':' + secs2;
  
document.getElementById('resultado2').value = strMsg2;
}
else{
  document.getElementById('resultado2').value = '0';
}
}
    </script>


</body>
</html>


