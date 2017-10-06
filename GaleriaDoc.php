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
        <title>Horario</title>
        <link rel="stylesheet" href="css/stylesheet1_Galeria.css">
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
                <h4>Galería</h4>
            </header>
            
            <div class="contenido">

              <div class="titulo">  <h1></h1></div>
<div class="subtitulo"
<h1>      </h1>
            
            </div>

            <ul class="galeria">
            <li><a href=""><img src="img/foto1.jpg" alt=""></a></li>
            <li><a href=""><img src="img/foto2.jpg" alt=""></a></li>
            <li><a href=""><img src="img/foto3.jpg" alt=""></a></li>
            <li><a href=""><img src="img/foto4.jpg" alt=""></a></li>
            <li><a href=""><img src="img/foto5.jpg" alt=""></a></li>
            <li><a href=""><img src="img/foto6.jpg" alt=""></a></li>
            <li><a href=""><img src="img/foto7.jpg" alt=""></a></li>
            <li><a href=""><img src="img/foto8.jpg" alt=""></a></li>

            
    <footer id="main-footer">
        <p><a>Campus Virtual Jesús Maestro Miramar - Alto Moche S/N - © 2017 Copyright. All Rights Reserved</a></p>
    </footer><!-- / #main-footer -->
    <script src="js/Mensajes.js"></script>

</body>
</html>
             