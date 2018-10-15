<?php
	/**
	* Conexion a la tabla contenedora de los datos del LOGIN
	*/
class Base {

	public function Conectar() {
        $link = mysqli_connect("localhost", "root", "123456789", "Latin_Sport");
        if ($link === FALSE) {
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        return $link;
    }

        public function Login($Usuario, $Password, $Conexion) {
        $sql = "Select Usuario, Password FROM Administrador WHERE Usuario = '$Usuario' and Password = $Password";
        $Datos = mysqli_query($Conexion, $sql);
        return $Datos;
    }

}