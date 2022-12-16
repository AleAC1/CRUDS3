<?php 
	session_start();
	if (!$_SESSION["Ingreso"]) {
		header("location:index.php?ruta=ingreso");
        exit();
	}
 ?>
<br>
	<h1>Prestamos de Libros</h1>
	<br>
	<table id="t1" border="1">
		
		<thead>
			
			<tr>
				<th>IdPrestamo</th>
				<th>FechaPrestamo</th>
				<th>FechaDevolucion</th>
				<th>EstadoDevolución</th>
				<th>Observaciones</th>
                <th>IdLibro</th>
				<th>NoControl</th>     
				<th></th>        			        
				<th></th>				
				<th></th>

			</tr>

		</thead>

		<tbody>
			
			
			<?php
				$mostrar = new PrestamoLibroC();
				$mostrar -> MostrarPrestamoLibroC();
			?>

		</tbody>

	</table>

	<?php
		$eliminar = new PrestamoLibroC();
		$eliminar -> BorrarPrestamoLibroC();
	?>
