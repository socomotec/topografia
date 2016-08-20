<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="description" content="MGTOPOGRAFÍA es una empresa dedicada al rubro topografico.">
    <meta name="author" content="SOCOMTEC LTDA">

    <title>MGTOPOGRAFÍA</title>
    
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/simple-sidebar.css" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top" style="margin-bottom:0px;">
  <div class="container">
    <div class="navbar-header pull-right container">
        <button id="menu-toggle" href="#menu-toggle" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        
      </button>
      
    </div>
  </div>
</nav>

    <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a class="text-center" style="margin-left: -20px;">
                        Menú Administrativo
                    </a>
                </li>
                
                <li >
                    <a onClick="cambiar_icono_collapse('pagina')" role="button" data-toggle="collapse" data-parent="#accordion" href="#pagina" > 
                        <i class="fa fa-globe" aria-hidden="true"></i>
                        Página 
                        <div class="pull-right"> 
                            <i id="collapse_pagina" class="fa fa-chevron-right" aria-hidden="true"></i> 
                        </div>
                    </a> 
                    <ul id="pagina" class="panel-collapse collapse">
                        <li>
                            <a href="resena_historica.php" target="contenido"> <i class="fa fa-history" aria-hidden="true"></i> Historia</a>
                        </li>
                        <li>
                            <a href="mision.php" target="contenido"><i class="fa fa-flag" aria-hidden="true"></i> Misión</a>
                        </li>
                        <li>
                            <a href="vision.php" target="contenido"> <i class="fa fa-eye" aria-hidden="true"></i> Visión</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-trophy" aria-hidden="true"></i> Calidad</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench" aria-hidden="true"></i> Servicios</a>
                        </li>
                        <li>
                            <a href="#"> <i class="fa fa-industry" aria-hidden="true"></i> Áreas de Trabajo</a>
                        </li>
                        <li>
                            <a href="galeria.php" target="contenido"> <i class="fa fa-picture-o" aria-hidden="true"></i> Galería </a>
                        </li>
                        <li>
                            <a href="contacto.php" target="contenido"><i class="fa fa-user" aria-hidden="true"></i> Contacto</a>
                        </li>

                    </ul>
                </li>
                <li>
                    ------------------------------------
                </li>
                <li>
                    <a href="#"> <i class="fa fa-envelope" aria-hidden="true"></i> Correo</a>
                </li>
                <li>
                    ------------------------------------
                </li>
                <li>
                    <a href="#"><i class="fa fa-users" aria-hidden="true"></i> Clientes </a>
                </li>
                <li>
                    ------------------------------------
                </li>
            </ul>
        </div>
    
        <iframe id="contenido" name="contenido" width="100%" frameborder="0"></iframe>
    
    </div>

    
    <script src="../js/jquery.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

    $(document).ready(function(){

        $("#contenido").height($(window).height()-50);



    });

    function cambiar_icono_collapse(valor){

        if($("#collapse_"+ valor).hasClass('fa-chevron-right')){

            $("#collapse_" + valor).removeClass('fa-chevron-right');
            $("#collapse_" + valor).addClass('fa-chevron-down');

        }else{

            $("#collapse_" + valor).removeClass('fa-chevron-down');
            $("#collapse_" + valor).addClass('fa-chevron-right');
        }
    }
    
    </script>

</body>

</html>
