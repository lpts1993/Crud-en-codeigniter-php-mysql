<!DOCTYPE html>
<html lang="en">

<head>
	<title></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/style.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>
	<div class="container"><br> <br>
		<div class="container-fluid">
			<div>

			<a href="<?php echo base_url('agregar'); ?>"> <button type="button" class="btn btn-primary">agregar</button></a>


			</div><br>
			<table class="table table-success table-striped">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Nombre</th>
						<th scope="col">Apellido</th>
						<th scope="col">Genero</th>
						<th scope="col">Edad</th>
						<th scope="col">Acciones</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($persona as $per) :
						# code...
					?>
						<tr>
							<th scope="row"> <?= $per['id'] ?></th>
							<td><?= $per['nombre'] ?></td>
							<td><?= $per['apellido'] ?></td>
							<td><?= $per['sexo'] ?></td>
							<td><?= $per['edad'] ?></td>
							<td><a href="<?php echo base_url('editar/'.$per['id']) ?>"><button type="button" class="btn btn-primary">Edit</button></a> <a href="<?php echo base_url('eliminar/' . $per['id']) ?>"><button type="button" class="btn btn-danger">Borrar</button></a></td>

						</tr>
					<?php endforeach;

					?>
				</tbody>
			</table>

		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>

</html>