<?php   
session_start();
$inactivo=120;
    
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        
    
    } else{
      header("location: index.php");
      
        exit;
    }

    if(isset($_SESSION['tiempo'])) {
        $vida_session = time() - $_SESSION['tiempo'];
        if($vida_session > $inactivo){
            session_destroy();
            header("location: logout.php");
            exit;
        }
    
    }   
    $_SESSION['tiempo'] = time();

    // seleccionando el horario especifico para el docente:
      

    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/css/bootstrap.min.js" ></script>
        <title>Home</title>
        <link rel="stylesheet" href="css/stylesheet1_HomeDoc.css">
        <script src="sweetalert2/sweetalert2.js"></script>
        <link rel="stylesheet" href="sweetalert2/sweetalert2.css">
    </head>
    <body row col-xs-12 col-md-4 >
           
            <header id="main-header">
            
            <h1 id="logo-header" href="#">
                <span class="colegio-photo"> <img src="img/Logo.png" WIDTH=40 HEIGHT=40 BORDER=0 ALT="Logo Colegio"> </span>
                <span class="site-name">Campus Virtual - Jesús Maestro</span>
            </h1> 
            <h1 id="user-header" href="#">
                <span class="user-name"> Docente: <?php echo $_SESSION['username']; ?> || <a href="#" onclick="return confirmacion()" ><button class="btn btn-outline-danger btn-sm">Salir</button></a> </span>
                <span class="user-photo"> <img src="img/Usuario 32.png" ALT="Foto Usuario"> </span>
            </h1>
                            
            <!-- / #logo-header -->
        
            <ul class="hList">
            <li>
              <a href="HomeDoc.php" class="menu">
                <h2 class="menu-title">Inicio</h2>

              </a>
            </li>
            <li>
              <a href="MensajeDoc.php" class="menu">
                <h2 class="menu-title menu-title_2nd">Mensajes</h2>
              </a>
            </li>
            <li>
              <a href="AsistenciaDoc.php" class="menu">
                <h2 class="menu-title menu-title_3rd">Asistencia</h2>
              </a>
            </li>
            <li>
              <a href="NotasDoc.php" class="menu">
                <h2 class="menu-title menu-title_4th">Notas</h2>

              </a>
            </li>
            <li>
                <a href="Tareas.php" class="menu">
                  <h2 class="menu-title menu-title_5th">Tareas</h2>

                </a>
            </li>
            <li>
                <a href="php/filtroHorario.php" class="menu">
                  <h2 class="menu-title menu-title_6th">Horario</h2>
                </a>
            </li>
            <li>
                <a href="GaleriaDoc.php" class="menu">
                  <h2 class="menu-title menu-title_7th">Galería</h2>

                </a>
            </li>
          </ul>
        
        </header><!-- / #main-header -->
            
            
            <section id="main-content">
            
                <article>
                    <header>
                        <h4>Inicio</h4>
                    </header>
                    
                    <div class="content">
                      <table>
                        <tr>
                          <td><a href="MensajeDoc.php"><div class="Mensajes"><img src="img/Mensajes 128.png">
                          <p>Mensajes</p></div></a></td>
                          <td><a href="AsistenciaDoc.php"><div class="Boletín"><img src="img/Boletín 128.png"><p>Asistencia</p></div></a></td>
                          <td><a href="NotasDoc.php"><div class="Notas"><img src="img/Notas 128.png">
                          <p>Notas</p></div></a></td>
                        </tr>
                        <tr>
                          <td><a href="Tareas.php"><div class="Tareas" ><img src="img/Tareas 128.png" >
                            <p>Tareas</p>
                        </div></a></td>
                          <td><a href="php/filtroHorario.php"><div class="Horario"><img src="img/Horario 128.png"><p>Horario</p>                          
                        </div></a></td>
                          <td><a href="GaleriaDoc.php"><div class="Galería"><img src="img/Galería 128.png"><p>Galería</p></div></a></td>
                          
                        </tr>
                      </table>
                    </div>
                    
                </article>  <!-- / article -->
            
            </section><!-- / #main-content -->
            
            
            
            <footer id="main-footer">
                <p><a>Campus Virtual Jesús Maestro Miramar - Alto Moche S/N - © 2017 Copyright. All Rights Reserved</a></p>
            </footer><!-- / #main-footer -->
            <script src="js/Mensajes.js"></script>

</body>
</html>
            
           