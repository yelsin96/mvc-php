<?php require "vista/layouts/header.php" ?>

<div class="row">
	<div class="col-md-12">
		<h1>Nuevo Producto</h1>
	</div>
</div>
			
<form action="" method="get">
	
		<div class="mb-3">
			<label for="formGroupExampleInput" class="form-label">NOMBRE</label><br>
			<input type="text"  name="nombre" placeholder="nombre" required><br>
		</div>
		<div class="mb-3">
			<label for="formGroupExampleInput2" class="form-label">PRECIO</label><br>
			<input type="text" name="precio"required><br>
		</div>
		<div class="mb-3">
			<label for="formGroupExampleInput" class="form-label">PROVEDOR</label><br>
			<input type="text"  name="provedor" placeholder="proveedor" required><br>
		</div>
		<div class="mb-3">
			<label for="formGroupExampleInput2" class="form-label">CATEGORIA</label><br>
			<input type="text" name="categoria"required><br>
		</div>
			<input type="hidden" name="c" value="productos">
			<input type="hidden" name="m" value="guardar">
			<input type="submit" class="btn btn-outline-dark" name="btn"></button>
			
</form>
<?php require "vista/layouts/footer.php" ?>

