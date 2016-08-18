<?php
class Conectar{
	
	public static function Conexion(){
		
		$direccion = "localhost"; // dirección de la base de datos
		$usuario = "root";		  // Usuario que utilizaremos
		$password = "";			  // Contraseña del usuario
		$bd = "mgtopografia";				  // nombre de la base de datos a utilizar


		$conexion = new mysqli($direccion, $usuario, $password, $bd);
		
		$conexion->query("SET NAMES 'utf8'");
		
		return $conexion;
		
		}
	}
?>