<?php require_once('view/default/header.php');?>

<!-- Section -->
<section>

	<div class="row">
		<div class="col">
			<!-- Title -->
			<h1>Lista</h1>
			<!-- End Title -->

			<!-- Button Add -->
			<a href="<?php print URL;?>user/FormInsert" class="btn btn-outline-primary pull-right">
				Agregar usuario
			</a>
			<!-- End Button Add -->
		</div>
	</div>

	<hr>
	
	<div class="row">
		<div class="col">
			<!-- Table -->
			<table class="table table-striped table-hover">
				<thead class="thead-dark">
					<tr>
						<th>Id</th>
						<th>Nombres</th>
						<th>Apellidos</th>
						<th>Teléfono</th>
						<th>Fecha</th>
						<th></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach ($data as $user):
					?>
					<tr>
						<td><?php print $user->id;?></td>
						<td><?php print $user->nombre;?></td>
						<td><?php print $user->apellido;?></td>
						<td><?php print $user->telefono;?></td>
						<td><?php print $user->fecha;?></td>
						<td>
							<a href="<?php print URL;?>user/FormUpdate/<?php print $user->id;?>" class="btn btn-outline-warning">
								Editar
							</a>
						</td>
						<td>
							<a href="#" onclick="eliminar(<?php print $user->id;?>)" class="btn btn-outline-danger">
								Eliminar
							</a>
						</td>
					</tr>			
					<?php
					endforeach;
					?>
				</tbody>
			</table>
			<!-- End Table -->
		</div>
	</div>
</section>
<!-- End Section -->

<script>
	function eliminar(id){
		if (window.confirm('¿Seguro que desea Eliminar a usuario?\n:D')) {
			method = "post";
	    var form = document.createElement("form");
	    form.setAttribute("method", method);
	    form.setAttribute("action", "<?php print URL;?>?c=user&a=DeleteUser");

	    var hiddenField = document.createElement("input");
	    hiddenField.setAttribute("type", "hidden");
	    hiddenField.setAttribute("name", "id");
	    hiddenField.setAttribute("value", id);

	    form.appendChild(hiddenField);

	    document.body.appendChild(form);
	    form.submit();
      console.log('Eliminado');
    } else {
      console.log('De la que se salvó :D');
    }
	}
</script>

<?php require_once('view/default/header.php');?>