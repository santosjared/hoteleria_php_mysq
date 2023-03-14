<?php 
include_once("conexionBD.php");
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$correoB;
$cont=0;
$sql="SELECT correo,contrasena FROM usuario
WHERE correo='$correo'";
$query=mysqli_query($conexion,$sql);
while ($colum= mysqli_fetch_array($query)) {
 	$correoB = $colum['correo'];
 }
while ( $colum= mysqli_fetch_array($query)) {
	if (password_verify($contrasena,$colum['contrasena']))
	{
		$cont++;
	}
}
 if ($cont>0) {
 	header("location:perfil.php");
 }
 else
 {
 	echo "contraseña o email es incorrecto";
 }
 ?>
