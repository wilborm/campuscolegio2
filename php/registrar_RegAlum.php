
<?php
include 'conexion.php';

    $alum_nombre=$_POST['nombreAlumno'];
    $alum_apaterno=$_POST['aPater'];
    $alum_amaterno=$_POST['aMater'];
    $alum_edad=$_POST['edad'];
    $alum_fnacimiento=$_POST['fechaNacimiento'];
    $alum_genero=$_POST['genero'];
    $alum_direccion=$_POST['direccion'];
    $alum_ntelefono=$_POST['numTelefono'];
    $alum_dni=$_POST['dni'];
    $alum_email=$_POST['correo'];
    $alum_identificador=$_POST['identificador'];
    $alum_contra=$_POST['contra'];
    $alum_departamento=$_POST['departamento'];
    $alum_ciudad=$_POST['ciudad'];
    $alum_grado=$_POST['grado'];
    $alum_nombreapode=$_POST['nombreApoderado'];
    $alum_apaternoapode=$_POST['apaterApode'];
    $alum_amaternoapode=$_POST['amaterApode'];
    $alum_tipo=$_POST['tipo'];

    //Agregando a la tabla de alumno
$sql="INSERT INTO alumno(alum_nombre, alum_apaterno, alum_amaterno, alum_edad, alum_fnacimiento, alum_genero, alum_direccion, alum_ntelefono, alum_dni, alum_email, alum_identificador, alum_contra, alum_departamento, alum_ciudad, alum_grado, alum_nombreapode, alum_apaternoapode, alum_amaternoapode, tipo) VALUES ('$alum_nombre','$alum_apaterno','$alum_amaterno','$alum_edad','$alum_fnacimiento','$alum_genero','$alum_direccion','$alum_ntelefono','$alum_dni','$alum_email','$alum_identificador','$alum_contra','$alum_departamento','$alum_ciudad','$alum_grado','$alum_nombreapode','$alum_apaternoapode','$alum_amaternoapode','$alum_tipo')";
$result=mysqli_query($conexion,$sql);
if(!$result){
    echo ' Error al registrase';
} else{
    echo 'Bien lo hiciste';
}
 
/*
//Agregando a la tabla usuario
$sql2="INSERT INTO usuarios(alum_nombre, alum_identificador, alum_contra, tipo) VALUES ('$alum_nombre','$alum_identificador','$alum_contra','$alum_tipo')";
$result2=mysqli_query($conexion,$sql2);
if(!$result2){
    echo ' Error al tratar de crear usuario';
} else{
    echo 'Bien lo hiciste x2';
}
*/
//cerrar conexion
mysqli_close($conexion);




















