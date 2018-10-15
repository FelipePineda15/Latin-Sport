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
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">   
  </head>

  <body class="body1">
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
        </nav>
      </header>
    </div>    
    
    <div class="login-box">
      <img src="CSS/Imagenes/Logo.jpg" class="avatar" alt="Avatar Image">
      <h1>Login Here</h1>
      <form action="./Controlador/Login.php" method="post">
        <!-- USERNAME INPUT -->
        <label for="Username">Username</label>
        <input type="text" placeholder="" required="" name="Username" title="Username">
        <!-- PASSWORD INPUT -->
        <label for="Password">Password</label>
        <input type="password" placeholder="" required="" name="Password" title="Password">
        <input type="submit" value="Log In">        
      </form>
        <a href="Inicio.php"><input type="submit" value="Volver"></a>
    </div>
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