<?php require "vista/layouts/header.php" ?>
<h1>NUEVO</h1>
<hr>
<form action="">
	<?php foreach ($dato as $value): ?>
		<?php  foreach ($value as $v ): ?>
		<label for="">NOMBRE</label> <br>
		<input type="text" name="nombre" value="<?php echo $v['nombre'] ?>"><br>
		<label for="">PRECIO</label><br>
		<input type="text" name="precio" value="<?php echo $v['precio'] ?>"><br>	
		<label for="">PROVEDOR</label> <br>
		<input type="text" name="provedor" value="<?php echo $v['id_provedor'] ?>"><br>
		<label for="">CATEGORIA</label> <br>
		<input type="text" name="categoria" value="<?php echo $v['id_categoria'] ?>"><br>
		<input type="hidden" name="id" value="<?php echo $v['id'] ?>">
		<input type="submit" name="btn" class="btn btn-success" value="ACTUALIZAR">
		
		<?php endforeach ?>
	<?php endforeach ?>
	<input type="hidden" name="m" value="update">
	<input type="hidden" name="c" value="productos">
</form>
<?php require "vista/layouts/footer.php" ?>