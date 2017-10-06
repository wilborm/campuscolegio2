<?php
//Comienza session de usuario
    session_start();
    ?>
<?php
include 'conexion.php';

//Hacer lo mismo que el otro filtro, por grado, luego filtro por nrc y rellenar tabla de cursos
        $sql="SELECT * FROM docente WHERE (doc_nombre = '{$_SESSION['username']}' ) ";
        $query=mysqli_query($conexion,$sql);
            //ordenando lo obtenido del docente


        while($horario=mysqli_fetch_array($query)) 
        { 
            
            if($horario ["doc_nombre"]=='Rosa') 
            { 
                header("Location: ../HorarioRosa.php"); 
            } 
            else 
            {  
            if($horario ["doc_nombre"]=='Samantha') 
            { 
                header("Location:  ../HorarioSamantha.php"); 
            } else{
                if($horario ["doc_nombre"]=='Luis') 
                { 
                    header("Location:  ../HorarioLuis.php"); 
                } else{
                    if($horario ["doc_nombre"]=='Teodoro') 
                    { 
                        header("Location:  ../HorarioTeodoro.php"); 
                    } else{
                        if($horario ["doc_nombre"]=='Aldair') 
                        { 
                            header("Location:  ../HorarioAldair.php"); 
                        } else{
                            if($horario ["doc_nombre"]=='Maria') 
                            { 
                                header("Location:  ../HorarioMaria.php"); 
                            } else{
                                header("Location: ../HomeDoc.php");
                            }

                        }
                    }
                }
            }
            } 
        }