
<?php
$conexion = mysqli_connect("localhost","root","","bd_campuscolegio");

$doc_nombre=$_POST['nombreDocente'];
$doc_apaterno=$_POST['aPater'];
$doc_amaterno=$_POST['aMater'];
$doc_edad=$_POST['edad'];
$doc_fnacimiento=$_POST['fechaNacimiento'];
$doc_genero=$_POST['genero'];
$doc_ntelefono=$_POST['numTelefono'];
$doc_dni=$_POST['dni'];
$doc_email=$_POST['correo'];
$doc_identificador=$_POST['identificador'];
$doc_contra=$_POST['contra'];
$doc_ciudad=$_POST['ciudad'];
$doc_tipo=$_POST['tipo'];

    //Agregando a la tabla de alumno
$sql="INSERT INTO docente(doc_nombre, doc_apaterno, doc_amaterno, doc_edad, doc_fechanaci, doc_genero, doc_ntelefono, doc_dni, doc_email, doc_identificador, doc_contra, doc_ciudad, doc_tipo) VALUES ('$doc_nombre','$doc_apaterno','$doc_amaterno','$doc_edad','$doc_fnacimiento','$doc_genero','$doc_ntelefono','$doc_dni','$doc_email','$doc_identificador','$doc_contra','$doc_ciudad','$doc_tipo')";
$result=mysqli_query($conexion,$sql);
if(!$result){
    echo ' Error al registrase';
} else{
    echo 'Bien lo hiciste';
}
 

//cerrar conexion
mysqli_close($conexion);




















