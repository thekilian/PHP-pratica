<?php
/*
== Arquivo com funções no banco de dados ==
*/

//Se aqui o banco trabalha, importante fazer as configs do banco aqui:
require 'config.php';

// Busca uma frase aleatória no banco
function get_random_phrase($pdo){
    $sql = "SELECT id, frase, autor FROM lista ORDER BY RAND() LIMIT 1";
    $result = $pdo->query($sql);

    return $result->fetch(PDO::FETCH_ASSOC);
}
