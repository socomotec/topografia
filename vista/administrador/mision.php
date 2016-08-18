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
	<script type="text/javascript">
		$(document).ready(function(){

			$("#guardar_informacion").hide();
			$("#alerta").hide();

			$("#editar_informacion").click(function(){

				$("#editar_informacion").hide();
				$("#guardar_informacion").show();
				$("#mision").removeAttr("readonly");

			});

			$("#guardar_informacion").click(function(){

				$('#confirmacion').modal('show');

			});

			$("#confirmacion_guardar").click(function(){

				$("#mision").attr("readonly", true);

				var datos = new FormData();
				datos.append('bandera', 'mision');
		        datos.append('id', '1');
		        datos.append('informacion', $("#mision").val());
		   
		        $.ajax({
		        async: false,
		        type: 'POST',
		        url: 'script_empresa.php',
		        data:datos,
		        contentType:false,
		        processData:false,
		        cache:false,
	      
		      	}).done(function(data) { 

		        	$('#confirmacion').modal('hide');
		          	
		          	if(data == "1"){

		          		$("#alerta_informacion").text("La información se actualizo correctamente.");
		          		$("#alerta").removeClass("fadeOut");
		          		$("#alerta").addClass("alert-success alert alert-dismissible fade in animated fadeIn");
		          		$("#alerta").show();
		          		$("#guardar_informacion").hide();
		          		$("#editar_informacion").show();
		          		cronometro_alerta();

		          		

		          	}else{
		          		$("#alerta_informacion").text("La información no se logro actualizar.");
		          		$("#alerta").removeClass("fadeOut");
		          		$("#alerta").addClass("alert-danger alert alert-dismissible fade in animated fadeIn");
		          		$("#alerta").show();
		          		$("#guardar_informacion").hide();
		          		$("#editar_informacion").show();
		          		
		          	}

		    	});


			});

		});

	function cronometro_alerta(){

		contador_segundos =0;
 	    
 	    cronometro = setInterval(
            		function(){
                if(contador_segundos==5)
                {
                $("#alerta").removeClass("fadeIn");
                $("#alerta").addClass("fadeOut");
                }

                if(contador_segundos ==6){
                	$("#alerta").hide();
                	clearInterval(cronometro);
                }
                contador_segundos++;
            		}
            	,1000);

	}
	</script>

</head>
<body>
	<div class="container-iframe hidden-xs hidden-sm"></div>
	<div class="container ">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h3> Misión de la empresa </h3>
				<hr />
				<br />
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div id="alerta" class="" role="alert"> <span id="alerta_informacion"></span> </div>
				<?php foreach(buscar_informacion_empresa() as $informacion){ ?>
					<textarea id="mision" class="form-control textarea " rows="15" readonly><?php echo $informacion['mision']; ?></textarea>
				<?php } ?>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<br />
				<button id="editar_informacion" class="btn btn-warning pull-right"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp Editar</button>
				<button id="guardar_informacion" class="btn btn-primary pull-right"><i class="fa fa-cloud" aria-hidden="true"></i>&nbsp Guardar</button>
				<br />
				<br />
				
			</div>
		</div>

		<div id="confirmacion" class="modal fade" tabindex="-1" role="dialog">
  			<div class="modal-dialog">
   				<div class="modal-content">
      				<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       					<h4 class="modal-title">Confirmación</h4>
      				</div>
      				<div class="modal-body">
        				<p>¿Está seguro que desea guardar la información?</p>
      				</div>
      				<div class="modal-footer">
        				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        				<button id="confirmacion_guardar"type="button" class="btn btn-primary">Guardar</button>
      				</div>
    			</div>
  			</div>
		</div> 

	</div> <!-- Cierre del Container -->	
</body>
</html>