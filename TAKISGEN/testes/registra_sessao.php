<?php

/*
== SIMULANDO CONEXÃO COM O BANCO ==

Retirado de várias partes do código, não precisa implementar essa parte
 */
// Reutilizando nosso config.php inclusive nos testes! ;)
require '../app/config.php';

try {
	$pdo = new PDO($dsn, $dbuser, $dbpass);
} catch(PDOException $e) {
	echo "Falhou a conexão: ".$e->getMessage();
}
/*
 == Início do Stub ==

Stub é uma simulação de uma parte do seu código.
Mais detalhes em: https://pt.wikipedia.org/wiki/Stub

*/

// Stub que simula o nosso POST vindo do formulário
$email = 'nao@teste.com';
$senha = '123';
// == Fim do Stub ==

// Retirado da tela de login, para simularmos nossa aplicação:
$sql = $pdo->query("SELECT id, nome, email, cor FROM usuarios WHERE email = '$email' AND senha = '$senha'");

// Como este é um teste controlado, não precisamos do 'if' que está no arquivo login.php (linha 24)
$user = $sql->fetch(PDO::FETCH_ASSOC);
// Pra garantir os resultados, vamos dar output no nosso resultado do banco:
echo "Variável \$user: <br>";
var_dump($user);
echo "<hr>";

// THE MAGIC!!!!

    foreach ($user as $chave => $valor) {
        $_SESSION[$chave] = $valor;
    }

/*
Acabamos de reduzir várias linhas em apenas duas. Com a vantagem de que se o
usuário tiver mais um recurso que quisermos, por exemplo, campo "Telefone",
ele já vai ser adicionado automaticamente na variável de sessão
*/

echo "Variável \$_SESSION: <br>";
var_dump($_SESSION);