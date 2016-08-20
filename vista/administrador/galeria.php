<?php 
	require_once("../../conexion/bd.php");
	require_once("../../controlador/empresa_controlador.php");
	require_once("../../modelo/empresa_modelo.php");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Misión</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	    <meta name="HandheldFriendly" content="true" />
	    <link type="text/css" rel="stylesheet" href="../css/estilo.css" />
	    <link type="text/css" rel="stylesheet" href="../animate/animate.css" /> 
	    <link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"  media="screen,projection" />
	    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
		<script src="../js/jquery-1.11.js"></script>
		<script src="../bootstrap/js/bootstrap.min.js"></script>
		<script>

		</script>

	</head>

	<body>
		<div class="container">
			
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h3> Galería de imágenes </h3>
					<hr />
					<br />

				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<table class="table table-hover text-center">
						<thead >
							<th class="hidden"> id </th>
							<th class="text-center"> Nombre </th>
							<th class="text-center hidden-xs hidden-sm"> Ruta </th>
							<th class="text-center hidden-xs hidden-sm"> Descripción </th>
							<th class="text-center"> Acciones </th>
						</thead>
						<tbody>
							<?php foreach(buscar_galeria_imagenes() as $imagen){ ?> 
							<tr>	
								<td class="hidden"> <?php echo $imagen['id']; ?> </td>
								<td class="hidden-xs hidden-sm"> <?php echo $imagen['nombre']; ?> </td>
								<td class="hidden-xs hidden-sm"> <?php echo $imagen['ruta']; ?> </td>
								<td> <?php echo $imagen['descripcion']; ?> </td>
								<td> 

									<button class="btn btn-primary" id="<?php echo 'ver-'.$mensaje['id']; ?>"> <i class="fa fa-picture-o" aria-hidden="true"></i> </button> 
  										
  									<button class="btn btn-warning" id="<?php echo 'ver-'.$mensaje['id']; ?>"> <i class="fa fa-pencil" aria-hidden="true"></i> </button> 
  									
  									<button class="btn btn-danger" id="<?php echo 'ver-'.$mensaje['id']; ?>"> <i class="fa fa-trash" aria-hidden="true"></i> </button> 
  									
								</td>
							</tr>
							<?php } ?>
						</tbody>
						<tfoot>
							<tr>
							<td colspan="4"> <button class="btn btn-success" id="subir_imagen" data-toggle="modal" data-target="#subir_imagen_modal"> <i class="fa fa-plus" aria-hidden="true"></i> &nbsp; Subir imágen</button>  </td>
						</tr>
						</tfoot>
					</table>
				</div>
			</div>

			


			<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="subir_imagen_modal">
			  <div class="modal-dialog modal-lg" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			      	
			      	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			      	<h4 class="text-center">Subir imágen</h4>
			      </div>
			      <div class="modal-body">
			      	hola
			      </div>
			    </div>
			  </div>
			</div>
		</div>
	</body>
</html>