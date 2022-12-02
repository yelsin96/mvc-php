<?php require "vista/layouts/header.php" ?>
<h1>Nuevo Proveedor</h1>
<hr>
<form action="" method="get">
	<label for="">DESCRIPCION</label> <br>
	<input type="text" name="descripcion" required><br>

	<input type="hidden" name="c" value="provedor"><br>
	<input type="submit" class="btn btn-outline-dark" name="btn"></button>
	<input type="hidden" name="m" value="guardar">
</form>
<?php require "vista/layouts/footer.php" ?>