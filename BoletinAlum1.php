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
        <title>Boletin</title>
        <link rel="stylesheet" href="css/stylesheet1_BoletinAlum1.css">
        <link rel="stylesheet" type="text/css" href="css/estilos_BoletinAlum.css">
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
           
            <div class="content">
              
                              <div class="cont-izq">
                                  <div class="cont-izq-up">
                                    <div class="franja-up">
                                      <h4>Comunicados</h4>
                                    </div>
                                    <div class="opciones-up">
                                    <a href="BoletinAlum1.php" style="color:#fff;"><div class="opc">Reunión de padres</div></a> 
                                    <a href="BoletinAlum2.php" style="color:#fff;"><div class="opc">Entrega de notas</div></a> 
                                    <a href="BoletinAlum3.php" style="color:#fff;"><div class="opc">Pagar cuota de paseo</div></a> 
                                    <a href="BoletinAlum4.php" style="color:#fff;"><div class="opc">Clase de afianzamiento</div></a> 
                                    <a href="BoletinAlum5.php" style="color:#fff;"><div class="opc">Jornada educativa</div></a> 
              
                                  </div>
                                  <div class="cont-izq-down">
                                    <div class="franja-down">
                                      <h4>Anuncios</h4>
                                      <div class="opciones-down"></div>
                                    <a href="BoletinAlum6.php" style="color:#fff;"><div class="opc">Día de la juventud</div></a>
                                    <a href="BoletinAlum7.php" style="color:#fff;"><div class="opc">Chocolatada navideña</div></a>
                                    <a href="BoletinAlum8.php" style="color:#fff;"><div class="opc">Fiesta de integración</div></a>
                                    <a href="BoletinAlum9.php" style="color:#fff;"><div class="opc">Canción criolla</div></a>
                                    <a href="BoletinAlum10.php" style="color:#fff;"><div class="opc">Medalla Milagrosa</div></a>
                                    </div>
                              </div>
                              </div>
                            </div>  
              
                            </div>
            
            <div class="contenido">

              <div class="titulo">  <h1>Welcome to Our Website!</h1></div>
<div class="subtitulo"
              <p><b>COMUNICADO A LOS PADRES DE FAMILIA </b></p>
            </div>
                  </div>
                 
                 <div class="texto">
                    
                    <p>      Señores
                        Padres de Familia:
                        Por medio del presente me permito comunicar a Usted que los exámenes del Segundo Trimestre iniciarán a partir dl día Lunes 21 de Marzo del 2011; para lo cual, solicito ponerse al día en los trabajos y pruebas atrasadas, así como de su obligación Económica del Pago de Pensión, Transporte y otros valores pendientes. Durante la semana de exámentes se trabajará en horario normal sin exceptción alguna por tal motivo se le recuerda que la hora de salida es a las 13h30.
                        Esperamos tomar en cuenta este Comunicado para evitar incovenientes con su Representado.
                        Sin otro particular, me suscribo.
                       <p>Atentamente,</p> 
                       <p> Directora. Hna Adriana</p>
                      </p>
                        <br /><br />
                    
                 </div>
                
                 <div class="foto">
                      <IMG SRC="img/padres.jpg" WIDTH=378 HEIGHT=380 ALT="" border=0>
                  </div>

    <br>
    <br>
    <footer id="main-footer">
        <p><a>Campus Virtual Jesús Maestro Miramar - Alto Moche S/N - © 2017 Copyright. All Rights Reserved</a></p>
    </footer><!-- / #main-footer -->

      
            
           
            <script src="js/Mensajes.js"></script>

</body>
</html>
            