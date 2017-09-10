<?php
/*
    === Escopo ===
    # Syntax Parser = É o cara que lê o seu código e faz duas coisas:

    1) Vê se tem algo "não executável" - Syntax error
    "falta ; ?"
    "function tem parâmetro ou não?"
    "Essa classe existe um pai? - extends"

    2) Alocar CONTEXTOS DE EXECUÇÃO

    # Contexto de código (sin.: LEXICAL ENVIRONMENT) = Onde o "código mora". 
    Literalmente onde o código está escrito. É um mini contexto de execução, protegido.

    # Contexto de execução = Área de memória que o código está sendo executado, quem
    Decide qual parte do código que vai estar rodando é o INTERPRETADOR PHP

    # Hoisting = áreas de execução do código que o INTERPRETADOR COLOCA ANTES OU DEPOIS
    do que ele acha legal. Aloca os contextos de código de cada função / classe.

    ===== legendas =====
    legenda: ###### bloco de memória

*/

//require 'config.php'; -> contexto de código
// Constantes

require('functions.php');

define("CHUCK", 'Norris');

$base_url = "meusite.com";
mostra_url($base_url); // Chama o lexical environment pro Execution Context
echo "<hr>";

mostra_constante();

echo "<hr>";

$result = soma(4,5);
echo $result; // cospe pro contexto do apache




