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
        <title>Tareas</title>
        <link rel="stylesheet" href="css/stylesheet1_TareaAlum.css">
        <link rel="stylesheet" type="text/css" href="css/estilos_TareaAlum.css">
        <script src="sweetalert2/sweetalert2.js"></script>
        <link rel="stylesheet" href="sweetalert2/sweetalert2.css">
        
</head>
              <body >
                
              <header id="main-header">

              <h1 id="logo-header" href="#">
                  <span class="colegio-photo"> <img src="img/Logo.png" WIDTH=40 HEIGHT=40 BORDER=0 ALT="Logo Colegio"> </span>
                  <span class="site-name">Campus Virtual - Jesús Maestro</span>
              </h1> 
              <h1 id="user-header" href="#">
                  <span class="user-name"> Alumno: <?php echo $_SESSION['username']; ?>|| <a href="#" onclick="return confirmacion()" ><button class="btn btn-outline-danger btn-sm">Salir</button></a> </span>
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
                <h4>Tareas</h4>
            </header>
            
            <div class="contenido">

                <div class="titulo">
                    <p>Selecciona método de visualización </p>
                    <a href="php/filtroGestor.php" target="_blank"><button class="btn btn-outline-primary" style="cursor:pointer;">Gestor de Archivos</button></a>
                </div>
                
                <div>
                  <br>
                  <br>
                  <h3>Lista de Tareas:</h3>
                  <table class="table table-striped" id="tabla1">
                    <thead>
                      <tr>
                        <th>Curso</th>
                        <th>Descripcion</th>
                        <th>Profesor Responsable</th>
                        <th>Fecha Inicio</th>
                        <th>Fecha Fin</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Personal Social</td>
                        <td>Dibujar el mapa del Peru</td>
                        <td>Manuel Vigo Fernandez</td>
                        <td>20/02/18</td>
                        <td>27/02/18</td>
                      </tr>
                      <tr>
                          <td>Comunicacion</td>
                          <td>Escribir 20 Sustantivos</td>
                          <td>Alexander Aponte</td>
                          <td>18/02/18</td>
                          <td>20/02/18</td>
                        </tr>
                        <tr>
                            <td>Matematica</td>
                            <td>Realizar la pag 22 del libro</td>
                            <td>Carlos Lizarraga</td>
                            <td>10/02/18</td>
                            <td>27/02/18</td>
                          </tr>
                          <tr>
                              <td>Arte</td>
                              <td>Traer dibujo con oleo</td>
                              <td>Arturo Parimango</td>
                              <td>22/02/18</td>
                              <td>29/02/18</td>
                            </tr>
                            <tr>
                                <td>Personal Social</td>
                                <td>Biografia de Jose de San Martin</td>
                                <td>Manuel Vigo Fernandez</td>
                                <td>13/02/18</td>
                                <td>20/02/18</td>
                              </tr>
                              <tr>
                                  <td>Matematica</td>
                                  <td>Realizar practica de multiplicacion</td>
                                  <td>Carlos Lizarraga</td>
                                  <td>03/02/18</td>
                                  <td>10/02/18</td>
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
            