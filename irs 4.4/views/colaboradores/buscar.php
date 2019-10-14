<?php
include("conexion.php");

?>
<!DOCTYPE html>



<html lang="es">
<head>

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
  	    <script src="../content/js/jquery.nivo.slider.js"></script>
	      <script type="text/javascript"> 
		    $(window).on('load', function() {
		    $('#slider').nivoSlider(); 
	    	}); 
        </script>
        <style>
    .content {
      margin-top: 135px;
    }
	.hidetext { -webkit-text-security: disc; /* Default */ }
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
          <img src="../content/img/irs.png" width="130" height="30" alt="">
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
			<h2>Colaboradores</h2>
			<hr />
			<hr />
<?php
	$palabra=$_POST['palabra'];
	$query="SELECT * FROM cat_colaboradores WHERE tipo_usuario LIKE '%$palabra%'";
	$consulta3=$con->query($query);
	if($consulta3->num_rows>=1){
	?>
		
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
          <th>Acciones</th>
					<th><a href="index_colaboradores.php" button type="button"  title="Cancelar"class="btn btn-danger">Cancelar</button></th>
					
				   </tr>
				 </thead>
				 
	<?php			 
	
		while($fila=$consulta3->fetch_array(MYSQLI_ASSOC)){
      echo '
      <tr>
      
				<td>'.$fila['Id_usuario'].'</td>
				<td>'.$fila['tipo_usuario'].'</td>
				<td>'.$fila['email'].'</td>
				<td>'.$fila['cuenta'].'</td>
				<td type="password" class="hidetext">'.$fila['contra'].' </td>
				<td>'.$fila['rol'].'</td>
        ';
        
				echo '
							
							<td>
								<a href="edit_colaboradores.php?nik='.$fila['Id_usuario'].'" title="Editar datos" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hId_usuarioden="true"></span>Editar Datos</a>
								<a href="index_colaboradores.php?aksi=delete&nik='.$fila['Id_usuario'].'" title="Eliminar" onclick="return confirm(\'Esta seguro de borrar el Nombre de usuario '.$fila['tipo_usuario'].'?\')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hId_usuarioden="true"></span>Eliminar</a>
							</td>
						
    ';
    echo '
							 <td>
							 
							 </tr>
							 	 ';
						
					}
	}else{
		echo "No hemos encontrado ningun registro con la palabra ".$palabra;
	}
  ?>
  </table>
	       </div> <!--div table responsive-->

		     </div>
	
		
			
	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
	</html>