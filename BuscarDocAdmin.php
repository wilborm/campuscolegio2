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
        <title>Busqueda</title>
        <link rel="stylesheet" href="css/stylesheet1_BuscarDocAdmin.css">
        <link rel="stylesheet" href="css/estilos_BuscarDocAdmin.css">
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
    <span class="user-name"> Admin: <?php echo $_SESSION['username']; ?> || <a href="#" onclick="return confirmacion()" ><button class="btn btn-outline-danger btn-sm">Salir</button></a> </span>
        <span class="user-photo"> <img src="img/Usuario 32.png" ALT="Foto Usuario"> </span>
    </h1>
                    
    <!-- / #logo-header -->

    <ul class="hList">
        <li>
          <a href="HomeAdmin.php" class="menu">
            <h2 class="menu-title">Inicio</h2>

          </a>
        </li>
        <li>
          <a href="#click" class="menu">
            <h2 class="menu-title menu-title_2nd">Mensajes</h2>

          </a>
        </li>
        <li>
          <a href="#click" class="menu">
            <h2 class="menu-title menu-title_3rd">Boletín</h2>

          </a>
        </li>
        <li>
          <a href="#click" class="menu">
            <h2 class="menu-title menu-title_4th">Notas</h2>

          </a>
        </li>
        <li>
            <a href="#" class="menu">
              <h2 class="menu-title menu-title_5th">Tareas</h2>

            </a>
        </li>
        <li>
            <a href="#" class="menu">
              <h2 class="menu-title menu-title_6th">Horario</h2>
            </a>
        </li>
        <li>
            <a href="Desarrollador.php" class="menu">
              <h2 class="menu-title menu-title_7th">Desarrollador</h2>

            </a>
        </li>
      </ul>

