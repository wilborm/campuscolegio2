<body background="fn.png">
    

<header >
<script src="sweetalert2.js"></script>
<link rel="stylesheet" href="sweetalert2.css">
<script type="text/javascript">

function mensaje(){
    
    swal({
        title: "hola",
        text: "dfdsfdafasfd",
        type: "success",
       
      }).then(
      function () 
      {
          window.location.href='index.html';
      }
  )
}
</script>

</header>
<?php
include 'conexion.php';

    $per_email=$_POST['email'];
    $per_contra=$_POST['contra'];

$sql="INSERT INTO persona(per_email,per_contra) VALUES('$per_email','$per_contra')";
$result=mysqli_query($conexion,$sql);
if(!$result){
    echo ' Error al registrase';
} else{
    echo '<script type="text/javascript">
    mensaje();
    
   </script>';
 
}
//cerrar conexion
mysqli_close($conexion);

?>
</body>