<?php
class mensaje_modelo{

	private $db;
	private $mensaje;


	public function __construct(){

		$this->db=Conectar::Conexion(); //Establece la Conexion con la BD
		
		$this->mensaje=array();
		 
	}

	public function buscar_mensaje($estado){


		$consulta = $this->db->query("SELECT * FROM mensaje WHERE estado = $estado");
			
		while($filas = $consulta->fetch_assoc()){
				
			$this->mensaje[]=$filas;
				
		}

		return $this->mensaje;
	
	}

	public function buscar_mensaje_especifico($id){


		$consulta = $this->db->query("SELECT * FROM mensaje WHERE id = $id");
			
		while($filas = $consulta->fetch_assoc()){
				
			$this->mensaje[]=$filas;
				
		}

		return $this->mensaje;
	
	}
	
}