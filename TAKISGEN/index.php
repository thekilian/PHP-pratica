<?php
require 'config.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Frases</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
<div class="container">

	<h1>Frases...</h1>
	<hr>

	<div id="mostra-frase">

<!--DB: frases/lista/id, frase, autor-->

<?php
	//mysqli_set_charset($connect, 'utf8');
	
	$sql = "SELECT COUNT(id) AS num_frases FROM `lista`";
	$sql = $pdo->query($sql);
	
	if($sql->rowCount() > 0) {
		$sql = "SELECT id AS lista FROM `lista` ORDER BY RAND() LIMIT 1";
		$sql = $pdo->query($sql);
		
		echo $lista['frase']."<br/>".$lista['autor'];
	}

?>

	</div>
	<br><br>

	<div class="form-group">
		<form method="POST" action="">
			<input class="form-control" type="text" name="frase" placeholder="Digite a frase" required=""><br>
			<input class="form-control" type="text" name="autor" placeholder="Digite o nome do autor" required=""><br>
			<button class="btn btn-success btn-block">Adicionar frase</button>

		</form>
	</div>

</div>

</body>
</html>  