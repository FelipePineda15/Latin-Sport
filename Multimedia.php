<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8"/>
        <title> Latin Sport F.C – Escuela de Fútbol</title>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="CSS/Estilos.css">
        <link rel="stylesheet" type="text/css" href="CSS/Multimedia.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> 
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
        <section class="content">
            <div class="caja">
                <div class="container">
                    <h1 class=""> <a class="" href="Multimedia.php">
                        <img src="CSS/Imagenes/Logo.jpg" width="30" height="30" class="d-inline-block align-top" alt=""> Multimedia Latin Sport F.C </a>
                    </h1>                
                </div>
            </div>
            <div class="container1">
                    <div class="box">
                        <div class="icon"><i class="fa fa-camera" aria-hidden="true"></i></div>
                        <div class="content1">
                            <a href="Fotos.php"><h3>Fotos</h3>
                                <p> Mira nuestros mejores momentos. </p>
                            </a>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa fa-video-camera" aria-hidden="true"></i></div>
                        <div class="content1">
                            <a href="Videos.php"><h3>Videos</h3>
                                <p> Mira nuestros mejores recuerdos. </p>
                            </a>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa fa-futbol-o" aria-hidden="true"></i></div>
                        <div class="content1">
                            <a href="NuestrosJugadores.php"><h3>Nuestros Jugadores</h3>
                                <p> Conoce a nuestros soñadores. </p>
                            </a>
                        </div>
                    </div>                   
            </div>
            <div class="jumbotron jumbotron-fluid">
                <div class="container">                    
                    <p align="left">
                        <h2> Encuentranos </h2>
                        <h3> SEDE ADMINISTRATIVA: </h3>
                        <h6> Carrera 154 # 150-35 Casa 142 </h6>
                        <h6> Urbanizacion Quintas de Santa Rita</h6>
                        <h6> Suba Bilbao, Bogotá.</h6>
                        <h3> SEDE ENTRENAMIENTO: </h3>
                        <h6> Diagonal 150 # 145-50 </h6>
                        <h6> Suba Bilbao, Bogotá.</h6>     
                    </p>
                </div>        
            </div>
        </section>
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