<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>App Slim</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	</head>
	<body>
		<h1 class="text-center">Ejercicio 2</h1>

		<div class="container">

			<form class="form-inline">
			  <div class="form-group">
			    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Ingresar email">
			  </div>
			  <button type="submit" class="btn btn-default">Buscar</button>
			</form>

			<br>

			<table class="table">
				<tr>
				  <td class="success">Name</td>
				  <td class="success">Email</td>
				  <td class="success">Position</td>
				  <td class="success">Salary</td>
				  <td class="success"></td>
				</tr>
				<?php
					foreach ($datos_empleados as $valor) {
				?>
					<tr>
			    		<td> <?= print_r($valor->name); ?></td>
			    		<td> <?= print_r($valor->email); ?></td>
			    		<td> <?= print_r($valor->position); ?></td>
			    		<td> <?= print_r($valor->salary); ?></td>
			    		<td class="active text-center"><a href="">Detalle</a></td>
			    	</tr>
			    <?php
					}
				?>
			</table>

		</div>

		<script src="https://code.jquery.com/jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</body>
</html>