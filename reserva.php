<?php 
include_once("tools/header.php");
include_once("tools/header2.php");
 ?>
 <div class="container">
 	<form method="POST" action="reservaH.php">
 		<p><label>Correo</label></p><input type="hidden" name="id" placeholder="1">
 		<input type="emial" name="correo" class="form-control">
 	<p><label>Tipo de Habitacion</label></p>
 	<p><select>
 		<option value="a">Habitacion Clasica</option>
 		<option value="b">Habitacion Super Dulzura y Encanto</option>
 		<option value="c">Habitacion Excutive</option>
 		<option value="d">Junior Suite</option>
 		<option value="e">Junior Suite Avenue</option>
 		<option value="f">Suite</option>
 		<option value="g">Suite Avenue</option>
 		<option value="h">Suite Imperial</option>
 		<option value="i">Suite Youssouppv</option>
 		<option value="j">Suite JosePhine</option>
 	</select></p>
	<p><label>Comentario</label></p>
    <P><textarea class="form-control" rows="5" name="comentario"></textarea></p>
	<p><label>Entrada:</label></p>
	<p><input type="date" name="fechaE" placeholder="10/12/2018"></p>
	<p><label>Salida:</label></p>
	<p><input type="date" name="fechaS" placeholder="10/12/2018"></p>
	<p><label>Codigo Postal</label></p>
	<p><input type="text" name="postal" class="form-control"></p>
	<p><a href="inicio.php" class="btn btn-outline-success">CANCELAR</a>
		<input type="submit" name="resevar" class="btn btn-outline-success" value="RESERVAR">
	</p>
	</form>
	</div>
<?php
include_once("tools/footer.php");