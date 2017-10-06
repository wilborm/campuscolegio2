<?php 


//Comienza session de usuario
    session_start();
    ?>
<?php
include 'conexion.php';

                             if($_POST['enviar'])
                             {
                               if(!empty($_POST['para']) && !empty($_POST['asunto']) && !empty($_POST['texto']))
                               {
                                 $fecha = date("j/m/Y, g:i a");
                                 $sql = "INSERT INTO mensaje (para,de,fecha,asunto,texto) VALUES ('".$_POST['para']."','".$_SESSION['username']."','".$fecha."','".$_POST['asunto']."','".$_POST['texto']."')";
                                 mysqli_query($conexion,$sql);
                                 header("Location: ../MensajesAlum.php");
                               }else{
                                header("Location: filtroMensajeAlum.php"); 
                               }
                             }
?>