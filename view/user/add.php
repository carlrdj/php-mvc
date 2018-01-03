<?php require_once('view/default/header.php');?>

<!-- Section -->
<section>
	<div class="row">
		<div class="col">
			<!-- Title -->
			<h1>Registrar</h1>
			<!-- End Title -->
		</div>
	</div>

	<hr>

	<!-- Form -->
	<form action="<?php print URL;?>user/InsertUser" method="POST">	
		<div class="row">					
		  <div class="form-group col col-md-6">
		    <label for="nombre">Nombres</label>
		    <input type="text" class="form-control" id="nombre" placeholder="Nombres"  name="nombre" required>
		  </div>
		  <div class="form-group col col-md-6">
		    <label for="apellido">Apellidos</label>
		    <input type="text" class="form-control" id="apellido" placeholder="Apellidos"  name="apellido" required>
		  </div>
		  <div class="form-group col col-md-6">
		    <label for="telefono">Teléfono</label>
		    <input type="text" class="form-control" id="telefono" placeholder="Teléfono"  name="telefono" required>
		  </div>
		  <div class="form-group col col-md-6">
		    <label for="fecha">Fecha</label>
		    <input type="date" class="form-control" id="fecha" placeholder="Fecha"  name="fecha" required>
		  </div>
		  <div class="col col-md-12 text-center">
		    <button type="submit" class="btn btn-success btn-lg">Guardar</button>
		  </div>
		</div>
	</form>
	<!-- End Form -->
</section>
<!-- End Section -->