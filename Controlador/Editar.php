<?php
    include '../Clases/Conexion.php';
    include '../Clases/Usuario.php';
    
    $ObjConexion = new Conexion();
    $ObjUsuario = new Usuario();
    
    $Conexion = $ObjConexion->Conectar();
    echo $ObjUsuario->Editar($Conexion, $Asunto);
    echo "<br>";
    echo "<br>"; 
    echo "<a href='../Index.php'>Volver</a>";