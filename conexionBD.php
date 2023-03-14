<?php 
define('HOST','localhost');
define('USER', 'root');
define('PASS', '');
define('BD','hotel_los_santos');
$conexion= mysqli_connect(HOST,USER,PASS,BD);
if(!$conexion)
{
	die("ERROR de Conexion");
}
 ?>
