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
$captura = $co2->captura();

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
			<hr /> <td>
                <form  style="float: right;"  method="POST" autocomplete="off">
                <label><b>Folio:</b></label>
                 <br><input style="width:100%;text-align: center;"type="text" id="folio" >
               </form>
                </td>
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
            <td>
               <input style="width:100%;text-align: center;" class="form-control" type="text" name="correo_usuario" id="correo_usuario" readonly value="SIN CORREO ASIGNADO">
            </td>
            </tr>
            <tr>
            <td>
            <label><b>Supervisor IRS: </b></label> 
            <select name="supervisor" id="supervisor">
            <option value="">SELECCIONAR SUPERVISOR:</option>
                     <?php 
                     $Colaboradores = $co7->Colaboradores();
                     foreach($Colaboradores as $rowCo){?>
                      <option value="<?php echo $rowCo['Id_usuario']; ?>"><?php echo $rowCo['tipo_usuario']; ?></option>
                     <?php } ?>
            </select>
            </td>
            <td>
                <input class="form-control" type="text" name="correo_irs" id="correo_irs" readonly value="SIN CORREO ASIGNADO">
            </td>
            </tr>
            
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
            <label><b>Forma de captura </b></label>
                   <select name="forma_captura" id="forma_captura">
                     <?php foreach($captura as $rowCap){?>
                      <option value="<?php echo $rowCap['id_captura']; ?>"><?php echo $rowCap['tipo_captura']; ?></option>
                     <?php } ?>
            </select>
            </td>
            <td>
            <label><b>Total de personas: &nbsp;</b></label>
            <br><input style="width:30%;text-align: center;"type="number" id="totalGeneral"readonly value="00">
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
            <br><input style="width:100%;text-align: center;"type="time" id="dia"onchange="SumarTiempos()" >
            <br><input style="width:100%;text-align: center;" type="time" id="tarde" onchange="SumarTiempos()" >
            <br><input style="width:100%;text-align: center;"type="time" id="noche"  onchange="SumarTiempos()">
            </td>
            <td><label><b>Fin Jornadas: &nbsp;</b></label>
            <br><input style="width:100%;text-align: center;"  id="resultado" readonly value="00:00" >
            <br><input style="width:100%;text-align: center;"  id="resultado2" readonly value="00:00">
            <br><input style="width:100%;text-align: center;"  id="resultado3" readonly value="00:00">
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
            <tr>
            <td>
            </form>
          <!--<form class="form-inline my-2 my-lg-0" style="float: right;"  action="os_productos.php" method="POST" autocomplete="off">
			<button style="float: right;"  type="submit"  class="btn btn-success" value="Agregar Datos" ><span class="fas fa-plus-circle" ></span> Agregar </button>
			</form>-->
      </br>
      </td>
      </tr>
      </br>
            <div class="table-responsive">
			<table id="mytable" class="table table-hover">
				<thead class="thead">
				<tr>
				
					<th>Producto/ Numero de parte</th>
          <th>Rate x Hora(piezas)</th>
					<th>Actividad a Realizar</th>
					<th>Instructivo de Operación</th>
          <th>Imagen Piezas</th>
          <th>Accion</th>
					
				   </tr>
				 </thead>
        
					<tr>
							<td>
                <select name="num_parte" id="num_parte">
                 <option value="">SELECCIONAR PIEZA:</option>
                   <?php foreach($piezas as $rowP){?>
                <option value="<?php echo $rowP['id_pieza']?>"><?php echo $rowP['id_pieza']."-".$rowP['piezas']?></option>
                    <?php } ?> 
                </select>
              </td>
							<td><input style="width: 70%;" type="number" id="rate"></td>
							<td> 
                <select name="actividades">
                  <?php $actividades=$co4->actividades();
                  foreach($actividades as $act){?>
                  <option value="<?php echo $act['id_codigo']; ?>"><?php echo $act['tipo_actividad']; ?></option>
                  <?php } ?>
                </select>
              </td>
							<td><input type="file" name="file" id="file"></td>
              <td class="img_piezas" ><img src="" id="imagen_pieza"></td>
              <td><a href="#" id="add_orden_piezas" class="link_add"><i class="fas fa-plus"></i>
              Agregar</a> </td>
					</tr>
          <tr>
            <th>Producto/ Numero de parte</th>
            <th>Rate x Hora(piezas)</th>
					  <th>Actividad a Realizar</th>
					  <th>Instructivo de Operación</th>
            <th>Imagen Piezas</th>
            <th>Accion</th>
          </tr>
        <tbody id="detalle_orden">
          <tr>
              <td>123213</td>
              <td>12</td>
              <td>Limpieza de oxido</td>
              <td>blabla</td>
              <td>papu</td>
              <td class="">
                  <a class="link_delete" href="#" onclick="event.preventDefault(); 
                     del_pieza_detalle(1);"><i class="far fa-trash-alt"></i></a>
              </td>
			</table>
      
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
            <!--<form class="form-inline my-2 my-lg-0" style="float: right;"  action="os_productos.php" method="POST" autocomplete="off">
			<button style="float: right;"  type="submit"  class="btn btn-success" value="Agregar Datos" ><span class="fas fa-plus-circle" ></span> Agregar </button>
			</form>-->
            
            
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

     <!-- SCRIPT IMAGEN -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var imagen = $('#imagen_pieza');
            var src = '../../content/img/coming.gif'
            $('#num_parte').change(function() {
                var num_parte = $(this).val();
                if (num_parte !== '') {
                    $.ajax({
                        data: {
                          num_parte: num_parte
                        },
                        dataType: 'json',
                        type: 'POST',
                        url: 'acciones.php',
                    }).done(function(data) {
                        var len = data.length;
                        imagen.attr('src', src);
                        for (var i = 0; i < len; i++) {
                            var src2 = data[i]['foto'];
                            imagen.attr('src', src2);
                        }

                    });
                } else {
                    imagen.attr('src', src);
                }
            });
        });
    </script>
    <!-- SCRIPT IMAGEN -->

