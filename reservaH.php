<?php 
include_once("cnecionBD.php");
$id = $_POST['id'];
$entrada=$_POST['fechaE'];
$salida = $_POST['fechaS'];
$comentario =$_POST['comentario'];
$correo =$_POST['correo'];
$sql= "INSERT INTO reserva(id_habitacion, fecha_entrada, fecha_salida, comentario, id_usuario)
 VALUES ($id,'$entrada','$salida','$comentario','$correo')";
$q=mysqli_query($conexion,$sql);
header("location:ver.php");
 ?>