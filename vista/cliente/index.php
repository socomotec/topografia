<?php 
require_once("../../conexion/bd.php");
require_once("../../modelo/empresa_modelo.php");
require_once("../../controlador/empresa_controlador.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="HandheldFriendly" content="true" />
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../cliente/css/estilo.css"/>
	<script src="../js/jquery-1.11.js"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>
	<script src="js/scroll.js" ></script>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">

	
	
	<title>MGTOPOGRAFIA</title>
	
</head>
<body>
	
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation"> 
		
		<div class="container"> 
			<div class="navbar-header page-scroll">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menus" style="margin-top:10px;"> 
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
                	<span class="icon-bar"></span>
                	<span class="icon-bar"></span>
                	<span class="icon-bar"></span>
				</button>

				<a id="img-principal-lg" class="page-scroll visible-lg" href="#page-top"> <img class="img-principal" src="imagenes/mgtopo.png" alt="Brand"> </a>	
				<a id="img-principal-md" class="page-scroll visible-md" href="#page-top"> <img class="img-principal-md" src="imagenes/mgtopo.png" alt="Brand"> </a>	
				<a class="navbar-brand page-scroll visible-sm visible-xs" href="#page-top"> <img class="img-principal-md " src="imagenes/mgtopo.png" alt="Brand"> </a>		
				
			</div>
			<div id="div-brs">
				<br class="visible-lg">
				<br class="visible-lg">
				<br class="visible-md">
			</div>
			<div class="collapse navbar-collapse navbar-right navbar-main-collapse" id="menus">	
				<ul class="nav navbar-nav"> 
					<li class="hidden active">
						<a href="#page-top"></a> 
					</li>
					<li> 
						<a class=" zoom visible-xs visible-sm" href="#page-top"> <i class="fa fa-home fa-lg" aria-hidden="true"></i> &nbsp; Inicio </a> 
						<a class=" zoom hidden-xs hidden-sm" href="#page-top"> <i class="fa fa-home fa-lg" aria-hidden="true"> </i></a> 
					</li> 
					<li>
						<a href="#nosotros" class= " zoom visible-xs visible-sm"><i class="fa fa-users fa-lg" aria-hidden="true"></i>&nbsp;¿Quiénes Somos?</a>
						<a href="#nosotros" class=" zoom hidden-xs hidden-sm">¿Quiénes Somos?</a>
			        </li>
					<li> 
						<a class=" zoom visible-xs visible-sm" href="#calidad"><i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i>&nbsp;Calidad</a>
						<a class=" zoom hidden-xs hidden-sm" href="#calidad">Calidad</a> 
					</li> 
					<li>  
						<a class=" zoom visible-xs visible-sm" href="#servicios"><i class="fa fa-cogs fa-lg" aria-hidden="true"></i> &nbsp;Servicios</a> 
						<a class=" zoom hidden-xs hidden-sm" href="#servicios">Servicios</a> 
					</li> 
					<li > 
						<a class=" zoom visible-xs visible-sm" href="#areatrabajo"><i class="fa fa-wrench fa-lg" aria-hidden="true"></i>&nbsp;Áreas de Trabajo</a>
						<a class=" zoom hidden-xs hidden-sm" href="#areatrabajo">Áreas de Trabajo</a>  
					</li> 
					<li > 
						<a class=" zoom visible-xs visible-sm" href="#galeria"><i class="fa fa-picture-o fa-lg" aria-hidden="true"></i>&nbsp;Galería</a> 
						<a class=" zoom hidden-xs hidden-sm" href="#galeria">Galería</a>
					</li> 
					<li > 
						<a class=" zoom visible-xs visible-sm" href="#contacto"><i class="fa fa-envelope-o  fa-lg" aria-hidden="true"></i>&nbsp;Contacto</a> 
						<a class=" zoom hidden-xs hidden-sm" href="#contacto">Contacto</a> 
					</li>
				</ul> 
			</div> 
		</div> 
	</nav>
	
	<div id="page-top" class="container-fluid full">
	</div>
	<div id="nosotros" class="container-fluid">		
		<div class="container scrollflow -slide-top -opacity">
			<br class="hidden-xs hidden-sm">
			<br class="hidden-xs hidden-sm">
			<br>
			<div class="page-header text-center">
            	<h2>¿Quiénes Somos?</h2>
        	</div>
			<div class="row">
				<div class="hidden-xs hidden-sm">
				    <ul class="nav nav-pills nav-stacked col-md-3">
						<li class="active">
					  		<a href="#resena" data-toggle="tab">Historia</a>
					  	</li>
					  	<li>				 
					  		<a href="#mision" data-toggle="tab">Misión</a>
					  	</li>
					  	<li> 				 
					  		<a href="#vision" data-toggle="tab">Visión</a>
					  	</li>
					</ul>
				</div>
				<div class="visible-xs visible-sm">
					<ul class="nav nav-tabs">
						<li class="active">
					  		<a href="#resena" data-toggle="tab">Historia</a>
					  	</li>
					  	<li>				 
					  		<a href="#mision" data-toggle="tab">Misión</a>
					  	</li>
					  	<li> 				 
					  		<a href="#vision" data-toggle="tab">Visión</a>
					  	</li>
					</ul>
				</div>
				<div id="tab_nosotros" class="tab-content col-md-9">
					<div class="tab-pane fade active in" id="resena">
						<br class="hidden-md hidden-lg" />
					    <?php foreach(buscar_informacion_empresa() as $informacion){ ?>
							<p><?php echo $informacion['historia']; ?></p>
						<?php } ?>
					</div>
					<div class="tab-pane fade" id="mision">
						<br/ >
						<?php foreach(buscar_informacion_empresa() as $informacion){ ?>
							<p><?php echo $informacion['mision']; ?></p>
						<?php } ?>
					</div>

					<div class="tab-pane fade" id="vision">
						<br />
						<?php foreach(buscar_informacion_empresa() as $informacion){ ?>
							<p><?php echo $informacion['vision']; ?></p>
						<?php } ?>
					</div>
				</div>				
			</div>
		</div>
	</div>
	
	<div id="calidad" class="container-fluid full">
		<div class="page-header text-center">
           	<h1>Calidad</h1>
        </div>
		<h1>Calidad</h1>
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>	
	</div>
	<div id="servicios" class="container-fluid full">
		<div class="page-header text-center">
           	<h1>Servicios</h1>
        </div>
		
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>	
	</div>
	<div id="areatrabajo" class="container-fluid full">
		<div class="page-header text-center">
           	<h1>Áreas de Trabajo</h1>
        </div>
		
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>	
	</div>


	<div id="galeria" class="container-fluid ">
		<div class="page-header text-center scrollflow -slide-top -opacity">
           	<h1>Galería</h1>
        </div>
		<div class="container scrollflow -slide-top -opacity">
			<div class="row">

				<div class="col-xs-12  col-md-6 col-lg-4 molde">
					<a href="#">
						<article class="galery" style=" background-image: url('imagenes/topo.jpg');" >
							<div class="galeria">
								<div class="titulo-galery">
									<h4 > 30 de Febrero 2010</h4>
									<h1>Contru mi casa</h1>
								</div>
								<div class="wrapc text-center">
									<h4>un dia vinieron a medir mi casita, quedo filete, son secos los logis.. ademas el seba se la come todaa todaa atravezada el muy gay</h4>
								</div>	
							</div>
						</article>
					</a>	
				</div>
				<div class="col-xs-12  col-md-6 col-lg-4 molde">
					<a href="#">
						<article class="galery" style=" background-image: url('imagenes/fondo_3.jpg');" >
							<div class="galeria">
								<div class="titulo-galery">
									<h4> 30 de Febrero 2010</h4>
									<h1>Contru mi casa</h1>
								</div>
								<div class="wrapc text-center">
									<h4>un dia vinieron a medir mi casita, quedo filete, son secos los logis.. ademas el seba se la come todaa todaa atravezada el muy gay</h4>
								</div>	
							</div>
						</article>
					</a>	
				</div>
				<div class="col-xs-12  col-md-6 col-lg-4 molde">
					<a href="#">
						<article class="galery" style=" background-image: url('imagenes/contac.jpg');" >
							<div class="galeria">
								<div class="titulo-galery">
									<h4> 30 de Febrero 2010</h4>
									<h1>Contru mi casa</h1>
								</div>
								<div class="wrapc text-center">
									<h4>un dia vinieron a medir mi casita, quedo filete, son secos los logis.. ademas el seba se la come todaa todaa atravezada el muy gay</h4>
								</div>	
							</div>
						</article>
					</a>	
				</div>
				

			</div>
		</div>	
	</div>


	<div id="contacto" class="container-fluid">
		<div class="container scrollflow -slide-bottom -opacity">
			<div class="page-header text-center ">
           		<h1>Contacto</h1>
        	</div>
        	<div class="text-center">
        		<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ab, incidunt, numquam sunt aliquid nobis. Explicabo beatae vel iusto aut, cumque laudantium fugit molestiae quis soluta, unde cupiditate omnis quaerat.</h3>
        	</div>
        </div>
	</div>
	<div id="" class="container-fluid contacto">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-5 scrollflow -slide-right -opacity">
					<div class="hidden-xs">
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
					</div>
					<div class="target media zoom-contac">
						<div class="media-left hidden-xs">
							<img class="img img-contacto" src="imagenes/mgtopo.png" alt="Responsive image">
						</div>
						<div class="media-body">
							<br class="hidden-xs " >
							<h4 class="text-center" ><i class="fa fa-envelope fa-2x" aria-hidden="true"></i>&nbsp;<a href="mailto:contacto@mgtopografia.cl">contacto@mgtopografia.cl</a></h4>
						</div>
					</div>
				</div>
				<br class="visible-xs visible-sm">

				<div id="mensaje" class="col-sm-5 col-sm-offset-1 col-md-5 col-md-offset-2 scrollflow -slide-left -opacity">
					<h3 class="text-center" ><strong>Comunicate con Nosotros</strong></h3>
					<div class="col-xs-12">
						<h4><small>MGTopografía, Chillán, Chile</small></h4>
					</div>
					<br>
					<br>
					<form class="form-horizontal" role="form">
						<div class="form-group">
					        <label class="control-label col-xs-3">Nombre:</label>
					        <div class="col-xs-8">
					            <input type="text" class="form-control" placeholder="Nombre">
					        </div>
					    </div>
					    <div class="form-group">
					        <label class="control-label col-xs-3" >Teléfono:</label>
					        <div class="col-xs-8">
					            <input type="tel" class="form-control" placeholder="Teléfono">
					        </div>
					    </div>
						<div class="form-group">
						    <label class="control-label col-xs-3">Email:</label>
						  	<div class="col-xs-8">
						        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
					        </div>
					    </div>
					    <div class="form-group">
						    <label class="control-label col-xs-3">Mensaje:</label>
						  	<div class="col-xs-8">
						        <textarea type="text" class="form-control textarea" id="inputMensaje" rows="10" cols="40" placeholder="Mensaje"></textarea>
					        </div>
					    </div>			    
				    	<br>
					    <div class="form-group">
					        <div class="col-xs-11 text-right">
					            <button  type="submit" class="btn btn-primary" value="Enviar">  <i class="fa fa-paper-plane" aria-hidden="true"></i>&nbsp; &nbsp;Enviar</button>
					        </div>
					    </div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="container dueno">
			<div class="row scrollflow -pop -opacity">
				<div class="col-xs-12 col-sm-4 col-md-5 ">
					<h3 class="hidden-xs"> Miguel Gonzalez Sanhueza</h3>
					<h3 class="text-center visible-xs"> Miguel Gonzalez Sanhueza</h3>
				</div>
				<div class="col-xs-12 col-sm-8 col-md-7">
					<div>
					<br class="hidden-xs" >
						<span class="col-xs-12 col-sm-5 " >
							<h5 class="hidden-xs" ><i class="fa fa-phone fa-1x" aria-hidden="true"></i><label>&nbsp;Cel. +56975479576</label></h5>
							<h5 class="text-center visible-xs"><i class="fa fa-phone fa-1x" aria-hidden="true"></i><label>&nbsp;Cel. +56975479576</label></h5>
						</span>
						<span class="col-xs-12 col-sm-7">
							<h5 class="hidden-xs" ><i class="fa fa-envelope fa-1x" aria-hidden="true"></i><a href="mailto:mgonzalez@mgtopografia.cl">&nbsp;Email mgonzalez@mgtopografia.cl</a></h5>
							<h5 class="text-center visible-xs"><i class="fa fa-envelope fa-1x" aria-hidden="true"></i><a href="mailto:mgonzalez@mgtopografia.cl">&nbsp;Email mgonzalez@mgtopografia.cl</a></h5>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer class="footer">
    	<div class="container footer-f">
        	<div class="row">
        		<br>
	     		<div class="col-xs-6"> 
	     			<blockquote class="blockquote-reverse">
  						<h4 class="">MGTOPOGRAFÍA </h4>
  						<small>Ingresa a nuestro sitio personalizado</small>
					</blockquote>
	    		</div>
	    		<br class="visible-xs" >
	    		<div class="col-xs-6"> 
					<a href="../administrador/panel_administrativo.php"> <h5> Administrador </h5> </a>
		        	<a href=""> <h5> Cliente </h5> </a>
				</div>
        	</div>
      	</div>
      	<div class="container-fluid socomtec">
      		<div class="container hidden-xs">
        		<h5 class="col-sm-9">© 2016 Socomtec. Diseñado por <a href="http://www.socomtec.cl"> SOCOMTEC LTDA </a> </h5>
        		<i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i>
        		<i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
        		<i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
       		</div>
       		<div class="container visible-xs text-center">
        		<h5 class="col-sm-9">© 2016 Socomtec. 
					<i class="fa fa-facebook-official" aria-hidden="true"></i>
        			&nbsp;<i class="fa fa-twitter" aria-hidden="true"></i>
        			&nbsp;<i class="fa fa-instagram" aria-hidden="true"></i>
        		</h5>
        		<h6> Diseñado por <a href="http://www.socomtec.cl"> SOCOMTEC LTDA </a> </h6>
       		</div>
       	</div>
      <!-- fin footer -->
</footer>
<script>
		$('body').scrollspy({target: ".navbar", offset: 50});
  // Add smooth scrolling on all links inside the navbar
  $("#menus a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();
      // Store hash
      var hash = this.hash;
      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 1500, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    }  // End if xD xD
  });
	</script>
	<script src="../cliente/js/classie.js"></script>
    <script src="../cliente/js/cbpAnimatedHeader.js"></script>
</body>
</html>