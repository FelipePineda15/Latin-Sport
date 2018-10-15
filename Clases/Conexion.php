<?php

	/**
	* Conexion a la base de datos.
	*/
	class Conexion{
		
		public function Conexion()
		{
			$sql = mysqli_connect("localhost","root","123456789", "Administrador");
			if ($sql === false){
				die("ERROR: Could not connect. ".mysqli_connect_error());
			}
			return $sql;
		}
	}