<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script type="text/javascript">
  function SumarTiempos(){
	
  var input1 = document.getElementById('dia');
  var input2 = document.getElementById('time2');
  var input3 = document.getElementById('tarde');
  var input4 = document.getElementById('noche');
  var strMsg = '';
  
 
  var date1 = input1.valueAsDate;
  var date2 = input2.valueAsDate;
  var date3 = input3.valueAsDate;
  var date4 = input4.valueAsDate;
    
  if(date1 >= 1){
  var s = (date1.getTime() + date2.getTime());
  var ms = s % 1000;
  s = (s - ms) / 1000;
  var secs = s % 60;
  s = (s - secs) / 60;
  var mins = s % 60;
  var hrs = (s - mins) / 60;
  
  strMsg = hrs + ':' + mins + ':' + secs;
  
document.getElementById('resultado').value = strMsg;
  }else{
    document.getElementById('resultado').value = '';
  }


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
  document.getElementById('resultado2').value = '';
}

if(date4 >= 1){
var n = (date2.getTime() + date4.getTime());
var ms3 = n % 1000;
  n = (n - ms3) / 1000;
  var secs3 = s % 60;
  n = (n - secs3) / 60;
  var mins3 = n % 60;
  var hrs3 = (n - mins3) / 60;
  
  strMsg3 = hrs3 + ':' + mins3 + ':' + secs3;
  
document.getElementById('resultado3').value = strMsg3;
}
else{
  document.getElementById('resultado3').value = '';
}
}
    </script>

    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script type="text/javascript">
      var piezas = document.getElementById('dia');
      var rate = document.getElementById('time2');
      var actividad = document.getElementById('tarde');
      var instructivo = document.getElementById('noche');
      var foto = document.getElementById('noche');

      

    </script>
</body>
</html>


