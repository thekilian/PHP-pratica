<?php
$dsn = "mysql:dbname=cad_usuario;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
 	$pdo = new PDO($dsn, $dbuser, $dbpass);
} catch(PDOExecption $e) {
 	echo "Falhou a conexão: ".$e->getMessage();
}