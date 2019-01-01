<?php
try {
	$pdo = new PDO("mysql:dbname=projeto_convite;host=localhost", "root", "pass"); // update info before run the project
} catch(PDOException $e){
	echo "Falhou a conexão: ".$e->getMessage();
	exit;
}