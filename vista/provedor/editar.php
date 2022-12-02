<?php require "vista/layouts/header.php" ?>
<h1>EDITAR PROVEDOR</h1>
<hr>
<form action="">
	<?php foreach ($dato as $value): ?>
		<?php  foreach ($value as $v ): ?>
		<label for="">DESCRIPCION</label> <br>
		<input type="text" name="descripcion" value="<?php echo $v['descripcion'] ?>"><br>
		
		<input type="hidden" name="id" value="<?php echo $v['id'] ?>">
		<input type="hidden" name="c" value="provedor">
		<input type="submit" name="btn" class="btn btn-success" value="ACTUALIZAR">
		<?php endforeach ?>
	<?php endforeach ?>
	<input type="hidden" name="m" value="update">
</form>
<?php require "vista/layouts/footer.php" ?>