<?php
	require 'config.php';

	$frase = $_POST['frase'];
	$autor = $_POST ['autor'];

	//$sql = "INSERT INTO lista SET frase = '$frase', autor = '$autor'";
	$sql = "INSERT INTO `lista` (`id`, `frase`, `autor`) VALUES (NULL, '{$frase}', '{$autor}')";

    $pdo->query($sql);


	echo "<p>Frase inserida com sucesso!</p>";
	echo "<br/>";
	echo "<p><a href='controle.php'>Voltar</a></p>";