</header><!-- / #main-header -->
    
    <section id="main-content">
    
        <article>
            <header>
                <h4>Busqueda de Docentes</h4>
            </header>
            
            <div class="contenido">
          
            
                <div class="AgregarP">
                    <h2 style="right:44%;">Selecciona un docente: </h2>
                    <br>    
                

                
                          <form   method="post" >
                              <select id="status" name="status" onChange="mostrar(this.value);">
                                  <option value="null">[Seleccione una Opcion]</option>
                                  <option value="rosa">Rosa Delgado</option>
                                  <option value="samantha">Samantha Flores</option>
                                  <option value="luis">Luis Torres</option>
                                  <option value="teodoro">Teodoro Vergara</option>
                                  <option value="aldair">Aldair Burga</option>
                                  <option value="maria">Maria de las Nieves</option>
                              </select>
                          </form>
                   
                  <div id="null"  class="tabla1" >
                  <table   class="table table-bordered"  >
                      <tr>
                        <th bgcolor="yellow" class="Horario_hora">Hora</th>
                        <th>Lunes</th><th>Martes</th><th>Mi&eacute;rcoles</th>
                <th>Jueves</th><th>Viernes</th>
                </tr>
                <tr> 
                <td>7:35 - 7:50</td><td align="center" colspan="5"></td>
                </tr>
                <tr>
                    <td>7:50 - 9:10</td><td></td><td> </td><td> </td><td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>9:10 - 9:30</td><td align="center" colspan="5"></td>
                </tr>
                <tr>
                    <td>9:30 - 9:50</td><td align="center" colspan="5"></td>
                </tr>
                <tr>
                    <td>9:50 - 11:10</td><td></td><td></td><td></td><td> </td>
                    <td></td>
                </tr>
                <tr>
                    <td>11:10 - 11:40</td><td align="center" colspan="5"></td>
                </tr>
                <tr>
                    <td>11:40 - 13:00</td><td></td><td></td><td> </td><td></td>
                    <td> </td>
                </tr>
                <tr>
                    <td>13:00 - 14:20</td><td> </td><td></td><td></td><td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>14:20 - 14:30</td><td align="center" colspan="5"></td>
                </tr>
                <tr>
                    <td>14:30</td><td align="center" colspan="5"></td>
                </tr>
                </table>  
                  </div>
                  <div id="rosa" style="display: none;" class="tabla1">
                      <h3 style="width:1000px;">Docente del "Primer Grado de Primaria"</h3>
                      <br>
                  <table align="center" class="table table-bordered">
                  <tr>
                    <th bgcolor="yellow" class="Horario_hora">Hora</th>
                    <th>Lunes</th><th>Martes</th><th>Mi&eacute;rcoles</th>
            <th>Jueves</th><th>Viernes</th>
            </tr>
            <tr> 
            <td>7:35 - 7:50</td><td align="center" colspan="5">Consejeria</td>
            </tr>
            <tr>
                <td>7:50 - 9:10</td><td style="background-color:#B2EBF2;">  Comunicacion</td><td style="background-color:#FFE0B2;">Personal Social</td><td> </td><td></td>
                <td style="background-color:#B2EBF2;">Comunicacion</td>
            </tr>
            <tr>
                <td>9:10 - 9:30</td><td align="center" colspan="5">Consejeria</td>
            </tr>
            <tr>
                <td>9:30 - 9:50</td><td align="center" colspan="5">Recreo</td>
            </tr>
            <tr>
                <td>9:50 - 11:10</td><td></td><td></td><td style="background-color:#FFE0B2;">Personal Social</td><td></td>
                <td></td>
            </tr>
            <tr>
                <td>11:10 - 11:40</td><td align="center" colspan="5">Recreo</td>
            </tr>
            <tr>
                <td>11:40 - 13:00</td><td></td><td> </td><td> </td><td></td>
                <td style="background-color:#B2EBF2;">Comunicacion</td>
            </tr>
            <tr>
                <td>13:00 - 14:20</td><td>  </td><td style="background-color:#B2EBF2;">Comunicacion</td><td style="background-color:#E1BEE7;">Raz. Verbal</td><td>  </td>
                <td> </td>
            </tr>
            <tr>
                <td>14:20 - 14:30</td><td align="center" colspan="5">Consejeria</td>
            </tr>
            <tr>
                <td>14:30</td><td align="center" colspan="5">Salida</td>
            </tr>
            </table>
                  </div>
                  <div id="samantha" style="display: none;" class="tabla1">
                  <h3 style="width:1000px;">Docente del "Segundo Grado de Primaria"</h3>
                  <br>
                  <table align="center" class="table table-bordered">
                  <tr>
                    <th bgcolor="yellow" class="Horario_hora">Hora</th>
                    <th>Lunes</th><th>Martes</th><th>Mi&eacute;rcoles</th>
            <th>Jueves</th><th>Viernes</th>
            </tr>
            <tr> 
            <td>7:35 - 7:50</td><td align="center" colspan="5">Consejeria</td>
            </tr>
            <tr>
                <td>7:50 - 9:10</td><td></td><td>. </td><td> </td><td style="background-color:#E1BEE7;">Ciencias</td>
                <td></td>
            </tr>
            <tr>
                <td>9:10 - 9:30</td><td align="center" colspan="5">Consejeria</td>
            </tr>
            <tr>
                <td>9:30 - 9:50</td><td align="center" colspan="5">Recreo</td>
            </tr>
            <tr>
                <td>9:50 - 11:10</td><td></td><td style="background-color:#E1BEE7;">Ciencias</td><td></td><td> </td>
                <td style="background-color:#FFE0B2;">Raz. Matematico</td>
            </tr>
            <tr>
                <td>11:10 - 11:40</td><td align="center" colspan="5">Recreo</td>
            </tr>
            <tr>
                <td>11:40 - 13:00</td><td></td><td></td><td style="background-color:#B2EBF2;">Matematica</td><td></td>
                <td> </td>
            </tr>
            <tr>
                <td>13:00 - 14:20</td><td> </td><td style="background-color:#B2EBF2;">Matematica</td><td></td><td style="background-color:#B2EBF2;">Matematica</td>
                <td></td>
            </tr>
            <tr>
                <td>14:20 - 14:30</td><td align="center" colspan="5">Consejeria</td>
            </tr>
            <tr>
                <td>14:30</td><td align="center" colspan="5">Salida</td>
            </tr>
            </table>
                  </div>

                <div id="luis" style="display: none;" class="tabla1">
                      <h3 style="width:1000px;">Docente del "Tercer Grado de Primaria"</h3>
                      <br>
                      <table align="center" class="table table-bordered">
                      <tr>
                        <th bgcolor="yellow" class="Horario_hora">Hora</th>
                        <th>Lunes</th><th>Martes</th><th>Mi&eacute;rcoles</th>
                <th>Jueves</th><th>Viernes</th>
                </tr>
                <tr> 
                <td>7:35 - 7:50</td><td align="center" colspan="5">Consejeria</td>
                </tr>
                <tr>
                    <td>7:50 - 9:10</td><td></td><td> </td><td></td><td></td>
                    <td style="background-color:#B2EBF2;">Comunicacion</td>
                </tr>
                <tr>
                    <td>9:10 - 9:30</td><td align="center" colspan="5">Consejeria</td>
                </tr>
                <tr>
                    <td>9:30 - 9:50</td><td align="center" colspan="5">Recreo</td>
                </tr>
                <tr>
                    <td>9:50 - 11:10</td><td></td><td style="background-color:#B2EBF2;">Comunicacion</td><td style="background-color:#FFE0B2;">Personal Social</td><td> </td>
                    <td></td>
                </tr>
                <tr>
                    <td>11:10 - 11:40</td><td align="center" colspan="5">Recreo</td>
                </tr>
                <tr>
                    <td>11:40 - 13:00</td><td></td><td></td><td> </td><td style="background-color:#B2EBF2;">Comunicacion</td>
                    <td> </td>
                </tr>
                <tr>
                    <td>13:00 - 14:20</td><td style="background-color:#E1BEE7;">Raz. Verbal</td><td style="background-color:#FFE0B2;">Personal Social</td><td style="background-color:#B2EBF2;">Comunicacion</td><td style="background-color:#FFE0B2;">Personal Social</td>
                    <td></td>
                </tr>
                <tr>
                    <td>14:20 - 14:30</td><td align="center" colspan="5">Consejeria</td>
                </tr>
                <tr>
                    <td>14:30</td><td align="center" colspan="5">Salida</td>
                </tr>
                </table>
                </div>

                <div id="teodoro" style="display: none;" class="tabla1">
                      <h3 style="width:1000px;">Docente del "Cuarto Grado de Primaria"</h3>
                      <br>
                      <table align="center" class="table table-bordered">
                      <tr>
                        <th bgcolor="yellow" class="Horario_hora">Hora</th>
                        <th>Lunes</th><th>Martes</th><th>Mi&eacute;rcoles</th>
                <th>Jueves</th><th>Viernes</th>
                </tr>
                <tr> 
                <td>7:35 - 7:50</td><td align="center" colspan="5">Consejeria</td>
                </tr>
                <tr>
                    <td>7:50 - 9:10</td><td style="background-color:#B2EBF2;">Raz. Matematico</td><td> </td><td> </td><td style="background-color:#E1BEE7;">Matematica</td>
                    <td style="background-color:#FFE0B2;">Ciencias</td>
                </tr>
                <tr>
                    <td>9:10 - 9:30</td><td align="center" colspan="5">Consejeria</td>
                </tr>
                <tr>
                    <td>9:30 - 9:50</td><td align="center" colspan="5">Recreo</td>
                </tr>
                <tr>
                    <td>9:50 - 11:10</td><td></td><td></td><td style="background-color:#E1BEE7;">Matematica</td><td> </td>
                    <td></td>
                </tr>
                <tr>
                    <td>11:10 - 11:40</td><td align="center" colspan="5">Recreo</td>
                </tr>
                <tr>
                    <td>11:40 - 13:00</td><td></td><td></td><td></td><td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>13:00 - 14:20</td><td style="background-color:#E1BEE7;">Matematica</td><td></td><td style="background-color:#FFE0B2;">Ciencias</td><td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>14:20 - 14:30</td><td align="center" colspan="5">Consejeria</td>
                </tr>
                <tr>
                    <td>14:30</td><td align="center" colspan="5">Salida</td>
                </tr>
                </table>
                </div>

                <div id="aldair" style="display: none;" class="tabla1">
                      <h3 style="width:1000px;">Docente del "Quinto Grado de Primaria"</h3>
                      <br>
                      <table align="center" class="table table-bordered">
                      <tr>
                        <th bgcolor="yellow" class="Horario_hora">Hora</th>
                        <th>Lunes</th><th>Martes</th><th>Mi&eacute;rcoles</th>
                <th>Jueves</th><th>Viernes</th>
                </tr>
                <tr> 
                <td>7:35 - 7:50</td><td align="center" colspan="5">Consejeria</td>
                </tr>
                <tr>
                    <td>7:50 - 9:10</td><td></td><td style="background-color:#FFE0B2;">Personal Social</td><td style="background-color:#E1BEE7;">Raz. Verbal</td><td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>9:10 - 9:30</td><td align="center" colspan="5">Consejeria</td>
                </tr>
                <tr>
                    <td>9:30 - 9:50</td><td align="center" colspan="5">Recreo</td>
                </tr>
                <tr>
                    <td>9:50 - 11:10</td><td></td><td></td><td></td><td style="background-color:#FFE0B2;">Personal Social</td>
                    <td></td>
                </tr>
                <tr>
                    <td>11:10 - 11:40</td><td align="center" colspan="5">Recreo</td>
                </tr>
                <tr>
                    <td>11:40 - 13:00</td><td style="background-color:#B2EBF2;">Comunicacion</td><td></td><td style="background-color:#FFE0B2;">Personal Social</td><td></td>
                    <td style="background-color:#B2EBF2;">Comunicacion</td>
                </tr>
                <tr>
                    <td>13:00 - 14:20</td><td> </td><td style="background-color:#B2EBF2;">Comunicacion</td><td></td><td style="background-color:#B2EBF2;">Comunicacion</td>
                    <td></td>
                </tr>
                <tr>
                    <td>14:20 - 14:30</td><td align="center" colspan="5">Consejeria</td>
                </tr>
                <tr>
                    <td>14:30</td><td align="center" colspan="5">Salida</td>
                </tr>
                </table>
                </div>

                <div id="maria" style="display: none;" class="tabla1">
                      <h3 style="width:1000px;">Docente del "Sexto Grado de Primaria"</h3>
                      <br>
                      <table align="center" class="table table-bordered">
                      <tr>
                        <th bgcolor="yellow" class="Horario_hora">Hora</th>
                        <th>Lunes</th><th>Martes</th><th>Mi&eacute;rcoles</th>
                <th>Jueves</th><th>Viernes</th>
                </tr>
                <tr> 
                <td>7:35 - 7:50</td><td align="center" colspan="5">Consejeria</td>
                </tr>
                <tr>
                    <td>7:50 - 9:10</td><td style="background-color:#B2EBF2;">Ciencias</td><td style="background-color:#FFE0B2;">Raz. Matematico</td><td> </td><td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>9:10 - 9:30</td><td align="center" colspan="5">Consejeria</td>
                </tr>
                <tr>
                    <td>9:30 - 9:50</td><td align="center" colspan="5">Recreo</td>
                </tr>
                <tr>
                    <td>9:50 - 11:10</td><td style="background-color:#E1BEE7;">Matematica</td><td></td><td></td><td> </td>
                    <td></td>
                </tr>
                <tr>
                    <td>11:10 - 11:40</td><td align="center" colspan="5">Recreo</td>
                </tr>
                <tr>
                    <td>11:40 - 13:00</td><td></td><td></td><td> </td><td></td>
                    <td> </td>
                </tr>
                <tr>
                    <td>13:00 - 14:20</td><td> </td><td></td><td style="background-color:#B2EBF2;">Ciencias</td><td style="background-color:#E1BEE7;">Matematica</td>
                    <td style="background-color:#E1BEE7;">Matematica</td>
                </tr>
                <tr>
                    <td>14:20 - 14:30</td><td align="center" colspan="5">Consejeria</td>
                </tr>
                <tr>
                    <td>14:30</td><td align="center" colspan="5">Salida</td>
                </tr>
                </table>
                </div>



                </div>

                


              </div>
    
    <footer id="main-footer">
        <p><a>Campus Virtual Jesús Maestro Miramar - Alto Moche S/N - © 2017 Copyright. All Rights Reserved</a></p>
    </footer><!-- / #main-footer -->
    <script src="js/Mensajes.js"></script>
    <script src="js/buscarDoc.js"></script>
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

</body>
</html>
            