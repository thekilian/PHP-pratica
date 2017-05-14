<?php

	$dsn = "mysql:dbname=frases;host=localhost;charset=utf8";
	$dbuser = "root";
	$dbpass = "";

	try {
		$pdo = new PDO($dsn, $dbuser, $dbpass);
	} catch(PDOException $e) {
		echo "Falhou a conexão: ".$e->getMessage();
	}