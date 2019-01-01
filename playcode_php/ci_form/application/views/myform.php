<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Form</title>
</head>
<body>
	<?php echo validation_errors(); ?>
	<?php echo form_open('form'); ?>

		<h5>Frase:</h5>
		<input type="text" name="frase" value="<?php echo set_value('frase'); ?>" size="50"/>

		<h5>Autor:</h5>
		<input type="text" name="autor" value="<?php echo set_value('autor'); ?>" size="50" />

		<div><input type="submit" value="Submit"/></div>
	</form>
</body>
</html>