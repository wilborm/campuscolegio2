<body >
    

<header >
<script src="sweetalert2/sweetalert2.js"></script>
<link rel="stylesheet" href="sweetalert2/sweetalert2.css">
<link rel="stylesheet" href="estilos_LoginError.css">
<script type="text/javascript">

function Error(){
    
    swal({
        title: "Usuario o Contraseña incorrecto",
        text: "Verifique sus datos",
        type: "error",
       
      }).then(
      function () 
      {
            <?php
            @session_start();
            session_destroy();
            header("Location: ../index.php");
            ?>
      }
  )
}

</script>

</header>
<?php
//Comienza session de usuario
    session_start();
    ?>

<?php
  //Variables que capturan los datos
   $identificador=$_POST['iden'];
   $contraseña=$_POST['contra'];
   
   //conectando a la bd
   $conexion = mysqli_connect("us-cdbr-iron-east-05.cleardb.net","b01428dfddeb72","83b7f36b","heroku_f3221ea739bdd1f");   
  //Consulta SQL para validar:
   $consulta = "select * from usuarios where user_identificador='$identificador' and user_contra='$contraseña'";
   //Ejecutando consulta:
   $resultado = mysqli_query($conexion, $consulta);

   //seleccionar solo el nombre para usarlo en el username
   $res = "select user_nombre from usuarios where user_identificador='$identificador'"; 
   $query = mysqli_query($conexion, $res);
   $row = mysqli_fetch_array($query); 

   

   //Comparando resultados, 0 si no coincide datos, 1  si coninciden
   $filas = mysqli_num_rows($resultado);
   if ($resultado->num_rows > 0){

   

   $_SESSION['loggedin']= true;
   $_SESSION["username"] = $row['user_nombre']; 
   $_SESSION['start']= time();
 
   while($tipousuario = mysqli_fetch_array($resultado)) 
   { 
        
       if($tipousuario ["user_tipo"]=='alum') 
       { 
           header("Location: nexoAlum.php"); 
       } 
       else 
       {  
        if($tipousuario ["user_tipo"]=='admin') 
        { 
            header("Location:  nexoAdmin.php"); 
        } else{
            if($tipousuario ["user_tipo"]=='doc') 
            { 
                header("Location:  nexoDoc.php"); 
            } else{
                
            }
        }
       } 
   }
} else{
    echo '<script type="text/javascript">
    
    Error();
   </script>';
}
  
   //Cerrando conexion:
   mysqli_close($conexion);

?>

</body>