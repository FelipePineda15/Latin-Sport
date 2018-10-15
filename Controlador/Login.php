<?php

//Conexion  a la Clase Base
include '../Clases/Base.php';

$ObjConexion = new Conexion();
$Conexion = $ObjConexion->Login($_POST['Username'], $_POST['Password']);

//Inicio de sesion o reanudacion de la existente

if(isset($_SESSION[$Usuario])){
	header("Location:../Index.php");
}

$Error = array();

if(!empty($_POST))
	{
		$usuario = $mysqli->real_escape_string($_POST['Usuario']);
		$password = $mysqli->real_escape_string($_POST['Password']);
		
		if(isNullLogin($usuario, $password))
		{
			$Error[] = "Location:../Error.php";
		}
		
		$Error[] = login($usuario, $password);	
	}
?>