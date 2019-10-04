<!DOCTYPE html>
<html>
<head>
	<title>Administrador</title>
	<meta charset="utf-8">
	<meta name="viewpor" content="width=device-width, initial-scale=1">

 <!-- css -->
<link rel="stylesheet" type="text/css" href="../../css/estilo.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>


<body ">

<<?php
	include'conexionBD.php' ;
	$sql="SELECT * FROM Cliente";
	$resultado=mysqli_query($conexion,$sql);

	?>

<header class="header">

	<div class="container administrador-nav-container">
		<a href="#" class="admi">Admiistrador </a>
		<nav class="navigation">
<ul>
	<li><a href="index.html">Inicio </a></li>
	<li><a href="#">Inventario </a></li>
	<li><a href="#">Terapeutas </a></li>

</ul>
</nav>
	</div>
</header>

<main class="main">
	<div >
		<a href="AgregarTerapeuta.php">Agregar</a>
		<table border="3" class="table-active">
			<thead >

				<tr>

					<th scope="col" class="">idTerapeuta</th>
					<th scope="col">Nombre</th>
         		    <th scope="col">Apellido Paterno</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">correo</th>
				</tr>

			</thead>


			<tbody>

				<?php 	while ($filas=mysqli_fetch_assoc($resultado)) {  ?>

				<tr> 
					
					<td><?php echo $filas["idTerapeuta"] ?></td>
					<td><?php echo $filas["nombre"] ?></td>
					<td><?php echo $filas["apellidoPaterno"]  ?></td>
					<td><?php echo $filas["cedulaProfesional"]  ?></td>
                    <td><?php echo $filas["telefono"]  ?></td>
                    <td><?php echo $filas["Direccion_idDireccion"]  ?></td>
                    <td><?php echo $filas["password"]  ?></td>
                    <td><?php echo $filas["correo"]  ?></td>


					<td>
						<a href="eliminarTerapeuta.php?idTerapeuta=<?php echo $filas['idTerapeuta']?>" <span class="badge">>Eliminar</a>
						<a href="modificarTerapeuta.php?idTerapeuta=<?php echo $filas['idTerapeuta']?>">Modificar</a>
						

					</td>
			<tr/>

			<?php }  ?>
			<a href=" # ">Regresar</a>
			</tbody>

		</table>
	</div>

</main>
<footer>

	<div class="footer">
		<p>Numeros de Contacto: </p>
		<p>777562356</p>
	</div>
</footer>


</body>
</html>