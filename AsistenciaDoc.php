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
        <title>Asistencias</title>
        <link rel="stylesheet" href="css/stylesheet1_AsistenciaDoc.css">
        <link rel="stylesheet" href="css/estilos_AsistenciaDoc.css">
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
    <div >
        
        <div class="ContenedorMayor">
                  
            <h1 class="Titulo1">Control de Asistencia</h1>
                <div class="AgregarP">
                    <h2 class="Lista1">Lista de Alumnos</h2>
                        <table class="table table-striped">
                          <thead>
                            <th>Nro Orden</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Asistencia-Falta</th>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>Carlos</td>
                              <td>Alvarez Apolo</td>
                              <td>A</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Angye</td>
                                <td>Benites Cornejo</td>
                                <td>A</td>
                              </tr>
                              <tr>
                                  <td>3</td>
                                  <td>Alan</td>
                                  <td>Brito Delgado</td>
                                  <td>F</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Ivana</td>
                                    <td>Flores Cornejo</td>
                                    <td>F</td>
                                  </tr>
                                  <tr>
                                      <td>5</td>
                                      <td>Aurelio</td>
                                      <td>Garnique Sanchez</td>
                                      <td>A</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Edy</td>
                                        <td>Hernandez Correa</td>
                                        <td>A</td>
                                      </tr>
                                      <tr>
                                          <td>7</td>
                                          <td>Fabiano</td>
                                          <td>Miranda Arroyo</td>
                                          <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Henry</td>
                                            <td>Padilla Chimbor</td>
                                            <td>F</td>
                                          </tr>
                                          <tr>
                                              <td>9</td>
                                              <td>Alexander jr</td>
                                              <td>Quiroz Aponte</td>
                                              <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>Luis</td>
                                                <td>Vigo Gutierrez</td>
                                                <td>A</td>
                                              </tr>

                          </tbody>
                        </table>
                </div>  

               


             
              
        </div>
            

                
    </div>
    
    

            
<footer id="main-footer">
        <p><a>Campus Virtual Jesús Maestro Miramar - Alto Moche S/N - © 2017 Copyright. All Rights Reserved</a></p>
    </footer><!-- / #main-footer -->
    <script src="js/Mensajes.js"></script>
    </body>
</html>


