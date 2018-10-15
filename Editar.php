<?php
    include './Clases/Conexion.php';
    include './Clases/Usuario.php';
    
    $ObjConexion = new Conexion();
    $ObjUsuario = new Usuario();
    
    $Conexion = $ObjConexion->Conectar();
    $Asunto = $_GET['Asunto'];
    $Datos = $ObjUsuario->ConsultarAsunto($Conexion, $Asunto);
    

    while ($row = mysqli_fetch_array($Datos)){
        $Asunto = $row['Asunto'];        
    }
?>
<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8"/>
        <title> Latin Sport F.C – Escuela de Fútbol</title>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="Estilos.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">        
    </head>

    <body class="Body">
        <header>
            <h1>
                <p> 
                    <nav class="navbar navbar-light bg-light">
                        <a class="navbar-brand" href="Inicio.php">
                            <img src="Imagenes/Logo.jpg" width="30" height="30" class="d-inline-block align-top" alt=""> LATIN SPORT F.C </a>
                        <a href="Ingresar.php"><h5> Ingresar </h5></a>
                        <form action="Consulta" class="form-inline my-2 my-lg-0" name="Consulta" method="post">
                            <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
                          <button class="btn btn-outline-success my-2 my-sm-0" type="submit"> Buscar </button>
                        </form>
                    </nav>

        <h3>Editar Asunto</h3> 
        <form action="Controlador/Editar.php" method="post">
            <input name="Asunto" type="hidden" value="<?php echo $Asunto ; ?>">
            <label>Asunto: </label><input type="text" name="Asunto" value="<?php echo $Asunto; ?>"><br><br>            
            <input type="submit" value="Modificar">
        </form>
        <?php
        ?>
    </body>
</html>