<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8"/>
        <title> Latin Sport F.C – Escuela de Fútbol</title>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="CSS/Estilos.css">
        <link type="text/css" rel="stylesheet" href="CSS/Formulario.css">
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
        <section class="content">
            <div class="caja">
                <div class="container">
                    <h1 class=""> <a class="" href="Inicio.php">
                        <img src="CSS/Imagenes/Logo.jpg" width="30" height="30" class="d-inline-block align-top" alt=""> Bienvenido a la Gran Familia Latin Sport F.C </a> </h1>                
                </div>
            </div>
            <div class="caja">
                <div class="container">                
                    <img src="CSS/Imagenes/latin.jpg" width="720" height="420px" class="d-inline-block align-top" alt="">
                </div>
            </div>
            <div class='form-overlay'></div>
            <div class='icon fa fa-pencil' id='form-container'>
                <span class='icon fa fa-close' id='form-close'></span>
                <div id='form-content'>
                <div id='form-head'>
                    <h1 class='pre'>Contactanos</h1>
                    <p class='pre'>Deja tus datos y nos comunicaremos contigo</p>            
                </div>
                <form>
                    <input class='input name' name='user_name' placeholder='Nombre' type='text'>
                    <input class='input email' name='user_email' placeholder='Email' type='text'>
                    <select class='input select' name='subject'>
                        <option selected="" =''>De que quieres hablar?</option>
                        <option>Inscripciones</option>
                        <option>Encuentro Deportivo</option>
                        <option>Conocer mas de nuestro proyecto</option>
                    </select>
                    <textarea class='input message' placeholder='Cuentanos con mas detalle'></textarea>
                    <input class='input submit' type='submit' value='Enviar Mensaje'>
                    </form>
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

            var formContainer = $('#form-container');

            bindFormClick();
            //Opening the form
            function bindFormClick(){
              $(formContainer).on('click', function(e) {
                e.preventDefault();
                toggleForm();
                //Ensure container doesn't togleForm when open
                $(this).off();
              });
            }

            //Closing the form
            $('#form-close, .form-overlay').click(function(e) {
              e.stopPropagation();
              e.preventDefault();
              toggleForm();
              bindFormClick();
            });

            function toggleForm(){
              $(formContainer).toggleClass('expand');
              $(formContainer).children().toggleClass('expand');
              $('body').toggleClass('show-form-overlay');
              $('.form-submitted').removeClass('form-submitted');
            }

            //Form validation
            $('form').submit(function() {
              var form = $(this);
              form.find('.form-error').removeClass('form-error');
              var formError = false;
              
              form.find('.input').each(function() {
                if ($(this).val() == '') {
                  $(this).addClass('form-error');
                  $(this).select();
                  formError = true;
                  return false;
                }
                else if ($(this).hasClass('email') && !isValidEmail($(this).val())) {
                  $(this).addClass('form-error');
                  $(this).select();
                  formError = true;
                  return false;
                }
              });
              
              if (!formError) {
                $('body').addClass('form-submitted');
                $('#form-head').addClass('form-submitted'); 
                setTimeout(function(){
                  $(form).trigger("reset");
                }, 1000);
              }
              return false;
            });

            function isValidEmail(email) {
                var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
                return pattern.test(email);
            };

            social("twitter/joeharry__", "codepen/woodwork",
            "disco");
            document.addEventListener("keydown", keyDown, false);
        </script>       
    </body>
</html>