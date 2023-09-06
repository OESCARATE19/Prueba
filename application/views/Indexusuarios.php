<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $titulo; ?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
  <div>
    <h3>Datos Usuario</h3>
    <form class="form-group" action="<?php echo site_url('index/guardarCliente') ?>" method="post">
      <label for="nit">Nit</label>
      <input class="form-control" type="text" name="Nit" value="" placeholder="Ingrese el Nit" required>
      <label for="nombre">Nombre</label>
      <input class="form-control" type="text" name="Nombre" value="" placeholder="Ingrese el Nombre" required>
      <label for="telefono">Telefono</label>
      <input class="form-control" type="number" name="Telefono" value="" placeholder="Ingrese el Telefono" required>
      <label for="correo">Correo</label>
      <input class="form-control" type="text" name="Correo" value="" placeholder="Ingrese el correo" required>
      <label for="direccion">Direccion</label>
      <input class="form-control" type="text" name="Direccionl" value="" placeholder="Ingrese direccion completa" required>
      <button class="btn btn-primary" type="submit">Boton Guardar</button>
      
    </form>
  </div>
</div>

	<hr>
	<table class="table table-hover table-striped">
		<thead>
			<th>Nit</th>
			<th>Nombre</th>
			<th>Telefono</th>
			<th>Correo</th>
      <th>Direccion</th>
		</thead>
		<tbody>
			<?php foreach ($resultados as $row): ?>
				<tr>
					<td><?php echo $row->Nit; ?></td>
					<td><?php echo $row->Nombre; ?></td>
					<td><?php echo $row->Telefono; ?></td>
          <td><?php echo $row->Correo; ?></td>
          <td><?php echo $row-> Direccionl; ?></td>
					<td>
						<form action="<?php echo site_url('index/eliminar/' . $row->Nit); ?>" method="post">
						 <button class="btn btn-danger" type="submit">Eliminar</button>
                		</form>
          </td>
          <td><form action="<?php echo site_url('index/eliminar/' . $row->Nit); ?>" method="post">
						 <button class="btn btn-warning" type="submit">Modificar</button>
                		</form>
          </td>
				</tr>
			<?php endforeach ?>
		</tbody>
		<tfoot>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
		</tfoot>
	</table>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
	<script>
    // Agregar un escuchador de eventos clic para los botones de eliminar
    const eliminarButtons = document.querySelectorAll('.eliminar-btn');
    eliminarButtons.forEach(button => {
        button.addEventListener('click', function() {
            const idUsuario = this.getAttribute('data-idusuario');

            // Realizar una solicitud AJAX para eliminar el usuario
            const xhr = new XMLHttpRequest();
            xhr.open('POST', '<?php echo site_url('index/eliminar'); ?>', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Actualizar la tabla después de eliminar el usuario
                    // Aquí puedes realizar alguna acción adicional si es necesario
                    // Por ejemplo, mostrar un mensaje de éxito, etc.
                    // Si la respuesta del controlador devuelve datos actualizados, puedes refrescar la tabla.
                }
            };
            xhr.send('idusuario=' + encodeURIComponent(idUsuario));

            // Si no estás utilizando AJAX, la acción predeterminada del formulario eliminará el usuario
            // Sin embargo, puede haber redireccionamientos y es posible que la tabla no se actualice sin recargar la página.
        });
    });
	</script>
</body>
</html>

