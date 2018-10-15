<?php

	session_start();

	include './Clases/Conexion.php';
	include "./Clases/Usuario.php";

	$ObjUsuario = new Usuario();
	$ObjConexion = new Conexion();
	$Conexion = $ObjConexion->Conexion();	
	$Datos = $ObjUsuario->Consultar($Conexion);

?>
<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8"/>
        <title> Latin Sport F.C – Escuela de Fútbol</title>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="CSS/Estilos.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">       
    </head>

    <body class="Body">
        <div class="wrapper">
            <header>

                  <nav>

                        <div class="menu-icon">
                              <i class="fa fa-bars fa-2x"></i>
                        </div>

                        <div class="logo">
                              <a class="navbar-brand" href="Inicio.php">
                                <img src="CSS/Imagenes/Logo.jpg" width="30" height="30" class="d-inline-block align-top" alt=""> LATIN SPORT F.C
                            </a>
                        </div>

                        <div class="menu">
                              <ul>
                                    <li><a href="Inicio.php">Inicio</a></li>
                                    <li><a href="QuienesSomos.php">Quienes Somos</a></li>
                                    <li><a href="Multimedia.php">Multimedia</a></li>
                                    <li><a href="Contactenos.php">Contactenos</a></li>
                                    <li><a href="Ingresar.php">Ingresar</a></li>
                              </ul>
                        </div>
                  </nav>

            </header>
        </div>
		<form action="Controlador/Registro.php" method="post">	
			<section class="content">       
            <div class="caja">
                <div class="container">
                    <h1 class="">
                    	<a class="" href="">
                        <img src="CSS/Imagenes/Logo.jpg" width="30" height="30" class="d-inline-block align-top" alt=""> Publicaciones </a>
                    </h1>                
            	</div>
            </div>
			<table class="table table-dark">
				<thead>
					<tr>
					    <th scope="col">#Publicacion</th>
					    <th scope="col">Usuario</th>
					    <th scope="col">Publicacion</th>
					    <th scope="col">Accion</th>
				    </tr>
				</thead>
				<?php
		            $sql = "SELECT ID_Publicacion, Usuario, Asunto "
		                    ."FROM Publicacion INNER JOIN Usuario "
		                    ."ON Publicacion.ID_Usuario = Usuario.ID_Usuario";
		            $Dato = mysqli_query($Conexion, $sql);
		            while ($Dato = mysqli_fetch_array($Datos)) {
                ?>
			  <tbody>
			    	<tr>
			    		<td><?php echo $Dato['ID_Publicacion']?></td>
			    		<td><?php echo $Dato['ID_Usuario']?></td>
			    		<td><?php echo $Dato['Asunto']?></td>
			    		<td><a href="Editar.php?Asunto=<?php echo $Dato['Asunto'];?>">Editar</a></td>
            			<td><a href="Controlador/Eliminar.php?ID=<?php echo $Dato['Asunto'];?>">Eliminar</a></td>
			    	</tr>			    	
			  </tbody>
			  	<?php
            		}
            	?>
			</table>
			<div class="caja">
    			<h1 class=""> 
    				<a class="" href=""> Escribe tu mensaje </a>
                </h1>
    			<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Asunto"></textarea>
  			</div>
			<p>
                <div class="caja">
                    <input type="submit" class="btn btn-primary mb-2">          
                </div>
            </p>
			<div class="jumbotron jumbotron-fluid">
	            <div class="container">
	                <h1 class="display-4"> Encuentranos </h1>
	                <p align="left">
	                    <h2> Latin Sport F.C </h2>
	                    <br>
	                    <p> SEDE ADMINISTRATIVA: </p>
	                    <h6> Carrera 154 # 150-35 Casa 142 </h6>
	                    <h6> Urbanizacion Quintas de Santa Rita</h6>
	                    <h6> Suba Bilbao, Bogotá.</h6>
	                    <br>
	                    <p> SEDE ENTRENAMIENTO: </p>
	                    <h6> Diagonal 150 # 145-50 </h6>
	                    <h6> Suba Bilbao, Bogotá.</h6>	                    
	                </p>
	            </div>
        	</div>
		</form>
		<script type="text/javascript">

          // Menu-toggle button

            $(document).ready(function() {
                $(".menu-icon").on("click", function() {
                    $("nav ul").toggleClass("showing");
                });
            });

          // Scrolling Effect

            $(window).on("scroll", function() {
                if($(window).scrollTop()) {
                    $('nav').addClass('black');
                }

                else {
                    $('nav').removeClass('black');
                }
            })
        </script>
	</body>
</html>