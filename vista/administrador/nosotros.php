<?php 
	require_once("../../conexion/bd.php");
	require_once("../../controlador/empresa_controlador.php");
	require_once("../../modelo/empresa_modelo.php");
?>
<html>
	<head>
		<title> MGTOPOGRAFIA </title>		
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
      	<meta name="HandheldFriendly" content="true" />
      	<link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"  media="screen,projection"/>
		<script src="../js/jquery-1.11.js"></script>
      	<script type="text/javascript">
      		$(document).ready(function(){
      			$("#guardar_historia").hide();
      			$("#guardar_mision").hide();
      			$("#guardar_vision").hide();

      		
      		});

      		function ocultar_editar(elmnt,valor){

      				$("#" + valor).removeAttr("readonly");
      				$("#editar_" + valor).hide();
      				$("#guardar_" + valor).show();
      		}
      	</script>
	</head>
	<body>
		<div class="container">
			<br />
			<br />
			<?php foreach(buscar_informacion() as $informacion){ ?>
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h4 class="text-center"> ¿Quiénes Somos? </h4>
					</div>
	  				<div class="panel-body">
	  					<div class="col-xs-12 col-sm-12 col-md-12 collg-12">
	  					<h4> Reseña Histórica </h4>
	  					<br />	
						<textarea id="historia" class="form-control" rows="5" style="resize:none;" readonly><?php echo $informacion['historia']; ?></textarea>				
	  					<br />
	  				<div class="text-right">
						<button id="editar_historia" class="btn btn-warning" onClick="ocultar_editar(this, 'historia')"> Editar </button>
						<button id="guardar_historia" class="btn btn-primary"> Guardar </button>
	  				</div>
	  					<br />
	  				</div>
	  					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">	
						<h4> Misión </h4>
						<br />	
							<textarea id="mision" class="form-control" rows="5" style="resize:none;" readonly><?php echo $informacion['mision']; ?></textarea>			
	  					<br />
	  				<div class="text-right">
						<button id="editar_mision" class="btn btn-warning" onClick="ocultar_editar(this, 'mision')"> Editar </button>
						<button id="guardar_mision" class="btn btn-primary"> Guardar </button>
	  				</div>
	  				<br />
	  					</div>

						

						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<h4> Visión </h4>
						<br />
							<textarea id="vision" class="form-control" rows="5" style="resize:none;" readonly><?php echo $informacion['vision']; ?></textarea>			
	  					<br />
	  				<div class="text-right">
						<button id="editar_vision" class="btn btn-warning" onClick="ocultar_editar(this, 'vision')"> Editar </button>
						<button id="guardar_vision" class="btn btn-primary"> Guardar </button>
	  				</div>
	  					<br /> 
	  			</div>
				</div> <!-- Cierre de Panel -->
			<?php } ?>
		</div> <!-- Cierre del container -->
	</body>
</html>