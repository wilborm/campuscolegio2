<?php 
# Incluimos la configuracion
include('conexion.php'); 
session_start();
# Iniciamos sesion
if($_POST['enviar'])
{
	if($_POST['user'])
	{
		$sql = "SELECT * FROM usuarios WHERE nombre='".$_POST['user']."'";
		$res = mysqli_query($conexion, $sql);
		$tot = mysqli_num_rows($res);
			if($tot > 0)
			{
				$_SESSION['logueado'] = "SI";
				$_SESSION['usuario'] = $_POST['user'];
			} else 
			{
				echo "Usuario incorrecto";
			}
	}
}
?>
<?php if($_SESSION['logueado'] == "SI"){ ?>

<?php
$sql = "SELECT * FROM mensaje WHERE para='".$_SESSION['usuario']."' and leido IS NULL";
$res = mysqli_query($conexion, $sql);
$tot = mysqli_num_rows($res);
?>
Menu: <a href="listar.php">Ver mensajes</a> | <a href="crear.php">Crear mensajes</a> | <a href="cerrar.php">Cerrar sesion</a><br /><br />
Hola <?=$_SESSION['usuario']?>, Usted tiene <?=$tot?> mensajes sin leer.

<?php } else { ?>
<form method="post" action="" >
<center><strong>Usuarios para la pruba: marcofbb, entra-ya, dedydamy</strong></center></<br /><br />
Nombre de usuario:<br />
<input type="text" name="user" /><br /><br />
<input type="submit" name="enviar" value="Loguearse" />
</form>
<?php } ?>