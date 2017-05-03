<?php

	$dsn = "mysql:dbname=frases;host=localhost;charset=utf8"; //Aqui você especifica o charset
	$dbuser = "root";
	$dbpass = "";

	try {
		$pdo = new PDO($dsn, $dbuser, $dbpass);
	} catch(PODException $e) {
		echo "Falhou a conexão: ".$e->getMessage();
	}