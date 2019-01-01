<?php
try {
	$pdo = new PDO("mysql:dbname=projeto_caixaeletronico;host=localhost;charset=utf8", "root", ""); // update info before run the project
} catch(PDOException $e) {
	echo "Falhou a conexão: ".$e->getMessage();
	exit;
}