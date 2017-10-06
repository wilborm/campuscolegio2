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
        <title>Mensajes</title>
        <link rel="stylesheet" href="css/stylesheet2_MensajesAlum.css">
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

                    <div class="content">

                      <div class="cont-izq">
                          <div class="cont-izq-up">
                            <div class="franja-up">
                              <h4>Carpeta</h4>
                            </div>
                            <div class="opciones-up">
                            <a href="BandejaEntradaDoc.php" style="color:#fff"><div class="opc">  Bandeja de Entrada</div></a>
                            <a href="EnviadosDoc.php" style="color:#fff"> <div class="opc">Enviados</div></a>
                            <a href="ValidaDocAlumMensajeDoc.php" style="color:#fff"> <div class="opc">Nuevo</div></a>

                            </div>
                          </div>
                          <div class="cont-izq-down">
                          <div class="franja-down">
                            <h4>Compañeros</h4>
                          </div>
                            <div class="combob">
                            <form action="CrearMensajeAlum.php" method="post">
                              <select name="Nombre">                                  
                                <option>Luis</option>
                                <option>Carlitos</option>
                                </select>
                            </div>
                            <div class="nuevom">
                            <input type="submit" value="Nuevo"  > 
                            </div>
                            </form>
                          </div>
                      </div>
                      <div class="cont-der">
                        <div class="bandejae mensaje">
                          
                            <?php 
                            $conexion = mysqli_connect("us-cdbr-iron-east-05.cleardb.net","b01428dfddeb72","83b7f36b","heroku_f3221ea739bdd1f");
                              $sql = "SELECT * FROM mensaje WHERE para='".$_SESSION['username']."'";
                              $res = mysqli_query($conexion, $sql);
                             
                            ?>
                            <form method="post" action="php/enviarDoc.php" >
                           
                            Para:<br />
                            <select name="para" class="form-control">                                  
                                <option>Alex</option>
                                <option>Javier</option>
                                <option>Edgar</option>
                                </select><br />
                            Asunto:<br />
                            <input type="text" class="form-control" name="asunto" /><br />
                            Mensaje:<br />
                            <textarea name="texto" class="form-control"></textarea>
                            <br /><br />
                            <input type="submit" name="enviar" value="Enviar" class="btn btn-primary" />
                            </form>

                              
                          
                        </div>
                      </div>
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
            