<?php 
# Incluimos la configuracion
include('conexion.php'); 
session_start();
if($_SESSION['logueado'] != "SI"){
header('location: index.php');
exit();
}
# Obtenemos el mensaje privado
$id = $_GET['id'];
$sql = "SELECT * FROM mensaje WHERE para='".$_SESSION['usuario']."' and ID='".$id."'";
$res = mysqli_query($conexion, $sql);
$row = mysqli_fetch_assoc($res);
?>
Menu: <a href="listar.php">Ver mensajes</a> | <a href="crear.php">Crear mensajes</a> | <a href="cerrar.php">Cerrar sesion</a><br /><br />
<strong>De:</strong> <?=$row['de']?><br />
<strong>Fecha:</strong> <?=$row['fecha']?><br />
<strong>Asunto:</strong> <?=$row['asunto']?><br /><br />
<strong>Mensaje:</strong><br />
<?=$row['texto']?>

<?php 
# Avisamos que ya lo leimos
if($row['leido'] != "si")
{
	mysqli_query($conexion,"UPDATE mensaje SET leido='si' WHERE ID='".$id."'") ;
}
?>