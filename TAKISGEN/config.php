<?php

	$dsn = "mysql:dbname=frases;host=localhost";
	$dbuser = "root";
	$dbpass = "";

	try {
		$pdo = new PDO($dsn, $dbuser, $dbpass);
	} catch(PODException $e) {
		echo "Falhou a conexão: ".$e->getMessage();
	}