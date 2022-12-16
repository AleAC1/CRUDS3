<br>
	<h1>INGRESAR</h1>

	<form method="post">
		
		<input type="text" placeholder="Usuario" name="usuarioI" required>

		<input type="password" placeholder="Contraseña" name="claveI" required>

		<input type="submit" value="Ingresar">

</form>

<h2>Cuentas</h2>
<h4>
	Usuario:Administrador 
	<br>
	Contraseña: Password123!
<br><br>
	Usuario: Bibliotecario
	<br>
	Contraseña: Biblioteca123!
	<br>
</h4>
<br>
(**SI diferencia Mayusculas**)

<br>
<br>

<h4>Imagen Sacada de Bucket S3</h4>
<img src="https://prjcomputacions3.s3.amazonaws.com/itch.png" width="250px" height="auto" >


<?php
	$ingreso = new AdminC();
	$ingreso -> IngresoC();

?>