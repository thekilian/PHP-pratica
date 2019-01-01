<?php
try {
    $pdo = new PDO("mysql:dbname=projeto_caixaeletronico;host=localhost", "root", "");
} catch(PDOExpection $e) {
    echo "ERRO - Falhou a conexão: ".$e->getMessage();
    exit;
}