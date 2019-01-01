<?php

try {
	global $pdo;
	$pdo = new PDO("mysql:dbname=projeto_mmn;host=localhost;charset=utf8", "root", "pass"); // update info before run the project
} catch(PDOException $e) {
	echo "Falhou a conexão: ".$e->getMessage();
	exit;
}

$limite = 3;

$patentes = array(

);