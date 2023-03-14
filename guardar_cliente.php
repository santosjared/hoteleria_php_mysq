<?php 
include_once ("conexionBD.php");
$correo= $_POST['email'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$contrasena = $_POST['contrasena'];
$pais = $_POST['pais'];
$telefono = $_POST['telefono'];
$contrasenaB= $_POST['rcontrasena'];
$correoBD;
$ql="SELECT correo FROM usuario
WHERE correo='$correo'";
$q = mysqli_query($conexion,$ql);
while($fila = mysqli_fetch_array($q)) {
	$correoBD = $fila['correo'];
}
if ($correoBD==$correo) {
	include_once("registrarse.php");
}
else{
	if ($contrasena!=$contrasenaB) {
		header("location:registrarse.php");
	}
	else{
$contrasena = password_hash($contrasena, PASSWORD_DEFAULT, array("cost"=>12));
$sql = "INSERT INTO usuario(correo,nombre,apellido,contrasena,pais,telefono) 
VALUES('$correo','$nombre','$apellido','$contrasena','$pais','$telefono')";
$q=mysqli_query($conexion,$sql);
	header("location:perfil.php");
}
}
?>