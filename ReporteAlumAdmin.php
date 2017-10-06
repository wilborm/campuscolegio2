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
<?php
	include 'php/conexion.php';
	
    $sql="SELECT * FROM alumno ORDER BY alum_grado";
    $query=mysqli_query($conexion,$sql);
	
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/css/bootstrap.min.js" ></script>
        <title>Reporte Alumno</title>
        <link rel="stylesheet" href="css/stylesheet1_ReporteAlumAdmin.css">
        <link rel="stylesheet" href="css/estilos_ReporteAlumAdmin.css">
        <script src="sweetalert2/sweetalert2.js"></script>
        <link rel="stylesheet" href="sweetalert2/sweetalert2.css">
        <script src="js/buscarDoc"></script>
        <script type="text/javascript" src="js/jquery-3.2.1.min"></script>
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
                <h4>Reporte de Alumnos</h4>
            </header>
            
            <div class="contenido">

                <div class="titulo">
                    <p> </p> 
                </div>
                
               
                <div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido Paterno</th>
                                <th>Genero</th>
                                <th>Email</th>
                                <th>Identificador</th>
                                <th>Grado</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php while($row=$query->fetch_assoc()){ ?>
						<tr>
							<td><?php echo $row['alum_nombre'];?>
							</td>
							<td>
								<?php echo $row['alum_apaterno'];?>
							</td>
							<td>
								<?php echo $row['alum_genero'];?>
							</td>
							<td>
								<?php echo $row['alum_email'];?>
							</td>
							<td>
								<?php echo $row['alum_identificador'];?>
							</td>
							<td>
								<?php echo $row['alum_grado'];?>
							</td>
						</tr>
					<?php } ?>
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