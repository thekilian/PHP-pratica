<?php
$dsn = "mysql:dbname=projeto_acomp;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
 	$pdo = new PDO($dsn, $dbuser, $dbpass);
} catch(PDOExecption $e) {
 	echo "Falhou a conexão: ".$e->getMessage();
}