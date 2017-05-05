<?php
	require 'config.php';

	$frase = $_POST['frase'];
	$autor = $_POST ['autor'];

	$sql = "INSERT INTO `lista` VALUES ($frase, $autor)";
	$ins = $pdo->query($sql);

	echo "Frase inserida com sucesso!";
	echo "<br/>";
	echo "<a href='index.php'>Voltar</a>";
