<?php

	// Historia de la Empresa.

	function editar_historia($historia, $id){

		$modelo_empresa = new empresa_modelo();

		$datos = $modelo_empresa->editar_historia($historia, $id);

	}

	//Misión de la Empresa.

	function editar_mision($mision, $id){

		$modelo_empresa = new empresa_modelo();

		$datos = $modelo_empresa->editar_mision($mision, $id);

	}

	//Visión de la Empresa.

	function editar_vision($vision, $id){

		$modelo_empresa = new empresa_modelo();

		$datos = $modelo_empresa->editar_vision($vision, $id);

	}

	//Buscar información de la empresa.

	function buscar_informacion_empresa(){

		$modelo_empresa = new empresa_modelo();

		$datos = $modelo_empresa->buscar_informacion_empresa();
		
		return $datos;

	}

	// Galeria de Imagenes

	function buscar_galeria_imagenes(){

		$modelo_empresa = new empresa_modeo();

		$datos = $modelo_empresa->buscar_imagen_galeria();

		return $datos;

	}

	function subir_imagen($nombre, $ruta, $descripcion){
  
  		$modelo_empresa = new empresa_modelo();
  
  		$datos = $modelo_empresa->subir_imagen_galeria($nombre, $ruta, $descripcion);
  
  	}

	function editar_imagen($id, $nombre, $ruta, $descripcion){
  
  		$modelo_empresa = new empresa_modelo();
  
  		$datos = $modelo_empresa->editar_imagen_galeria($id, $nombre, $ruta, $descripcion);
  
  	}

	function eliminar_imagen($id){
  
  		$modelo_empresa = new empresa_modelo();
  
  		$datos = $modelo_empresa->eliminar_imagen_galeria($id);
  
  	}

  	//Contacto

  	function editar_contacto(){

  		$modelo_empresa = new empresa_modelo();

  		$datos = $modelo_empresa->editar_informacion_contacto($id, $nombre, $celular, $email);
  	}

  	function buscar_informacion_contacto(){

  		$modelo_empresa = new empresa_modelo();

  		$datos = $modelo_empresa->buscar_informacion_contacto();

  		return $datos;
  	}


	



?>