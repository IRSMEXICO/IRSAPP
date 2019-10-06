<?php
include("../../model/sesiones.php");//valida sesiona activa esta linea va en cada php que muestre info o que interacciones con el cliente
require_once("../../model/acciones.php");
$col= new consul();
$colaboradores = $col->colaboradores();
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
        <!--SLIDER-->
        <link rel="stylesheet" href="../content/css/nivo-slider.css">
	      <link rel="stylesheet" href="<../content/css/mi-slider.css">
	      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
  	    <script src="../../content/js/jquery.nivo.slider.js"></script>
	      <script type="text/javascript"> 
		    $(window).on('load', function() {
		    $('#slider').nivoSlider(); 
	    	}); 
        </script>
        <style>
    .content {
      margin-top: 135px;
    }
  </style>
        <!--**SLIDER**-->
    </head>
<body>
	<div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">
          <img src=".../../img/irs.png" width="130" height="30" alt="">
      </a>
    
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <!--Clientes-->
          <li class="nav-item active">
            <a class="nav-link" href="#">Clientes <span class="sr-only">(current)</span></a>
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
          <a class="dropdown-item" href="../cat_act/cat_contratos.php">Contratos</a>
          <a class="dropdown-item" href="../cat_actividades.php">Actividades</a>
          <a class="dropdown-item" href="../cat_act/cat_rate.php">Rates</a>
          <a class="dropdown-item" href="../cat_act/cat_turno.php">Turnos</a>
          <a class="dropdown-item" href="../cat_act/cat_moneda.php">Monedas</a>
          <a class="dropdown-item" href="../cat_act/cat_captura.php">Tipo Captura</a>
          <a class="dropdown-item" href="../cat_act/cat_reg.php">Tipo de Registro</a>
          <a class="dropdown-item" href="../cat_act/cat_motivo_tm.php">Motivos TM</a>
        </div>
      </li>
      <li  class="nav-item active">
            <a style=" float: right;" class="nav-link" href="../../model/cerrar.php">Cerrar Sesión</a>
          </li>
      <!--**CATALOGOS**-->
        </ul>
      </div>
    </nav>
    </div>
	<div class="container">
		<div class="content">
			<h2>Colaboradores</h2>
			<hr />
			<hr />
			
			<form style="float: right;"  action="buscar.php" method="POST" autocomplete="off">
				<input type="text" name="palabra" placeholder="Buscar Usuario..." required>
				<input type="submit" class="btn_search" value="Buscar">
			</form>
			<br />
			<br />
			<form style="float: right;" action= "add_colaboradores.php">
			<input type="submit"  class="btn btn-success" value="Agregar Datos">
		</form>
			<br />
			<br />
			<div class="row">
			
			<div class="table-responsive">
			<table class="table table-hover">
				<thead class="thead-light">
				<tr>
				
					<th>ID Usuario</th>
                    <th>Nombre de usuario</th>
					<th>E-mail</th>
					<th>Cuenta</th>
					<th>Contraseña</th>
					<th>Rol</th>
                    <th>Acciones </th>
					
				   </tr>
				 </thead>
				 

<?php
foreach ($colaboradores as $cols) { 
	?>
						<tr>
							
							<td><?php echo $cols['Id_usuario']?></td>
							<td><?php echo $cols['tipo_usuario']?></td>
							<td><?php echo $cols['email']?></td>
							<td><?php echo $cols['cuenta']?></td>
							<td type="password" class="hidetext"><?php echo $cols['contra']?></td>
							<td><?php echo $cols['rol']?></td>
							<td>
							
								<a href="edit_colaboradores.php?nik=<?php echo $cols['Id_usuario']?>" title="Editar datos" class="btn btn-info btn-sm">Editar Datos</a>
								<a href="../../controller/del_colaboradores.php?id=<?php echo $cols['Id_usuario']?>" title="Eliminar" onclick="return confirm('¿Esta seguro de borrar el Nombre de usuario <?php echo $cols['tipo_usuario']?>?');" class="btn btn-danger btn-sm">Eliminar</a>
							</td>
							<?php }	?>
			</table>
			</div> <!--div table responsive-->
		
	</div>
	
		

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
</body>
</html>
