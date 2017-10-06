<?php
//Comienza session de usuario
    session_start();
    ?>
<?php
include 'conexion.php';

//Hacer lo mismo que el otro filtro, por grado, luego filtro por nrc y rellenar tabla de cursos
        $sql="SELECT * FROM alumno WHERE (alum_nombre = '{$_SESSION['username']}' ) ";
        $query=mysqli_query($conexion,$sql);
            //ordenando lo obtenido del docente


        while($horario=mysqli_fetch_array($query)) 
        { 
            
            if($horario ["alum_nombre"]=='Benito' || $horario ["alum_nombre"]=='Susana' || $horario ["alum_nombre"]=='Fernanda') 
            { 
                header("Location: ../CrearMensajeAlum1.php"); 
            } 
            else 
            {  
            if($horario ["alum_nombre"]=='Janeth' || $horario ["alum_nombre"]=='Sebas' || $horario ["alum_nombre"]=='Fiorela') 
            { 
                header("Location:  ../CrearMensajeAlum2.php"); 
            } else{
                if($horario ["alum_nombre"]=='Michael' || $horario ["alum_nombre"]=='Gru' || $horario ["alum_nombre"]=='Jhosepho') 
                { 
                    header("Location:  ../CrearMensajeAlum3.php"); 
                } else{
                    if($horario ["alum_nombre"]=='alex' || $horario ["alum_nombre"]=='Javier' || $horario ["alum_nombre"]=='Edgar') 
                    { 
                        header("Location:  ../CrearMensajeAlum4.php"); 
                    } else{
                        if($horario ["alum_nombre"]=='Ana' || $horario ["alum_nombre"]=='Adriana' || $horario ["alum_nombre"]=='Mariano') 
                        { 
                            header("Location:  ../CrearMensajeAlum5.php"); 
                        } else{
                            if($horario ["alum_nombre"]=='Fabiano' || $horario ["alum_nombre"]=='Luis' || $horario ["alum_nombre"]=='Carlitos') 
                            { 
                                header("Location:  ../CrearMensajeAlum6.php"); 
                            } else{
                                echo 'No es alumno';
                            }

                        }
                    }
                }
            }
            } 
        }