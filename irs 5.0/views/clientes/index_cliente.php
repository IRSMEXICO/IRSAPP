<?php
require_once("../../model/acciones.php");
$cliente= new consul();
$informacion_c = $cliente->cliente();
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
		<link href="../../content/css/style_nav.css" rel="stylesheet">
		<script src='https://kit.fontawesome.com/a076d05399.js'></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
		<!--SLIDER-->
        <link rel="stylesheet" href="../content/css/nivo-slider.css">
	      <link rel="stylesheet" href="<../content/css/mi-slider.css">
	      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
  	    <script src="../content/js/jquery.nivo.slider.js"></script>
	      <script src="../../content/js/jquery.quicksearch.js" type="text/javascript"></script>
		  <script>
		  // Write on keyup event of keyword input element
$(document).ready(function(){
$("#search").keyup(function(){
_this = this;
// Show only matching TR, hide rest of them
$.each($("#mytable tbody tr"), function() {
if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
$(this).hide();
else
$(this).show();
});
});
});
		  </script>
        <style>

    .content {
      margin-top: 50px;
	}
		
	.img_piezas img{
  	 width: 60px;
  	 height: auto;
   	margin: auto;
	}


  </style>
        <!--**SLIDER**-->
    </head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
<?php include('../../views/clientes/nav.php');?>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Catalogo de Clientes</h2>
			<hr />
			<br />
			<form class="form-inline my-2 my-lg-0" style="float: right;" action= "add_cliente.php">
			<input type="text" id="search" class="form-control mr-sm-2" placeholder="Buscar">
			<button style="float: right;"  type="submit"  class="btn btn-success" value="Agregar Datos" ><span class="fas fa-plus-circle" ></span> Agregar Datos </button>
			</form>
			<br />
			<br />
			
			<div class="table-responsive">
			<table id="mytable" class="table table-hover">
				<thead class="thead-light">
				<tr>
				
					<th>ID</th>
                    <th>Clientes</th>
					<th>Logo</th>
                    <th>Acciones </th>
					
				</tr>
		</thead>
		<?php
				foreach ($informacion_c as $data) { 
		?>
						<tr>
							<td><?php echo $data['id_cliente'];?></td>
							<td><?php echo $data['cliente'];?></td>
              				<input type="hidden" name="foto_actual" name="foto_actual" value="<?php echo $data['foto']; ?>">
							<td class="img_piezas"><img src="<?php echo $data['foto'];?>" alt="<?php echo $data['cliente'];?>"></td>
							<td>
								<a href="edit_cliente.php?nik=<?php echo $data['id_cliente'];?>" title="Editar datos" class="btn btn-info btn-sm"><span class="fa fa-refresh fa-spin"></span> Editar datos</a>
								<a href="../../controller/del_cliente.php?id=<?php echo $data['id_cliente'];?>" title="Eliminar" onclick="return confirm('¿Esta seguro de borrar al cliente <?php echo $data['cliente'];?>?');" class="btn btn-danger btn-sm"><span class="fas fa-trash-alt" ></span> Eliminar</a>
							</td>
							<?php }	?>
			</table>
			</div> <!--div table responsive-->
			
			
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/functions.js"></script>
</body>
</html>
