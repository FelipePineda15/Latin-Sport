<?php

include '../Clases/Conexion.php';
include '../Clases/Usuario.php';

$ObjConexion = new Conexion();
$Conexion = $ObjConexion->Conectar();

$ObjUsuario = new Usuario();
echo $ObjUsuario->SubirContenido($Conexion, $_POST['Asunto']);

echo "<br>";
echo "<br>";
echo "<a href='../Index.php'>Atras</a>";