<?php 
include_once("tools/header.php");
include_once("tools/header2.php");
 ?>
 <div class="container">
 	<center><h3>Iniciar sesion</h3>
 	<h3>Utilizando tu cuenta de HOTEL LOS SANTOS POTOSÍ</h3>
 	<img src="img/usuario.png" width="200" height="200" style="border-radius: 10px;"></center>
 	<form method="POST" action="login.php">
 		<label>Correo</label>
 		<input type="correo" name="correo" class="form-control" placeholder="ejemplo@gmail.com" >
 		<label>Contraseña</label>
 		<input type="password" class="form-control" name="contrasena"><br>
 		<center><aside class="container" style="font-size: 22px;">Para realizar reservas deves unicias sesion en nuestra pagina web y ir a link de las habitaciones y resérvalos</aside></center><br>
 		<p><a href="registrarse.php" class="btn btn-outline-success">Crear Nueva cuenta</a>
 		<input type="submit" name="enviar" class="btn btn-outline-success" value="Iniciar"></p>
 	</form>
 </div>
 <?php 
include_once("tools/footer.php");
  ?>