<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tabuada</title>
</head>
<body>
	<form method="POST">
		<input type="number" name="num" placeholder="Digite o número aqui" required><br/><br/>
		<input type="submit" value="Mostrar Tabuada"><br/><br/>
	</form>
</body>
</html>

<?php

$tab = 0;
$num = $_POST['num'];

 while ($tab <= 10) {
 	echo "<strong>".$num."</strong> vezes <strong>".$tab."</strong> = <strong>".$num*$tab."</strong></br>";
 	$tab++;
 }

/* 12/06/17 - Exercício de lógica:
"Faça um programa que leia um número inteiro qualquer e mostre sua tabuada na tela"
*/