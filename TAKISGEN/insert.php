<?php
	require 'config.php';

	$frase = $_POST['frase'];
	$autor = $_POST ['autor'];

	$sql = "INSERT INTO `lista` (`id`, `frase`, `autor`) VALUES (NULL, '{$frase}', '{$autor}')";
	$pdo->query($sql);

	echo "Frase inserida com sucesso!";
	echo "<br/>";
	echo "<a href='index.php'>Voltar</a>";
