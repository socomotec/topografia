<?php
class empresa_modelo{

	private $db;
	private $informacion_empresa;
	private $informacion_contacto;
	private $imagen;


	public function __construct(){

		$this->db=Conectar::Conexion(); //Establece la Conexion con la BD
		
		$this->informacion_empresa=array();

		$this->informacion_contacto=array();

		$this->imagen=array();
		 
	}

	// Historia de la empresa

	public function editar_historia($historia, $id){ // Crea la imagen en la base de datos

		$consulta=$this->db->prepare("UPDATE empresa SET historia = ? WHERE id = ? ");
				
		$consulta->bind_param('si', $historia, $id);
				
		$consulta->execute();
	}

	// Mision de la empresa

	public function editar_mision($mision, $id){ // Crea la imagen en la base de datos

		$consulta=$this->db->prepare("UPDATE empresa SET mision = ? WHERE id = ? ");
				
		$consulta->bind_param('si', $mision, $id);
				
		$consulta->execute();
	}

	// Vision de la empresa


	public function editar_vision($vision, $id){ // Crea la imagen en la base de datos

		$consulta=$this->db->prepare("UPDATE empresa SET vision = ? WHERE id = ? ");
				
		$consulta->bind_param('si', $vision, $id);
				
		$consulta->execute();
	}

	// Busca la informacion de la empresa Historia, Mision y Vision

	public function buscar_informacion_empresa(){

		$consulta = $this->db->query("SELECT * FROM empresa");
			
		while($filas = $consulta->fetch_assoc()){
				
			$this->informacion_empresa[]=$filas;
				
		}

		return $this->informacion_empresa;
	}

	// Busca las imagenes de la galeria

	public function buscar_imagen_galeria(){

		$consulta=$this->db->query("SELECT * FROM imagen");

		while ($filas = $consulta->fetch_assoc()){

			$this->imagen[] = $filas;
		}

		return $this->imagen;

	}


	public function subir_imagen_galeria($nombre, $ruta, $descripcion){ 
    
    	$consulta=$this->db->prepare("INSERT INTO imagen (nombre, ruta, descripcion) VALUES (?, ?, ?)");
    
    	$consulta->bind_param("sss", $nombre, $ruta, $descripcion);
    
    	$consulta->execute();  
    
  	}
  
  	public function eliminar_imagen_galeria($id){
    
    	$consulta->$this->db->prepare("DELETE imagen where id = ?");
    
    	$consulta->bind_param("i", $id);
    
    	$consulta->execute();
    
  	}

  	public function editar_imagen_empresa($id, $nombre, $ruta, $descripcion){
    
    	$consulta->$this->db->prepare("UPDATE imagen SET nombre = ?, ruta = ?, descripcion = ? WHERE id = ?");
    
    	$consulta->bind_param("sssi", $nombre, $ruta, $descripcion, $id);
    
    	$consulta->execute();
    
  	}

	// Busca informacion de contacto

	public function buscar_informacion_contacto(){
    
   		$consulta->$this->db->query("SELECT * FROM contacto");
    
    	while($filas=$consulta->fetch_assoc()){
      
      		$this->informacion[]=$filas;
      
    	}
    
    	return $this->informacion;
	}
  
  	// edita la informacion de contacto 

  	public function editar_informacion_contacto($id, $nombre, $celular, $email){
    
    	$consulta->$this->db->prepare("UPDATE contacto SET nombre = ?, celular = ?, email = ? WHERE id = ?");
    
    	$consulta->bind_param("sisi", $nombre, $celular, $email, $id);
    
    	$consulta->execute();
    
  	}

  	

	
}

?>