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
    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/css/bootstrap.min.js" ></script>
        <title>Notas</title>
        <link rel="stylesheet" href="css/stylesheet1_NotasAlum.css">
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
                  <span class="user-name"> Alumno: <?php echo $_SESSION['username']; ?> || <a href="#" onclick="return confirmacion()" ><button class="btn btn-outline-danger btn-sm">Salir</button></a> </span>
                  <span class="user-photo"> <img src="img/Usuario 32.png" ALT="Foto Usuario"> </span>
              </h1>
                              
              <!-- / #logo-header -->
          
              <ul class="hList">
                  <li>
                    <a href="HomeAlum.php" class="menu">
                      <h2 class="menu-title">Inicio</h2>

                    </a>
                  </li>
                  <li>
                    <a href="MensajesAlum.php" class="menu">
                      <h2 class="menu-title menu-title_2nd">Mensajes</h2>
                    </a>
                  </li>
                  <li>
                    <a href="BoletinAlum.php" class="menu">
                      <h2 class="menu-title menu-title_3rd">Boletín</h2>

                    </a>
                  </li>
                  <li>
                    <a href="NotasAlum.php" class="menu">
                      <h2 class="menu-title menu-title_4th">Notas</h2>
                    </a>
                  </li>
                  <li>
                      <a href="TareasAlum.php" class="menu">
                        <h2 class="menu-title menu-title_5th">Tareas</h2>
          
                      </a>
                  </li>
                  <li>
                      <a href="php/filtroHorarioAlum.php" class="menu">
                        <h2 class="menu-title menu-title_6th">Horario</h2>
                      </a>
                  </li>
                  <li>
                      <a href="GaleriaAlum.php" class="menu">
                        <h2 class="menu-title menu-title_7th">Galería</h2>

                      </a>
                  </li>
                </ul>
          
          </header><!-- / #main-header -->
            
            <section id="main-content">
            
                <article>
                    <header>
                        <h4>Notas</h4>
                    </header>
                    
                    <div class="content">

                      <div class="bimestre">
                        <div class="pri">Bimestre 1</div>
                        <div class="seg">Bimestre 2</div>
                        <div class="ter">Bimestre 3</div>
                        <div class="cua">Bimestre 4</div>
                      </div>

                      <div class="content-notas">
                      <div class="cur">Ciencias</div>
                      <div class="cur">Razonamiento Matemático</div>
                      <div class="cur">Razonamiento Verbal</div>
                      <div class="cur">Inglés</div>
                      <div class="cur">Desarrollo Personal</div>
                      <div class="cur">Matemática</div>
                      <div class="cur">Arte</div>
                      <div class="cur">Comunicación</div>
                      <div class="cur">Educación Física</div>
                      </div> 
                    </div>
                    
                </article>  <!-- / article -->
            
            </section><!-- / #main-content -->
            
            
            
            <footer id="main-footer">
                <p><a>Campus Virtual Jesús Maestro Miramar - Alto Moche S/N - © 2017 Copyright. All Rights Reserved</a></p>
            </footer><!-- / #main-footer -->
            <script src="js/Mensajes.js"></script>
            </body>
</html>
           