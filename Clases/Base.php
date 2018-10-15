<?php
	/**
	Conexion a la tabla contenedora de los datos del LOGIN
    **/
class Base {

        public function Login($Usuario, $Password, $Conexion) {
        $sql = "SELECT Usuario, Password FROM Administrador WHERE Usuario = '$Usuario' AND Password = $Password";
        $Datos = mysqli_query($Conexion, $sql);
        return $Datos;
    }

    public function VerificarContraseña($Password, $Conexion){
        $sql = "SELECT Password FROM Administrador";
        $Datos = mysqli_query($Conexion, $sql);
        return $Datos;
    }

    public function VerificarUsuario($Username, $Conexion){
        $sql = "SELECT Username FROM Administrador";
        $Datos = mysqli_query($Conexion, $sql);
        return $Datos;
    }

}