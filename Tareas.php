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
        <link rel="stylesheet" href="css/stylesheet1_TareasDoc.css">
        <link rel="stylesheet" href="css/estilos_TareasDoc.css">
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
                <h4>Subir tareas</h4>
            </header>
            
            <div class="contenido">

                <div class="titulo">
                <a href="php/filtroGestionDoc" target="_blank"><button class="btn btn-outline-primary" style="cursor:pointer;">Gestor de Archivos</button></a>
                </div>
                
              
                    
                  
                  <form action="" class="Formularios">
                    <br>
                    <br>
                    <br>
                      <h6 class="Form_Titulo">Tareas subidas de Ciencia y Ambiente:</h6>
                    
                <div>
                  <table class="table table-striped" id="tabla1">
                    <thead>
                      <tr>
                        <th>Descripcion</th>
                        <th>Fecha Inicio</th>
                        <th>Fecha Fin</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Graficar el ciclo del agua</td>
                        <td>15/03/18</td>
                        <td>20/03/18</td>
                      </tr>
                      <tr>
                          <td>Describir a los animales vertebrados</td>
                          <td>14/02/18</td>
                          <td>16/02/18</td>
                        </tr>
                        <tr>
                            <td>Traer imágenes de animales invertebrados</td>
                            <td>3/02/18</td>
                            <td>9/02/18</td>
                          </tr>
                          <tr>
                              <td>Dibujar el proceso de fotosíntesis</td>
                              <td>15/02/18</td>
                              <td>20/02/18</td>
                            </tr>
                            <tr>
                                <td>Biografia de Galileo Galilei</td>
                                <td>13/02/18</td>
                                <td>20/02/18</td>
                              </tr>
                    </tbody>
                  </table>
                </div>

                <form action="" class="Formularios1">
                      <h6 class="Form_Titulo">Tareas subidas de Matemática:</h6>
                    
                <div>
                  <table class="table table-striped" id="tabla1">
                    <thead>
                      <tr>
                        <th>Descripcion</th>
                        <th>Fecha Inicio</th>
                        <th>Fecha Fin</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Resolver las páginas 15 y 16 del libro</td>
                        <td>23/03/18</td>
                        <td>30/03/18</td>
                      </tr>
                      <tr>
                          <td>Traer ejemplos de suma con números enteros</td>
                          <td>4/02/18</td>
                          <td>6/02/18</td>
                        </tr>
                        <tr>
                            <td>Traer información sobre leyes de proporciones</td>
                            <td>13/02/18</td>
                            <td>19/02/18</td>
                          </tr>
                          <tr>
                              <td>Dibujar los conjuntos y sus operaciones</td>
                              <td>25/02/18</td>
                              <td>2/03/18</td>
                            </tr>
                            <tr>
                                <td>Biografia de Max Planck</td>
                                <td>13/02/18</td>
                                <td>20/02/18</td>
                              </tr>
                    </tbody>
                  </table>
                </div>
                <form action="" class="Formularios2">
                      <h6 class="Form_Titulo">Tareas subidas de Razonamiento Matemático:</h6>
                    
                <div>
                  <table class="table table-striped" id="tabla1">
                    <thead>
                      <tr>
                        <th>Descripcion</th>
                        <th>Fecha Inicio</th>
                        <th>Fecha Fin</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Resolver las series dejadas</td>
                        <td>4/03/18</td>
                        <td>9/03/18</td>
                      </tr>
                      <tr>
                          <td>Resolver las páginas de 4-8 del libro</td>
                          <td>20/02/18</td>
                          <td>26/02/18</td>
                        </tr>
                        <tr>
                            <td>Resolver las inecuaciones dejadas</td>
                            <td>13/02/18</td>
                            <td>18/02/18</td>
                          </tr>
                          <tr>
                              <td>Traer ejemplos de ecuaciones simples</td>
                              <td>15/02/18</td>
                              <td>20/02/18</td>
                            </tr>
                            <tr>
                                <td>Repasar expresiones lógicas</td>
                                <td>13/02/18</td>
                                <td>20/02/18</td>
                              </tr>
                    </tbody>
                  </table>
                </div>



              </div>
    
    
    <footer id="main-footer">
        <p><a>Campus Virtual Jesús Maestro Miramar - Alto Moche S/N - © 2017 Copyright. All Rights Reserved</a></p>
    </footer><!-- / #main-footer -->

    <script src="js/Mensajes.js"></script>

</body>
</html>
            