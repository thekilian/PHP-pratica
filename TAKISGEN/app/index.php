<?php
require 'includes/config.php';
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

	// Só essa query é suficiente, mas tem que adicionar o restante dos dados
	$sql = "SELECT id, frase, autor FROM `lista` ORDER BY RAND() LIMIT 1"; // acertando a query
	$result = $pdo->query($sql); //não reatribua valores às mesmas variáveis

	/*
		Aqui ele pede pro PDO buscar os dados do objeto retornado
		como um array associativo
	*/
	$chosen_one = $result->fetch(PDO::FETCH_ASSOC);

	// descomente essa linha abaixo para ver como vieram os dados
	//var_dump($chosen_one);

	/*
	Um jeito mais elegante de escrever strings no PHP
	sem ter que usar um monte de pontos.

	Só funciona se a string não tiver aspas. Isso não funcionaria aqui por exemplo:

	"<span class="{$variavel}"> Algum texto </span>
	*/
	echo "{$chosen_one['frase']} <br> <strong>{$chosen_one['autor']}</strong>";


?>

	</div>
	<br><br>

	<div class="form-group">
		<form method="POST" action="insert.php">
			<input class="form-control" type="text" name="frase" placeholder="Digite a frase" required=""><br>
			<input class="form-control" type="text" name="autor" placeholder="Digite o nome do autor" required=""><br>
			<button class="btn btn-success btn-block">Adicionar frase</button>
		</form>
	</div>

</div>

</body>
</html>
