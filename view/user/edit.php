<?php require_once('view/default/header.php');?>

<!-- Section -->
<section>
	<div class="row">
		<div class="col">
			<!-- Title -->
			<h1>Editar</h1>
			<!-- End Title -->
		</div>
	</div>

	<hr>

	<form action="<?php print URL;?>/user/UpdateUser" method="POST">

		<input type="hidden" name="id" value="<?php print $user->id;?>" required>		
		<div class="row">					
		  <div class="form-group col col-md-6">
		    <label for="nombre">Nombres</label>
		    <input type="text" class="form-control" id="nombre" placeholder="Nombres"  name="nombre" value="<?php print $user->nombre;?>" required>
		  </div>

		  <div class="form-group col col-md-6">
		    <label for="apellido">Apellidos</label>
		    <input type="text" class="form-control" id="apellido" placeholder="Apellidos" value="<?php print $user->apellido;?>"  name="apellido" required>
		  </div>
		  <div class="form-group col col-md-6">
		    <label for="telefono">Teléfono</label>
		    <input type="text" class="form-control" id="telefono" placeholder="Teléfono"  name="telefono" value="<?php print $user->telefono;?>" required>
		  </div>
		  <div class="form-group col col-md-6">
		    <label for="fecha">Fecha</label>
		    <input type="date" class="form-control" id="fecha" placeholder="Fecha"  name="fecha" value="<?php print $user->fecha;?>" required>
		  </div>
		</div>
	</form>
</div>