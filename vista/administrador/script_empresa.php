<?php

	require_once("../../conexion/bd.php");
	require_once("../../controlador/empresa_controlador.php");
	require_once("../../modelo/empresa_modelo.php");

	$bandera = $_POST['bandera'];
	$id = $_POST['id'];
	$informacion = $_POST['informacion'];


		switch($bandera){

			case 'historia':

				if(editar_historia($informacion, $id)){

					echo "2";

				}else{

					echo "1";
				}

			break;

			case 'mision':

				if(editar_mision($informacion, $id)){

					echo "2";

				}else{

					echo "1";

				}

			break;

			case 'vision':

				if(editar_vision($informacion, $id)){

					echo "2";

				}else{

					echo "1";
				}

			break;

			default:

				echo "1";

			break; 

		}

 ?>