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
        <title>Registrar Alumno</title>
        <link rel="stylesheet" href="css/stylesheet1_RegAlumDes.css">
        <link rel="stylesheet" type="text/css" href="css/estilos_RegAlumDes.css">
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
            <a href="#" class="menu">
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
                <h4>Registro de Alumnno</h4>
            </header>
            
            <div class="contenido">

              <div class="titulo">
                  <div >
                      
                    <form action="php/registrar_RegAlum.php" method="post" class="form-registro" onsubmit="return validarFormulario()">
                         
                      <div class="DatosAlumno">
                          <h2>Datos Generales del Alumno</h2> <br> <br>

                          
                          <input type="text"id="NombreAlumno" name="nombreAlumno" placeholder="Nombre" required class="input-100"> 
                         
                              
                              <input type="text"id="ApePaterAlumno" name="aPater" placeholder="Apellido Paterno"  class="input-50">     

                          
                          
                          
                          <input type="text"id="ApeMaterAlumno" name="aMater" placeholder="Apellido Materno"  class="input-50"> 

                          
                          <label for="Edad" class="LB1">Edad:</label>
                          <input type="number" name="edad" id="Edad" value="1" min="1" max="100"  class="input-50">
                          
                          
      
                          <label for="fechaNacimiento" class="LB1">Fecha de Nacimiento:</label>
                          <input type="date" id="FechaNacimiento" name="fechaNacimiento" class="input-50" id="CentrarFecha">
                          Genero: 
                            <div class="Genero" >
                                
                                <input type="radio" id="Masculino" name="genero" value="Masculino"> 
                                <label for="Masculino" id="Masculino1">Masculino</label>
                                
                                <input type="radio" id="Femenino" name="genero" value="Femenino"> 
                                <label for="Femenino">Femenino</label>
             
                            </div>
                          
      
                      </div>
                        
                      <div class="datosEspecificos">
                              <h2>Datos Especificos del alumno</h2>
      

                                  <input type="text"id="direccion" name="direccion" placeholder="Direccion Domiciliaria"  class="input-100">

                                  <input type="text"id="NumTelefono" name="numTelefono" placeholder="Numero de Telefono"  class="input-50"  maxlength="9">
                                               
                                  <input type="text"id="dni" name="dni" placeholder="D.N.I"  class="input-50"  maxlength="8">

                                  <input type="email"id="correo" name="correo" placeholder="Correo Electronico"  class="input-100">                            
                                  
                                  <input type="text"id="identificador" name="identificador" placeholder="Identificador"  class="input-50"  maxlength="5">                    
                                  
                                  <input type="password" id="Contraseña" name="contra" placeholder="Contraseña"  class="input-50"  maxlength="5">

          
                                  
                                  <select name="departamento" id="departamento" >
                                      <option value="Amazonas">Amazonas</option>
                                      <option value="Ancash">Ancash</option>
                                      <option value="Apurimac">Apurimac</option>
                                      <option value="Arequipa">Arequipa</option>
                                      <option value="Ayacucho">Ayacucho</option>
                                      <option value="Cajamarca">Cajamarca</option>
                                      <option value="Cusco">Cusco</option>
                                      <option value="Huancavelica">Huancavelica</option>
                                      <option value="Huanuco">Huanuco</option>
                                      <option value="Ica">Ica</option>
                                      <option value="Junin">Junin</option>
                                      <option value="La Libertad">La Libertad</option>
                                      <option value="Lambayeque">Lambayeque</option>
                                      <option value="Lima">Lima</option>
                                      <option value="Loreto">Loreto</option>
                                      <option value="Madre de Dios">Madre de Dios</option>
                                      <option value="Moquegua">Moquegua</option>
                                      <option value="Pasco">Pasco</option>
                                      <option value="Piura">Piura</option>
                                      <option value="Puno">Puno</option>
                                      <option value="San Martin">San Martín</option>
                                      <option value="Tacna">Tacna</option>
                                      <option value="Tumbes">Tumbes</option>
                                      <option value="Ucayali">Ucayali</option>
                                  </select>
                              
                                  <select name="ciudad" id="ciudad" >
                                          <option value="Trujillo">Trujillo</option>
                                          <option value="Chiclayo">Chiclayo</option>
                                          <option value="Piura">Piura</option>
                                          <option value="Arequipa">Arequipa</option>
                                          <option value="Iquitos">Iquitos</option>
                                          <option value="Huancayo">Huancayo</option>
                                          <option value="Cusco">Cusco</option>
                                          <option value="Chimbote">Chimbote</option>
                                          <option value="Tacna">Tacna</option>
                                          <option value="Ilo">Ilo</option>
                                          <option value="Moquegua">Moquegua</option>
                                          <option value="Juliaca">Juliaca</option>
                                          <option value="Sullana">Sullana</option>
                                          <option value="Lima">Lima</option>
                                          <option value="Huaraz">Huaraz</option>
                                          <option value="Chincha">Chincha</option>
                                          <option value="Mollendo">Mollendo</option>
                                          <option value="Jaén">Jaén</option>
                                          <option value="Talara">Talara</option>
                                          <option value="Puno">Puno</option>
                              
                                  </select>
                              
                                  
                                                     
                                  <select name="grado" id="grado" >
                                      <option value="1°">1°</option>
                                      <option value="2°">2°</option>
                                      <option value="3°">3°</option>
                                      <option value="4°">4°</option>
                                      <option value="5°">5°</option>
                                      <option value="6°">6°</option>
                                  </select>
                              
                              
                                  
                      </div>
                          
                      <div class="datosApoderados">
                              <h2>Datos de Apoderado</h2>
          
                              <input type="text"id="NombreApoderado" name="nombreApoderado" placeholder="Nombre"  class="input-100"> 
                              
                              <input type="text"id="ApePaterApode" name="apaterApode" placeholder="Apellido Paterno"  class="input-50"> 
                                                  
                              <input type="text"id="ApeMaterApode" name="amaterApode" placeholder="Apellido Materno"  class="input-50"> 
                            
                      </div>
                      <input type="hidden" name="tipo" value="alum">
      
      
                          <input type="submit" value="Registrar" class="btn-enviar" >
                          <input type="reset" class="btn-reset">              
                      </div>
                    </form>
                   
                    
              </div>
            </div>
            
        </article>  <!-- / article -->
    
    </section><!-- / #main-content -->
    
    
    
    <footer id="main-footer">
        <p><a>Campus Virtual Jesús Maestro Miramar - Alto Moche S/N - © 2017 Copyright. All Rights Reserved</a></p>
    </footer><!-- / #main-footer -->
    <script src="js/Validacion_RegAlum.js"></script>
    <script src="js/Mensajes.js"></script>

</body>
</html>
            
           